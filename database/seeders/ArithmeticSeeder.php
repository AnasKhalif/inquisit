<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArithmeticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gabungkan semua soal Aritmatika ke dalam satu array
        // $allArithmeticQuestions = [
        //     // Aritmatika - Mudah (1 angka)
        //     ['category_id' => 2, 'pertanyaan' => '5 + 5 = 10', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '7 - 4 = 3', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '9 - 3 = 5', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '4 + 6 = 11', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '8 - 2 = 6', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '3 + 5 = 8', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '10 - 7 = 3', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '6 + 3 = 9', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '3 + 4 = 7', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '12 - 4 = 7', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],

        //     // Aritmatika - Sedang (2 angka)
        //     ['category_id' => 2, 'pertanyaan' => '15 + 25 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '20 - 10 = 10', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '18 + 14 = 33', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '25 - 5 = 15', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '30 + 10 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '40 - 20 = 10', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '50 + 50 = 101', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '60 - 25 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '20 + 12 = 32', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '17 - 6 = 12', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],

        //     // Aritmatika - Sulit (3 angka)
        //     ['category_id' => 2, 'pertanyaan' => '150 + 200 = 350', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '220 - 110 = 100', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '300 + 400 = 700', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '500 - 150 = 351', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '800 + 120 = 920', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '700 - 350 = 360', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '900 + 100 = 1000', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '500 - 250 = 249', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        //     ['category_id' => 2, 'pertanyaan' => '1000 + 500 = 1500', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
        //     ['category_id' => 2, 'pertanyaan' => '300 - 200 = 101', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        // ];
        $allArithmeticQuestions = [
            // 10 Soal - Sedang
            ['category_id' => 2, 'pertanyaan' => '6 + 20 ÷ 4 x 8 - 12 + 25 = 59', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '23 + 32 ÷ 8 x 11 - 11 + 17 = 71', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '20 + 54 ÷ 9 x 3 - 10 - 25 = 4', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '6 + 24 ÷ 8 x 11 - 4 - 12 = 23', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '14 + 70 ÷ 10 x 4 - 7 + 12 = 49', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '12 + 27 ÷ 9 x 10 - 5 + 11 = 48', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '15 + 36 ÷ 6 x 5 - 19 + 3 = 34', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '25 + 30 ÷ 5 x 8 - 15 - 2 = 56', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '10 + 40 ÷ 10 x 12 - 18 + 9 = 48', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '7 + 21 ÷ 7 x 9 - 14 + 6 = 22', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],

            // 20 Soal - Sulit
            ['category_id' => 2, 'pertanyaan' => '50 + 36 ÷ 6 x 18 - 22 + 14 = 104', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '62 + 45 ÷ 9 x 20 - 38 + 11 = 138', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '44 + 54 ÷ 6 x 19 - 27 - 5 = 182', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '70 + 72 ÷ 12 x 28 - 30 + 8 = 218', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '36 + 60 ÷ 10 x 21 - 31 + 9 = 141', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '48 + 80 ÷ 8 x 22 - 44 - 12 = 187', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '63 + 42 ÷ 6 x 25 - 27 + 17 = 223', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '55 + 96 ÷ 12 x 30 - 45 - 6 = 194', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '46 + 99 ÷ 9 x 24 - 52 + 13 = 215', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '72 + 90 ÷ 15 x 33 - 60 - 5 = 205', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '60 + 84 ÷ 7 x 28 - 41 + 12 = 277', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '53 + 66 ÷ 6 x 19 - 36 - 4 = 188', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '47 + 88 ÷ 11 x 25 - 50 + 9 = 206', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '66 + 72 ÷ 12 x 30 - 48 + 6 = 191', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '40 + 45 ÷ 9 x 26 - 39 + 15 = 118', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '74 + 54 ÷ 6 x 21 - 33 + 11 = 241', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '68 + 60 ÷ 12 x 29 - 50 - 5 = 151', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '59 + 90 ÷ 9 x 28 - 46 + 8 = 248', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '45 + 42 ÷ 6 x 23 - 31 - 3 = 171', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '38 + 48 ÷ 12 x 26 - 28 + 7 = 118', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        ];

        shuffle($allArithmeticQuestions);

        DB::table('questions')->insert($allArithmeticQuestions);
    }
}
