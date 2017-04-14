<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;
use App\QuizQuestion;

class QuizQuestionsController extends Controller
{
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quiz = Quiz::find($request->get('quiz_id'));
        $question = new QuizQuestion;
        
        $quiz->questions()->create($request->all());

        redirect('/quiz/' . $quiz->id);
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
        $quiz = Quiz::find($request->get('quiz_id'));
        $question = QuizQuestion::find($id);
       
        $question->update($request->all());

        redirect('/quiz/' . $quiz->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = QuizQuestion::find($id);
        
        $question->delete();

        redirect('/quiz');
    }
}
