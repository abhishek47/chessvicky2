<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Puzzle;
use App\Quiz;

use App\Mail\PuzzleChallenge;
use App\Mail\QuizChallenge;

class ProfileController extends Controller
{
    
    public function edit()
    {
    	$user = \Auth::user();

    	return view('profile.edit', compact('user'));
    }
    

    public function update(Request $request)
    {
        $user = \Auth::user();

        $user->name = $request->get('name');
        $user->email = $request->get('email');

        $user->save();

        $user->profile->update($request->all());

         


      return redirect('/user/edit');
    }


    public function updatePhoto(Request $request)
    {
        $user = \Auth::user();

        $path = \Storage::putFile('avatars', $request->file('photo'), 'public');


        $user->profile->photo = $path;

        $user->profile->save();   
 
        
     
        return redirect('/user/edit');
    }

     public function removePhoto(Request $request)
    {
        $user = \Auth::user();

       
        $user->profile->photo = null;

        $user->profile->save();   
        
     
        return redirect('/user/edit');
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
        	return $user->solvedPuzzles()->attach($puzzle, ['points' => $puzzle->points]);

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

            
    	} else if($request->has('quiz')){
    		
    		$to = $request->get('email');
    		$puzzle = Puzzle::find($request->get('quiz'));

    		\Mail::to($to)->send(new QuizChallenge($user, $quiz));

    		return 'success';

            
    	} 
    } 


     public function updateQuizzes(Request $request)
    {
    	$user = \Auth::user();
    	$quiz = Quiz::find($request->get('quiz'));
    	$points = $request->get('points');
        
        if(!$user->hasSolvedQuiz($quiz))
        {
        	$user->profile->points += $points;
        	$user->profile->save();
        	return $user->solvedQuizzes()->attach($quiz, ['answers' => serialize($request->get('ans')), 
    		 											 'points' => $points]);

        } else {
        	return "success";
        }
    	
    	
    }


    public function solvedQuizzes(Request $request)
    {
    	$user = \Auth::user();
    	if($request->has('quiz')){
    		$quiz = Quiz::find($request->get('quiz'));
            if($user->hasSolvedQuiz($quiz))
            {
            	return "success";
            }
    	} else {
    		return $user->solvedQuizzes;
    	}
    	
    }


    public function saveQuizzes(Request $request)
    {
    	$user = \Auth::user();
    	
		$quiz = Quiz::find($request->get('quiz'));
       
       if(!$user->hasSavedQuiz($quiz)) {
          $user->profile->savedQuizzes()->attach($quiz);
        }

        return 'success';
    	
    }

    public function unsaveQuizzes(Request $request)
    {
    	$user = \Auth::user();
    	
		$quiz = Quiz::find($request->get('quiz'));
        
       if($user->hasSavedQuiz($puzzle)) {
        $user->profile->savedQuizzes()->detach($quiz);
       }
        

        return 'success';
    }


}
