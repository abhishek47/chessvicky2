<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamesController extends Controller
{
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function computer()
    {
    	return view('game.index');
    }


    public function stats(Request $request)
   {  
       $points = $request->get('points');
        
      if($request->get('operation') == 'increment')
      {
         \Auth::user()->profile->points += $points;
         \Auth::user()->profile->games_won += 1;
          
  
      } else if($request->get('operation') == 'decrement') {
  
        \Auth::user()->profile->points -= $points;
        \Auth::user()->profile->games_lost += 1;
        
  
      } else {
        \Auth::user()->profile->games_drawn += 1;
      }
      
      \Auth::user()->profile->save();
   }
}
