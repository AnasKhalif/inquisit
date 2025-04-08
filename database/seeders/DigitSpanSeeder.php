<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DigitSpanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('questions')->insert([
            ['category_id' => 3, 'pertanyaan' => '3 7 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '378'],
            ['category_id' => 3, 'pertanyaan' => '2 6 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '268'],
            ['category_id' => 3, 'pertanyaan' => '3 9 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '392'],
            ['category_id' => 3, 'pertanyaan' => '1 5 7', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '157'],
            ['category_id' => 3, 'pertanyaan' => '4 3 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '432'],
            ['category_id' => 3, 'pertanyaan' => '8 1 4', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '814'],
            ['category_id' => 3, 'pertanyaan' => '2 5 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '259'],
            ['category_id' => 3, 'pertanyaan' => '7 4 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '743'],
            ['category_id' => 3, 'pertanyaan' => '6 2 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '629'],
            ['category_id' => 3, 'pertanyaan' => '5 8 1', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '581'],
        ]);

        // Digit Span - Backward
        DB::table('questions')->insert([
            ['category_id' => 3, 'pertanyaan' => '2 9 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '492'],
            ['category_id' => 3, 'pertanyaan' => '6 8 3', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '386'],
            ['category_id' => 3, 'pertanyaan' => '8 4 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '748'],
            ['category_id' => 3, 'pertanyaan' => '1 5 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '751'],
            ['category_id' => 3, 'pertanyaan' => '2 6 3', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '362'],
            ['category_id' => 3, 'pertanyaan' => '4 9 2', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '294'],
            ['category_id' => 3, 'pertanyaan' => '7 5 8', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '875'],
            ['category_id' => 3, 'pertanyaan' => '3 6 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '463'],
            ['category_id' => 3, 'pertanyaan' => '9 2 1', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '129'],
            ['category_id' => 3, 'pertanyaan' => '5 3 6', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '635'],
        ]);
    }
}
