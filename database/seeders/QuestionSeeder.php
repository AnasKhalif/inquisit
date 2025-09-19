<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            // Congruent (10 soal)
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],

            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Congruent', 'type' => null, 'jawaban_benar' => null],


            // Incongruent (10 soal)
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HITAM', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],

            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'hijau', 'warna_display' => 'text-green', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'BIRU', 'warna_teks' => 'merah', 'warna_display' => 'text-red-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'MERAH', 'warna_teks' => 'hitam', 'warna_display' => 'text-black-900', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => 'HIJAU', 'warna_teks' => 'biru', 'warna_display' => 'text-sky-500', 'kategori_soal' => 'Incongruent', 'type' => null, 'jawaban_benar' => null],

            // Control (10 soal)
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'merah', 'warna_display' => 'bg-red-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'merah', 'warna_display' => 'bg-red-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hijau', 'warna_display' => 'bg-green', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hijau', 'warna_display' => 'bg-green', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'biru', 'warna_display' => 'bg-sky-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'biru', 'warna_display' => 'bg-sky-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hitam', 'warna_display' => 'bg-black', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hitam', 'warna_display' => 'bg-black', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'merah', 'warna_display' => 'bg-red-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hijau', 'warna_display' => 'bg-green', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],

            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'biru', 'warna_display' => 'bg-sky-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hitam', 'warna_display' => 'bg-black', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'merah', 'warna_display' => 'bg-red-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'hijau', 'warna_display' => 'bg-green', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'biru', 'warna_display' => 'bg-sky-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
            ['category_id' => 1, 'pertanyaan' => '', 'warna_teks' => 'biru', 'warna_display' => 'bg-sky-500', 'kategori_soal' => 'Control', 'type' => null, 'jawaban_benar' => null],
        ];

        shuffle($questions);

        DB::table('questions')->insert($questions);
    }
}
