<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuizContest extends Model
{
    public function getPoints()
    {
    	return $this->quizzes()->sum('points');
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }
}
