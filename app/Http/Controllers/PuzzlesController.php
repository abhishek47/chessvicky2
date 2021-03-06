<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Puzzle;

class PuzzlesController extends Controller
{

    public function __construct()
    {
      
             $this->middleware('auth', ['except' => 'index']);
      
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $puzzles = Puzzle::latest();
        $level = 0;
        if($request->has('level')) 
        {
             $puzzles->where('level', $request->get('level')-1);
             $level = $request->get('level');

        }

        $puzzles = $puzzles->paginate(20); 

        return view('puzzles.index', compact('puzzles', 'level'));
    }

    public function admin(Request $request)
    {

        $puzzles = Puzzle::latest()->get();

        $page = 'puzzles';
       

        return view('admin.puzzles.index', compact('puzzles', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('puzzles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Puzzle::create($request->all());

        return redirect('/puzzles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Puzzle $puzzle)
    {
        return view('puzzles.show', compact('puzzle'));
    }

     /**
     * Display the random puzzle.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $count = Puzzle::count();
        
        $puzzle = null;
        
        while($puzzle == null){
          $rid = rand(1, $count);
          $puzzle = Puzzle::find($rid);
         }

        return view('puzzles.show', compact('puzzle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Puzzle $puzzle)
    {
          $page = 'puzzles';
       

        return view('admin.puzzles.edit', compact('puzzle', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Puzzle $puzzle)
    {
        $puzzle->update($request->all());

        return redirect('/puzzles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puzzle $puzzle)
    {
        $puzzle->delete();

        return redirect('/puzzles');
    }
}
