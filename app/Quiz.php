<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'level'
    ];

    public function questions()
    {
    	return $this->hasMany(QuizQuestion::class);
    }
}
