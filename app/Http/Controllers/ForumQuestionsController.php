<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ForumQuestion;
use App\ForumAnswer;

class ForumQuestionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = ForumQuestion::latest()->paginate(10);
        return view('forum.index', compact('questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new ForumQuestion;
        $question->title = $request->get('title');
        $question->slug = str_slug($request->title, '-');
        $question->body = $request->get('body');

        auth()->user()->questions()->save($question);

        return redirect('/forum');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ForumQuestion $question)
    {
        return view('forum.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumQuestion $question)
    {
        return view('forum.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $question = ForumQuestion::find($id);
        $question->title = $request->get('title');
        $question->slug = str_slug($request->title, '-');
        $question->body = $request->get('body');

        $question->save();

        return redirect('/forum/'. $question->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = ForumQuestion::find($id);
        $question->delete();
        return redirect('/forum');
    }
}
