<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'age', 'gender'];

    public function choices()
    {
        return $this->hasMany(ParticipantChoice::class);
    }

    public function answers()
    {
        return $this->hasMany(ParticipantAnswer::class);
    }
}
