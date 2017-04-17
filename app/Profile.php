<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{ 
     protected $fillable = ['bio'];

	 public function user()
     {
     	return $this->belongsTo(User::class);
     }

     public function savedPuzzles()
    {
        return $this->belongsToMany(Puzzle::class);
    }
}
