<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumAnswer extends Model
{

	 public function question()
     {
     	return $this->belongsTo(ForumQuestion::class);
     }


     public function user()
     {
     	return $this->belongsTo(User::class);
     }
}
