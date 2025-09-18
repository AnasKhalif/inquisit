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
        // DB::table('questions')->insert([
        //     ['category_id' => 3, 'pertanyaan' => '3 7 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '378'],
        //     ['category_id' => 3, 'pertanyaan' => '2 6 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '268'],
        //     ['category_id' => 3, 'pertanyaan' => '3 9 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '392'],
        //     ['category_id' => 3, 'pertanyaan' => '1 5 7', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '157'],
        //     ['category_id' => 3, 'pertanyaan' => '4 3 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '432'],
        //     ['category_id' => 3, 'pertanyaan' => '8 1 4', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '814'],
        //     ['category_id' => 3, 'pertanyaan' => '2 5 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '259'],
        //     ['category_id' => 3, 'pertanyaan' => '7 4 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '743'],
        //     ['category_id' => 3, 'pertanyaan' => '6 2 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '629'],
        //     ['category_id' => 3, 'pertanyaan' => '5 8 1', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '581'],
        // ]);

        // Digit Span - Backward
        // DB::table('questions')->insert([
        //     ['category_id' => 3, 'pertanyaan' => '2 9 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '492'],
        //     ['category_id' => 3, 'pertanyaan' => '6 8 3', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '386'],
        //     ['category_id' => 3, 'pertanyaan' => '8 4 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '748'],
        //     ['category_id' => 3, 'pertanyaan' => '1 5 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '751'],
        //     ['category_id' => 3, 'pertanyaan' => '2 6 3', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '362'],
        //     ['category_id' => 3, 'pertanyaan' => '4 9 2', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '294'],
        //     ['category_id' => 3, 'pertanyaan' => '7 5 8', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '875'],
        //     ['category_id' => 3, 'pertanyaan' => '3 6 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '463'],
        //     ['category_id' => 3, 'pertanyaan' => '9 2 1', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '129'],
        //     ['category_id' => 3, 'pertanyaan' => '5 3 6', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '635'],
        // ]);
        // Digit Span - Forward (15 items)
        // Digit Span - Forward (15 items)
        // DB::table('questions')->insert([
        //     ['category_id' => 3, 'pertanyaan' => '5 3 7 4 4 9 4', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5374494'],
        //     ['category_id' => 3, 'pertanyaan' => '6 6 5 0 2 5 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '6650259'],
        //     ['category_id' => 3, 'pertanyaan' => '5 2 4 2 7 9 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5242799'],
        //     ['category_id' => 3, 'pertanyaan' => '1 6 6 0 6 2 1', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '1660621'],
        //     ['category_id' => 3, 'pertanyaan' => '4 2 5 0 7 3 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '4250733'],
        //     ['category_id' => 3, 'pertanyaan' => '7 0 5 6 6 3 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '7056638'],
        //     ['category_id' => 3, 'pertanyaan' => '4 9 8 1 6 6 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '4981663'],
        //     ['category_id' => 3, 'pertanyaan' => '5 9 0 5 7 9 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5905798'],
        //     ['category_id' => 3, 'pertanyaan' => '8 6 0 2 9 0 5', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '8602905'],
        //     ['category_id' => 3, 'pertanyaan' => '1 4 9 9 3 9 6', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '1499396'],
        //     ['category_id' => 3, 'pertanyaan' => '0 4 6 2 2 2 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '0462223'],
        //     ['category_id' => 3, 'pertanyaan' => '5 8 8 4 7 7 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5884773'],
        //     ['category_id' => 3, 'pertanyaan' => '3 3 4 4 7 7 6', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '3344776'],
        //     ['category_id' => 3, 'pertanyaan' => '6 3 3 4 0 0 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '6334009'],
        //     ['category_id' => 3, 'pertanyaan' => '5 3 6 0 8 1 1', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5360811'],
        // ]);
        DB::table('questions')->insert([
            ['category_id' => 3, 'pertanyaan' => '5 3 7 4 8 9 6', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5374896'],
            ['category_id' => 3, 'pertanyaan' => '6 5 8 0 2 7 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '6580279'],
            ['category_id' => 3, 'pertanyaan' => '5 2 4 3 6 8 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5243689'],
            ['category_id' => 3, 'pertanyaan' => '1 6 8 0 2 5 3', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '1680253'],
            ['category_id' => 3, 'pertanyaan' => '4 2 5 7 0 3 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '4257038'],
            ['category_id' => 3, 'pertanyaan' => '7 0 5 6 8 3 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '7058399'],
            ['category_id' => 3, 'pertanyaan' => '4 9 8 3 6 7 1', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '4983671'],
            ['category_id' => 3, 'pertanyaan' => '5 9 0 7 3 1 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5907318'],
            ['category_id' => 3, 'pertanyaan' => '8 6 0 2 1 7 9', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '8602179'],
            ['category_id' => 3, 'pertanyaan' => '1 4 9 3 2 6 7', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '1493267'],
            ['category_id' => 3, 'pertanyaan' => '0 4 6 2 9 1 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '0462918'],
            ['category_id' => 3, 'pertanyaan' => '5 8 8 3 7 6 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5883627'],
            ['category_id' => 3, 'pertanyaan' => '3 3 4 7 5 8 2', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '3347582'],
            ['category_id' => 3, 'pertanyaan' => '6 3 5 4 2 0 8', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '6354208'],
            ['category_id' => 3, 'pertanyaan' => '5 3 6 9 7 1 4', 'kategori_soal' => null, 'type' => 'forward', 'jawaban_benar' => '5369714'],
        ]);


        // Digit Span - Backward (15 items)
        DB::table('questions')->insert([
            ['category_id' => 3, 'pertanyaan' => '6 0 2 5 9 3 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '7396205'],
            ['category_id' => 3, 'pertanyaan' => '7 3 8 2 4 5 6', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '6534237'],
            ['category_id' => 3, 'pertanyaan' => '6 5 8 9 2 1 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '7195862'],
            ['category_id' => 3, 'pertanyaan' => '4 9 8 2 1 5 6', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '6518942'],
            ['category_id' => 3, 'pertanyaan' => '3 5 7 6 8 2 9', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '9268753'],
            ['category_id' => 3, 'pertanyaan' => '7 1 3 2 9 4 5', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '5432179'],
            ['category_id' => 3, 'pertanyaan' => '7 8 2 0 5 3 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '4352877'],
            ['category_id' => 3, 'pertanyaan' => '1 8 6 7 3 9 2', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '2391786'],
            ['category_id' => 3, 'pertanyaan' => '7 0 3 6 8 4 2', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '2476307'],
            ['category_id' => 3, 'pertanyaan' => '1 5 2 4 7 3 8', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '8322451'],
            ['category_id' => 3, 'pertanyaan' => '9 4 3 8 6 2 5', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '5426934'],
            ['category_id' => 3, 'pertanyaan' => '1 6 8 7 9 3 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '4397861'],
            ['category_id' => 3, 'pertanyaan' => '4 1 6 2 5 8 7', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '7854612'],
            ['category_id' => 3, 'pertanyaan' => '0 8 7 9 6 4 3', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '3479980'],
            ['category_id' => 3, 'pertanyaan' => '5 3 7 9 2 6 4', 'kategori_soal' => null, 'type' => 'backward', 'jawaban_benar' => '4675735'],
        ]);
    }
}
