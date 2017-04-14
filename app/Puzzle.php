<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puzzle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'start_position', 'final_position', 'solution', 'points', 'level', 'coins', 'time', 'moves',
        'solution', 'hint', 'color'
    ];
}
