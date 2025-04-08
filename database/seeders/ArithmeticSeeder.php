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
        $allArithmeticQuestions = [
            // Aritmatika - Mudah (1 angka)
            ['category_id' => 2, 'pertanyaan' => '5 + 5 = 10', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '7 - 4 = 3', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '9 - 3 = 5', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '4 + 6 = 11', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '8 - 2 = 6', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '3 + 5 = 8', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '10 - 7 = 3', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '6 + 3 = 9', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '3 + 4 = 7', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '12 - 4 = 7', 'kategori_soal' => 'Mudah', 'jawaban_benar' => 'salah'],

            // Aritmatika - Sedang (2 angka)
            ['category_id' => 2, 'pertanyaan' => '15 + 25 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '20 - 10 = 10', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '18 + 14 = 33', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '25 - 5 = 15', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '30 + 10 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '40 - 20 = 10', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '50 + 50 = 101', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '60 - 25 = 40', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '20 + 12 = 32', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '17 - 6 = 12', 'kategori_soal' => 'Sedang', 'jawaban_benar' => 'salah'],

            // Aritmatika - Sulit (3 angka)
            ['category_id' => 2, 'pertanyaan' => '150 + 200 = 350', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '220 - 110 = 100', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '300 + 400 = 700', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '500 - 150 = 351', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '800 + 120 = 920', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '700 - 350 = 360', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '900 + 100 = 1000', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '500 - 250 = 249', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
            ['category_id' => 2, 'pertanyaan' => '1000 + 500 = 1500', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'benar'],
            ['category_id' => 2, 'pertanyaan' => '300 - 200 = 101', 'kategori_soal' => 'Sulit', 'jawaban_benar' => 'salah'],
        ];

        shuffle($allArithmeticQuestions);

        DB::table('questions')->insert($allArithmeticQuestions);
    }
}
