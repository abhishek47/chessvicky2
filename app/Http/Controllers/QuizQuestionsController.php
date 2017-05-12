<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;
use App\QuizQuestion;

class QuizQuestionsController extends Controller
{


    public function edit($id)
    {
        $question = QuizQuestion::find($id);

        $quiz = $question->quiz;

        $page = 'quiz';
       
        return view('admin.quiz.question.edit', compact('question', 'quiz', 'page'));
    }
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

        return redirect('/admin/quiz/edit/' . $quiz->id);
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
       
        $question = QuizQuestion::find($id);

        $question->update($request->all());

        return redirect('/admin/quiz/edit/' . $question->quiz->id);
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

        return redirect('/admin/quiz/edit/' . $question->quiz_id);
    }
}
