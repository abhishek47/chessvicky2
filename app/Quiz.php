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

    public function getPoints()
    {
    	return $this->questions()->sum('points');
    }

    public function getCoins()
    {
    	return $this->questions()->sum('coins');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withTimeStamps();;
    }

    public function profiles()
    {
        return $this->belongsToMany(Profile::class)->withTimeStamps();;
    }
}
