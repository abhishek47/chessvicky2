<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumQuestion extends Model
{

	 public function answers()
     {
     	return $this->hasMany(ForumAnswer::class);
     }


     public function user()
     {
     	return $this->belongsTo(User::class);
     }

     public function getRouteKeyName()
     {
     	return 'slug';
     }

}
