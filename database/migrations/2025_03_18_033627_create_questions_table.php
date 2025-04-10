<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->text('pertanyaan');
            $table->string('warna_teks')->nullable();
            $table->string('warna_display')->nullable();
            $table->enum('kategori_soal', ['Congruent', 'Incongruent', 'Control', 'Mudah', 'Sedang', 'Sulit'])->nullable();
            $table->enum('type', ['forward', 'backward'])->nullable();
            $table->string('jawaban_benar')->nullable();
            $table->integer('level')->nullable();
            $table->enum('phase', ['training', 'experimental', 'control'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
