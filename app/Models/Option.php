<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'option_text',
        'is_correct',
        'question_id',
    ];

    public function question()
    {
        $this->belongsTo(Question::class);
    }
}
