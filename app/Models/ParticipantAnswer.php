<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ParticipantAnswer extends Model
{
    use HasFactory;

    protected $fillable = ['participant_id', 'question_id', 'jawaban', 'benar_salah', 'waktu_respon'];
    protected $casts = [
        'benar_salah' => 'string',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
