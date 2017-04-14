<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quiz_id', 'question', 'points', 'coins', 'hint', 'time', 'option_1', 'option_2', 'option_3', 'option_4', 'answer'
    ];

    public function quiz()
    {
    	return $this->belongsTo(Quiz::class);
    }
}
