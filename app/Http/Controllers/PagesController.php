<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Puzzle;
use App\Post;

class PagesController extends Controller
{
    
    public function index()
    {
    	$puzzles = Puzzle::latest()->limit(3)->get();
    	$posts = Post::latest()->limit(3)->get();
    	return view('pages.index', compact('puzzles', 'posts'));
    }

    public function features()
    {
    	return view('pages.features');
    }

    public function contact()
    {
    	return view('pages.contact');
    }

}
