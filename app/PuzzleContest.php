<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PuzzleContest extends Model
{
	protected $gaurded = [];
	
    public function getPoints()
    {
    	return $this->puzzles()->sum('points');
    }


    public function puzzles()
    {
        return $this->belongsToMany(Puzzle::class);
    }
}
