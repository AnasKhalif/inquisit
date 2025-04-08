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
            ->select('categories.id', 'categories.kategori')
            ->get();

        if ($categories->isEmpty()) {
            return redirect()->route('dashboard')->with('error', 'Peserta tidak memiliki kategori soal.');
        }

        return redirect()->route('test.instructions', [
            'participantId' => $participant->id,
            'categoryId' => $categories->first()->id
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

        $questions = Question::where('category_id', $categoryId)->get();

        if ($questionId === null && $questions->isNotEmpty()) {
            $questionId = $questions->first()->id;
        }

        $currentQuestion = Question::findOrFail($questionId);

        if ($categoryId == 3) {
            $digits = explode(' ', $currentQuestion->pertanyaan);
            return view('test.questions', compact('participant', 'category', 'questions', 'currentQuestion', 'digits'));
        }

        return view('test.questions', compact('participant', 'category', 'questions', 'currentQuestion'));
    }


    public function storeAnswer(Request $request, $participantId, $categoryId, $questionId)
    {
        $request->validate([
            'answer' => 'required|string'
        ]);

        $question = Question::findOrFail($questionId);

        // Simpan jawaban
        ParticipantAnswer::create([
            'participant_id' => $participantId,
            'question_id' => $questionId,
            'jawaban' => $request->answer,
            'benar_salah' => $this->checkAnswer($question, $request->answer),  // Cek apakah jawaban benar
            'waktu_respon' => 240 - $request->input('time_left', 240),  // Waktu yang digunakan
        ]);

        // Ambil soal berikutnya
        $nextQuestion = Question::where('category_id', $categoryId)
            ->where('id', '>', $questionId)
            ->first();

        if ($nextQuestion) {
            return redirect()->route('test.questions', [
                'participantId' => $participantId,
                'categoryId' => $categoryId,
                'questionId' => $nextQuestion->id
            ]);
        } else {
            return redirect()->route('test.relax', [
                'participantId' => $participantId,
                'categoryId' => $categoryId
            ]);
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
}
