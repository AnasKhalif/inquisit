<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['kategori' => 'Color Word', 'deskripsi' => 'Tes stroop untuk warna'],
            ['kategori' => 'Aritmatika', 'deskripsi' => 'Soal perhitungan angka'],
            ['kategori' => 'Digit Span', 'deskripsi' => 'Tes daya ingat angka'],
            ['kategori' => 'Mental Stress', 'deskripsi' => 'Tes stres mental'],
        ]);
    }
}
