<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['kategori', 'deskripsi', 'waktu'];

    public function participantChoices()
    {
        return $this->hasMany(ParticipantChoice::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
