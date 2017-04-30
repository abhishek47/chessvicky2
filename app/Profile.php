<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{ 
     protected $fillable = ['bio', 'phone', 'photo', 'city', 'country', 'state'];

	 public function user()
     {
     	return $this->belongsTo(User::class);
     }

     public function savedPuzzles()
    {
        return $this->belongsToMany(Puzzle::class);
    }

     public function savedQuizzes()
    {
        return $this->belongsToMany(Quiz::class);
    }
}
