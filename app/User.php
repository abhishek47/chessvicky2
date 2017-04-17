<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Puzzle;

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
        return $this->belongsToMany(Puzzle::class)->withTimeStamps();
    }

    public function hasSolvedPuzzle(Puzzle $puzzle)
    {
        return $this->solvedPuzzles->contains($puzzle);
    }

    public function hasSavedPuzzle(Puzzle $puzzle)
    {
        return \Auth::user()->profile->savedPuzzles->contains($puzzle);
    }
}
