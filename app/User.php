<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Puzzle;
use App\Quiz;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



     public function posts()
     {
        return $this->hasMany(Post::class);
     }

     public function questions()
     {
        return $this->hasMany(ForumQuestion::class);
     }

     public function answers()
     {
        return $this->hasMany(ForumAnswers::class);
     }

     public function profile()
     {
        return $this->hasOne(Profile::class);
     }

    public function solvedPuzzles()
    {
        return $this->belongsToMany(Puzzle::class)->withPivot('points');
    }

    public function hasSolvedPuzzle(Puzzle $puzzle)
    {
      
        return $this->solvedPuzzles->contains($puzzle);
        
    }

    public function hasSavedPuzzle(Puzzle $puzzle)
    {
        return $this->profile->savedPuzzles->contains($puzzle);
    }

    public function solvedQuizzes()
    {
        return $this->belongsToMany(Quiz::class)->withPivot('answers', 'points');
    }

    public function hasSolvedQuiz(Quiz $quiz)
    {

        return $this->solvedQuizzes->contains($quiz);
    }

    public function hasSavedQuiz(Quiz $quiz)
    {
        return $this->profile->savedQuizzes->contains($quiz);
    }
}
