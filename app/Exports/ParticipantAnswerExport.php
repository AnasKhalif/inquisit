<?php

namespace App\Exports;

use App\Models\ParticipantAnswer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ParticipantAnswerExport implements FromCollection, WithHeadings, WithMapping
{
    protected $categoryId;
    protected $participantId;
    protected $category;

    public function __construct($categoryId, $participantId)
    {
        $this->categoryId = $categoryId;
        $this->participantId = $participantId;
        $this->category = \App\Models\Category::find($categoryId);
    }

    public function collection()
    {

        return ParticipantAnswer::where('participant_id', $this->participantId)
            ->whereHas('question', function ($query) {
                $query->where('category_id', $this->categoryId);
            })
            ->get();
    }

    public function headings(): array
    {

        $headings = [
            'Nama Peserta',
            'Pertanyaan',
            'Jawaban',
            'Waktu Respon (detik)',
            'Benar/Salah',
        ];

        if ($this->category->kategori !== 'Digit Span') {
            $headings[] = 'Kategori Soal';
        }

        if ($this->category->kategori !== 'Color Word' && $this->category->kategori !== 'Aritmatika') {
            $headings[] = 'Tipe Soal';
        }

        return $headings;
    }

    public function map($answer): array
    {
        $data = [
            $answer->participant->name,
            $answer->question->pertanyaan ?: 'BLOCK',
            $answer->jawaban,
            $answer->waktu_respon,
            $answer->benar_salah,
        ];

        if ($this->category->kategori !== 'Digit Span') {
            $data[] = $answer->question->kategori_soal;
        }

        if ($this->category->kategori !== 'Color Word' && $this->category->kategori !== 'Aritmatika') {
            $data[] = $answer->question->type ?: 'N/A';
        }

        return $data;
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->insertNewRowBefore(2, 1);

        $sheet->getStyle('A1:P1')->getAlignment()->setHorizontal('center');

        $sheet->getColumnDimension('A')->setWidth(30);
        $sheet->getColumnDimension('B')->setWidth(50);
        $sheet->getColumnDimension('C')->setWidth(40);
        $sheet->getColumnDimension('D')->setWidth(30);
        $sheet->getColumnDimension('E')->setWidth(40);

        if ($this->category->kategori !== 'Digit Span') {
            $sheet->getColumnDimension('F')->setWidth(40);
        }

        if ($this->category->kategori !== 'Color Word' && $this->category->kategori !== 'Aritmatika') {
            $sheet->getColumnDimension('G')->setWidth(40);
        }

        return $sheet;
    }
}
