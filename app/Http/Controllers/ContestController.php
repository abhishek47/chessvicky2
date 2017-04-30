<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Puzzle;
use App\PuzzleContest;
use App\Quiz;

class ContestController extends Controller
{

	 public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    public function puzzles() {
       
        $contests = PuzzleContest::latest()->paginate(5);
        

        return view('contests.puzzles', compact('contests'));
	}

	public function puzzle() {
       
        $puzzle = Puzzle::find(3);
        

        return view('puzzles.event', compact('puzzle'));
	}
    
}
