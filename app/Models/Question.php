<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'pertanyaan', 'warna_teks', 'warna_display', 'kategori_soal', 'jawaban_benar'];
    protected $casts = [
        'kategori_soal' => 'string',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function participantAnswers()
    {
        return $this->hasMany(ParticipantAnswer::class);
    }
}
