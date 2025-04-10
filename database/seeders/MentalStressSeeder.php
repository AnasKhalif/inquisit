<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentalStressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $trainingQuestions = [
        //     // Level 1 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '5 - 2 = ?', 'jawaban_benar' => '3', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 1 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '8 - 4 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 4 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '5 + 2 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 2 = ?', 'jawaban_benar' => '8', 'level' => 1, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '10 - 5 = ?', 'jawaban_benar' => '5', 'level' => 1, 'phase' => 'training'],

        //     // Level 2 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '10 + 6 = ?', 'jawaban_benar' => '16', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '9 - 4 = ?', 'jawaban_benar' => '5', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '13 - 3 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '15 - 5 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '12 + 5 = ?', 'jawaban_benar' => '17', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '8 + 7 = ?', 'jawaban_benar' => '15', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 10 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '9 + 2 = ?', 'jawaban_benar' => '11', 'level' => 2, 'phase' => 'training'],

        //     // Level 3 - Medium Stress
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '20 + 10 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '35 - 10 = ?', 'jawaban_benar' => '25', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '45 - 15 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 20 = ?', 'jawaban_benar' => '70', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 30 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 40 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '90 + 10 = ?', 'jawaban_benar' => '100', 'level' => 3, 'phase' => 'training'],

        //     // Level 4 - Medium Stress
        //     ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 = ?', 'jawaban_benar' => '70', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 25 = ?', 'jawaban_benar' => '35', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 40 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '70 - 40 = ?', 'jawaban_benar' => '30', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 20 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 = ?', 'jawaban_benar' => '50', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 10 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'training'],

        //     // Level 5 - High Stress
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '30 + 40 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '25 + 15 - 5 = ?', 'jawaban_benar' => '35', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '50 - 20 + 10 = ?', 'jawaban_benar' => '40', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 30 - 40 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 + 10 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 - 10 = ?', 'jawaban_benar' => '80', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 50 + 20 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'training'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'training'],
        // ];

        $trainingQuestions = [
            // Level 1 - Low Stress
            ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'training'],
            ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'training'],

            // Level 2 - Low Stress
            ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'training'],
            ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'training'],


            // Level 3 - Medium Stress
            ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'training'],
            ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'training'],


            // Level 4 - Medium Stress
            ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'training'],
            ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'training'],

            // Level 5 - High Stress
            ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'training'],
            ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'training'],
        ];

        DB::table('questions')->insert($trainingQuestions);

        // Seeder untuk Experimental Phase
        // $experimentalQuestions = [
        //     // Level 1 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '5 - 2 = ?', 'jawaban_benar' => '3', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 1 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '8 - 4 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 4 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '5 + 2 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 2 = ?', 'jawaban_benar' => '8', 'level' => 1, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '10 - 5 = ?', 'jawaban_benar' => '5', 'level' => 1, 'phase' => 'experimental'],

        //     // Level 2 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '10 + 6 = ?', 'jawaban_benar' => '16', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '9 - 4 = ?', 'jawaban_benar' => '5', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '13 - 3 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '15 - 5 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '12 + 5 = ?', 'jawaban_benar' => '17', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '8 + 7 = ?', 'jawaban_benar' => '15', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 10 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '9 + 2 = ?', 'jawaban_benar' => '11', 'level' => 2, 'phase' => 'experimental'],

        //     // Level 3 - Medium Stress (Angka di bawah 100)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '20 + 10 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '35 - 10 = ?', 'jawaban_benar' => '25', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '45 - 15 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 20 = ?', 'jawaban_benar' => '70', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 30 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 40 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '90 + 10 = ?', 'jawaban_benar' => '100', 'level' => 3, 'phase' => 'experimental'],

        //     // Level 4 - Medium Stress (Angka di bawah 100)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 = ?', 'jawaban_benar' => '70', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 25 = ?', 'jawaban_benar' => '35', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 40 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '70 - 40 = ?', 'jawaban_benar' => '30', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 20 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 = ?', 'jawaban_benar' => '50', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 10 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'experimental'],

        //     // Level 5 - High Stress (Sudah sesuai permintaan)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '30 + 40 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '25 + 15 - 5 = ?', 'jawaban_benar' => '35', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '50 - 20 + 10 = ?', 'jawaban_benar' => '40', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 30 - 40 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 + 10 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 - 10 = ?', 'jawaban_benar' => '80', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 50 + 20 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'experimental'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'experimental'],
        // ];

        $experimentalQuestions = [
            // Level 1 - Low Stress
            ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'experimental'],
            ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'experimental'],

            ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'experimental'],
            ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'experimental'],

            // Level 3 - Medium Stress (Angka di bawah 100)
            ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'experimental'],
            ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'experimental'],

            // Level 4 - Medium Stress (Angka di bawah 100)
            ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'experimental'],
            ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'experimental'],

            // Level 5 - High Stress (Sudah sesuai permintaan)
            ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'experimental'],
            ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'experimental'],
        ];

        // (Add experimental questions here, using the same format but with 'experimental' phase)

        DB::table('questions')->insert($experimentalQuestions);

        // Seeder untuk Control Phase
        // $controlQuestions = [
        //     // Level 1 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '5 - 2 = ?', 'jawaban_benar' => '3', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 1 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '8 - 4 = ?', 'jawaban_benar' => '4', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '3 + 4 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '5 + 2 = ?', 'jawaban_benar' => '7', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '6 + 2 = ?', 'jawaban_benar' => '8', 'level' => 1, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '10 - 5 = ?', 'jawaban_benar' => '5', 'level' => 1, 'phase' => 'control'],

        //     // Level 2 - Low Stress
        //     ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '10 + 6 = ?', 'jawaban_benar' => '16', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '9 - 4 = ?', 'jawaban_benar' => '5', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '13 - 3 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '15 - 5 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '12 + 5 = ?', 'jawaban_benar' => '17', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '8 + 7 = ?', 'jawaban_benar' => '15', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 10 = ?', 'jawaban_benar' => '10', 'level' => 2, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '9 + 2 = ?', 'jawaban_benar' => '11', 'level' => 2, 'phase' => 'control'],

        //     // Level 3 - Medium Stress (Angka di bawah 100)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '20 + 10 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '35 - 10 = ?', 'jawaban_benar' => '25', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '45 - 15 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 20 = ?', 'jawaban_benar' => '70', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 30 = ?', 'jawaban_benar' => '30', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 40 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '90 + 10 = ?', 'jawaban_benar' => '100', 'level' => 3, 'phase' => 'control'],

        //     // Level 4 - Medium Stress (Angka di bawah 100)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 = ?', 'jawaban_benar' => '70', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '60 - 25 = ?', 'jawaban_benar' => '35', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '50 + 40 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '70 - 40 = ?', 'jawaban_benar' => '30', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 20 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 = ?', 'jawaban_benar' => '50', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 = ?', 'jawaban_benar' => '90', 'level' => 4, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 10 = ?', 'jawaban_benar' => '80', 'level' => 4, 'phase' => 'control'],

        //     // Level 5 - High Stress (Sudah sesuai permintaan)
        //     ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '30 + 40 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '25 + 15 - 5 = ?', 'jawaban_benar' => '35', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '50 - 20 + 10 = ?', 'jawaban_benar' => '40', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '60 + 30 - 40 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '80 - 30 + 10 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '70 + 20 - 10 = ?', 'jawaban_benar' => '80', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '90 - 50 + 20 = ?', 'jawaban_benar' => '60', 'level' => 5, 'phase' => 'control'],
        //     ['category_id' => 4, 'pertanyaan' => '40 + 30 - 20 = ?', 'jawaban_benar' => '50', 'level' => 5, 'phase' => 'control'],
        // ];
        $controlQuestions = [
            // Level 1 - Low Stress
            ['category_id' => 4, 'pertanyaan' => '2 + 4 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'control'],
            ['category_id' => 4, 'pertanyaan' => '3 + 3 = ?', 'jawaban_benar' => '6', 'level' => 1, 'phase' => 'control'],

            // Level 2 - Low Stress
            ['category_id' => 4, 'pertanyaan' => '5 + 4 = ?', 'jawaban_benar' => '9', 'level' => 2, 'phase' => 'control'],
            ['category_id' => 4, 'pertanyaan' => '7 - 3 = ?', 'jawaban_benar' => '4', 'level' => 2, 'phase' => 'control'],

            // Level 3 - Medium Stress (Angka di bawah 100)
            ['category_id' => 4, 'pertanyaan' => '15 + 25 = ?', 'jawaban_benar' => '40', 'level' => 3, 'phase' => 'control'],
            ['category_id' => 4, 'pertanyaan' => '18 - 8 = ?', 'jawaban_benar' => '10', 'level' => 3, 'phase' => 'control'],

            // Level 4 - Medium Stress (Angka di bawah 100)
            ['category_id' => 4, 'pertanyaan' => '15 + 30 = ?', 'jawaban_benar' => '45', 'level' => 4, 'phase' => 'control'],
            ['category_id' => 4, 'pertanyaan' => '30 - 20 = ?', 'jawaban_benar' => '10', 'level' => 4, 'phase' => 'control'],

            // Level 5 - High Stress (Sudah sesuai permintaan)
            ['category_id' => 4, 'pertanyaan' => '15 + 25 - 10 = ?', 'jawaban_benar' => '30', 'level' => 5, 'phase' => 'control'],
            ['category_id' => 4, 'pertanyaan' => '20 - 5 + 10 = ?', 'jawaban_benar' => '25', 'level' => 5, 'phase' => 'control'],
        ];

        // (Add control questions here, using the same format but with 'control' phase)

        DB::table('questions')->insert($controlQuestions);
    }
}
