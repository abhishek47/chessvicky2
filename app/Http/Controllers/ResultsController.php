<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
    	$results = Result::latest()->get()->groupBy('round');


    	return view('results.index', compact('results'));
    }


    public function adminResults()
    {
    	$page = 'results';
    	$results = Result::latest()->get();
    	return view('results.admin', compact('results', 'page'));
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Result::create($request->all());

        return redirect('/admin/results');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('results.show', compact('event'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
       $page = 'results';

        return view('results.edit', compact('result', 'page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $result->update($request->all());

        return redirect('/admin/results');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();

        return redirect('/admin/results');
    }
}
