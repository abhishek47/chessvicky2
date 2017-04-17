<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Puzzle;

use App\Mail\PuzzleChallenge;

class ProfileController extends Controller
{
    
    public function edit()
    {
    	$user = \Auth::user();

    	return view('profile.edit', compact('user'));
    }
    


   

    /* AXIOS FUNCTIONS */

    public function updatePuzzles(Request $request)
    {
    	$user = \Auth::user();
    	$puzzle = Puzzle::find($request->get('puzzle'));
        
        if(!$user->hasSolvedPuzzle($puzzle))
        {
        	$user->profile->points += $puzzle->points;
        	$user->profile->save();
        	return $user->solvedPuzzles()->attach($puzzle);

        } else {
        	return "success";
        }
    	
    	
    }


    public function solvedPuzzles(Request $request)
    {
    	$user = \Auth::user();
    	if($request->has('puzzle')){
    		$puzzle = Puzzle::find($request->get('puzzle'));
            if($user->hasSolvedPuzzle($puzzle))
            {
            	return "success";
            }
    	} else {
    		return $user->solvedPuzzles;
    	}
    	
    }


    public function savePuzzle(Request $request)
    {
    	$user = \Auth::user();
    	
		$puzzle = Puzzle::find($request->get('puzzle'));
       
       if(!$user->hasSavedPuzzle($puzzle)) {
          $user->profile->savedPuzzles()->attach($puzzle);
        }

        return 'success';
    	
    }

    public function unsavePuzzle(Request $request)
    {
    	$user = \Auth::user();
    	
		$puzzle = Puzzle::find($request->get('puzzle'));
        
         if($user->hasSavedPuzzle($puzzle)) {
        $user->profile->savedPuzzles()->detach($puzzle);
       }
        return 'success';
    }


    public function challengeUser(Request $request)
    {
    	$user = \Auth::user();
    	if($request->has('puzzle')){
    		
    		$to = $request->get('email');
    		$puzzle = Puzzle::find($request->get('puzzle'));

    		\Mail::to($to)->send(new PuzzleChallenge($user, $puzzle));

    		return 'success';

            
    	} 
    } 
}
