<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ForumQuestion;
use App\ForumAnswer;

class ForumAnswersController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = ForumQuestion::find($request->get('question_id'));
        $answer = new ForumAnswer;
        $answer->body = $request->get('body');
        $answer->user_id = auth()->user()->id;

        $question->answers()->save($answer);

        return redirect('/forum/' . $question->slug);
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
        $question = ForumQuestion::find($request->get('question_id'));
        $answer = ForumAnswer::find($id);
        $answer->body = $request->get('body');

        $answer->update();

        redirect('/forum/' . $question->slug);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markAnswer(Request $request, $ansid, $qid)
    {
        $question = ForumQuestion::find($qid);
        $answer = ForumAnswer::find($ansid);
        
        $question->solved = $answer->id; 

        $question->update();

        redirect('/forum/' . $question->slug);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function unmarkAnswer(Request $request, $ansid, $qid)
    {
        $question = ForumQuestion::find($qid);
        $answer = ForumAnswer::find($ansid);
        
        $question->solved = 0; 

        $question->update();

        redirect('/forum/' . $question->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $answer = ForumAnswer::find($id);
        
        $answer->delete();

        redirect('/forum');
    }
}
