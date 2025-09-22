<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\ParticipantChoice;
use App\Models\Category;
use App\Models\Question;
use App\Models\ParticipantAnswer;

class TestController extends Controller
{
    public function start($participantId)
    {
        $participant = Participant::findOrFail($participantId);
        $categories = ParticipantChoice::where('participant_id', $participantId)
            ->join('categories', 'participant_choices.category_id', '=', 'categories.id')
            ->select('categories.id', 'categories.kategori', 'categories.waktu')
            ->get();

        if ($categories->isEmpty()) {
            return redirect()->route('dashboard')->with('error', 'Peserta tidak memiliki kategori soal.');
        }

        $category = $categories->first();
        $timeLeft = $category->waktu;

        return redirect()->route('test.instructions', [
            'participantId' => $participant->id,
            'categoryId' => $categories->first()->id,
            'timeLeft' => $timeLeft,
        ]);
    }

    public function instructions($participantId, $categoryId)
    {
        $participant = Participant::findOrFail($participantId);
        $category = Category::findOrFail($categoryId);

        return view('test.instructions', compact('participant', 'category'));
    }

    public function questions($participantId, $categoryId, $questionId = null)
    {
        $participant = Participant::findOrFail($participantId);
        $category = Category::findOrFail($categoryId);

        // Ambil urutan soal acak dari session, jika belum ada acak dan simpan
        $questionOrderKey = 'question_order_' . $participantId . '_' . $categoryId;
        $questionOrder = session($questionOrderKey);
        if (!$questionOrder) {
            $questions = Question::where('category_id', $categoryId)->get()->shuffle();
            $questionOrder = $questions->pluck('id')->toArray();
            session([$questionOrderKey => $questionOrder]);
        } else {
            $questions = Question::whereIn('id', $questionOrder)->get()->sortBy(function ($q) use ($questionOrder) {
                return array_search($q->id, $questionOrder);
            });
        }

        // Tentukan soal saat ini
        if ($questionId === null && count($questionOrder) > 0) {
            $questionId = $questionOrder[0];
        }

        $currentQuestion = Question::findOrFail($questionId);

        if ($category->id == 4 && $currentQuestion->phase == 'experimental') {
            $timeLeft = $category->waktu;
        } else if ($category->id == 4 && $currentQuestion->phase == 'control') {
            $timeLeft = 0;
        } else if ($category->id == 4 && $currentQuestion->phase == 'training') {
            $timeLeft = 0;
        } else {
            $timeLeft = $category->waktu;
        }

        if ($categoryId == 3) {
            $digits = explode(' ', $currentQuestion->pertanyaan);
            return view('test.questions', compact('participant', 'category', 'questions', 'currentQuestion', 'digits', 'timeLeft'));
        }

        return view('test.questions', compact('participant', 'category', 'questions', 'currentQuestion', 'timeLeft'));
    }


    public function storeAnswer(Request $request, $participantId, $categoryId, $questionId)
    {
        $request->validate([
            'answer' => 'required|string',
            'time_left' => 'required|integer|min:0',
        ]);

        $question = Question::findOrFail($questionId);
        $category = Category::findOrFail($categoryId);

        $initialTime = $category->waktu;
        // $timeLeft = $request->input('time_left');

        // $timeSpent = $initialTime - $timeLeft;
        // $timeSpent = max(0, min($initialTime, $timeSpent));
        if ($question->phase == 'training' || $question->phase == 'control') {
            // Jika fase Training atau Control, waktu respon di-set ke 0
            $timeSpent = 0;
        } else {
            // Jika fase Eksperimental, waktu yang tersisa dikurangi
            $timeSpent = $initialTime - $request->input('time_left');
            $timeSpent = max(0, min($initialTime, $timeSpent)); // Pastikan waktu tidak negatif
        }

        // Simpan jawaban
        ParticipantAnswer::create([
            'participant_id' => $participantId,
            'question_id' => $questionId,
            'jawaban' => $request->answer,
            'benar_salah' => $this->checkAnswer($question, $request->answer),  // Cek apakah jawaban benar
            'waktu_respon' => $timeSpent,  // Waktu yang digunakan
        ]);

        // Ambil urutan soal dari session
        $questionOrderKey = 'question_order_' . $participantId . '_' . $categoryId;
        $questionOrder = session($questionOrderKey, []);
        $currentIndex = array_search($questionId, $questionOrder);
        $nextQuestionId = $questionOrder[$currentIndex + 1] ?? null;

        if ($nextQuestionId) {
            return redirect()->route('test.questions', [
                'participantId' => $participantId,
                'categoryId' => $categoryId,
                'questionId' => $nextQuestionId
            ]);
        } else {
            // setelah soal terakhir → tampilkan form effort
            return view('test.effort', compact('participantId', 'categoryId'))->with('category', $category);
        }
    }

    private function checkAnswer($question, $answer)
    {
        if ($question->category_id == 1) {
            if (strtolower($answer) == strtolower($question->warna_teks)) {
                return 'benar';
            }
            return 'salah';
        } else if ($question->category_id == 2) {
            if (strtolower($answer) == strtolower($question->jawaban_benar)) {
                return 'benar';
            }
            return 'salah';
        } else if ($question->category_id == 3) {
            $digits = explode(' ', $question->jawaban_benar);  // Mengambil angka-angka yang diberikan

            // Cek jawaban berdasarkan tipe soal (forward/backward)
            if ($question->type == 'forward') {
                // Cek apakah jawaban sesuai dengan urutan yang benar
                $correctAnswer = implode(' ', $digits);
                if (trim($answer) == $correctAnswer) {
                    return 'benar';
                }
                return 'salah';
            } else if ($question->type == 'backward') {
                // Cek apakah jawaban sesuai dengan urutan terbalik
                $correctAnswer = implode(' ', array_reverse($digits));
                if (trim($answer) == $correctAnswer) {
                    return 'benar';
                }
                return 'salah';
            }
        } else if ($question->category_id == 4) {
            if (strtolower($answer) == $question->jawaban_benar) {
                return 'benar';
            }
            return 'salah';
        }
    }


    public function relax($participantId, $categoryId)
    {
        $participant = Participant::findOrFail($participantId);
        $categories = ParticipantChoice::where('participant_id', $participantId)
            ->join('categories', 'participant_choices.category_id', '=', 'categories.id')
            ->select('categories.id', 'categories.kategori')
            ->get();

        $currentIndex = $categories->pluck('id')->search($categoryId);
        $nextCategoryId = $categories->get($currentIndex + 1)->id ?? null;

        if ($nextCategoryId) {
            return view('test.relax', compact('participant', 'nextCategoryId'));
        } else {
            return redirect()->route('dashboard')->with('success', 'Tes selesai!');
        }
    }

    public function storeEffort(Request $request, $participantId, $categoryId)
    {
        $request->validate([
            'effort' => 'required|integer|min:0|max:10',
        ]);

        // Update effort di tabel participant_choices
        ParticipantChoice::where('participant_id', $participantId)
            ->where('category_id', $categoryId)
            ->update(['effort' => $request->effort]);

        // Setelah simpan → ke halaman relax
        return redirect()->route('test.relax', [
            'participantId' => $participantId,
            'categoryId' => $categoryId
        ]);
    }
}
