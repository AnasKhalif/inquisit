<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\Category;
use App\Exports\ParticipantAnswerExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\File;

class OverviewController extends Controller
{
    public function export($categoryId, $participantId)
    {
        // Mengekspor data ke Excel
        return Excel::download(new ParticipantAnswerExport($categoryId, $participantId), 'jawaban_participant.xlsx');
    }

    public function exportPdf($categoryId, $participantId)
    {
        // Ambil data kategori berdasarkan ID
        $category = Category::findOrFail($categoryId);

        // Ambil data peserta berdasarkan ID
        $participant = Participant::findOrFail($participantId);

        // Ambil hanya jawaban yang relevan dengan kategori dan peserta
        $answers = $participant->answers()->whereHas('question', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })->get();

        // Generate PDF dari view yang sudah ada
        $pdf = PDF::loadView('overview.pdf', compact('category', 'participant', 'answers'));

        // Men-download PDF
        return $pdf->stream('jawaban_participant.pdf');
    }

    public function index(Request $request)
    {
        // Handle the search functionality
        $query = Participant::with('choices.category');

        if ($request->has('search') && $request->search) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Get the filtered participants
        $participants = $query->get();

        return view('overview.index', compact('participants'));
    }

    public function categoryDetails($categoryId, $participantId)
    {
        // Ambil data kategori berdasarkan ID
        $category = Category::findOrFail($categoryId);

        // Ambil data peserta berdasarkan ID
        $participant = Participant::findOrFail($participantId);

        // Ambil hanya jawaban yang relevan dengan kategori dan peserta
        $answers = $participant->answers()->whereHas('question', function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })->get();

        $previousTime = null;

        // Menghitung selisih waktu respon
        foreach ($answers as $key => $answer) {
            if ($previousTime === null) {
                // Jawaban pertama, set timeDifference dengan waktu respon pertama
                $answer->timeDifference = $answer->waktu_respon;
            } else {
                // Selisih antara waktu jawaban sekarang dan jawaban sebelumnya
                $answer->timeDifference = $answer->waktu_respon - $previousTime;
            }

            // Update previousTime untuk perhitungan selanjutnya
            $previousTime = $answer->waktu_respon;
        }


        return view('overview.categoryDetails', compact('category', 'participant', 'answers'));
    }
}
