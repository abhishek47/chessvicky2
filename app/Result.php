<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
     protected $fillable = ['title', 'date', 'player_1', 'player_1_points', 'player_2', 'player_2_points'];

     
}
