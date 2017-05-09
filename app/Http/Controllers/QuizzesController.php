<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Quiz;
use App\QuizQuestion;

class QuizzesController extends Controller
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
        $quizzes = Quiz::latest();
        $level = 0;
        if($request->has('level')) 
        {
             $quizzes->where('level', $request->get('level')-1);
             $level = $request->get('level');

        }

        $quizzes = $quizzes->paginate(20); 

        return view('quiz.index', compact('quizzes', 'level'));
    }


    public function admin(Request $request)
    {
        $quizzes = Quiz::all();
        
        $page = 'quizzes';

        return view('admin.quiz.index', compact('quizzes', 'page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Quiz::create($request->all());

        return redirect('/quiz');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        return view('quiz.show', compact('quiz'));
    }

     /**
     * Display the random quiz.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $count = Quiz::count();
        
        $quiz = null;
        
        while($quiz == null){
          $rid = rand(1, $count);
          $quiz = Quiz::find($rid);
         }
        
        return view('quiz.show', compact('quiz'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        $page = 'quizzes';

        $questions = $quiz->questions;

        return view('admin.quiz.edit', compact('quiz', 'page', 'questions'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function result(Quiz $quiz)
    {
         if(\Auth::user()->solvedQuizzes->contains($quiz)){
               $answers = unserialize(\Auth::user()->solvedQuizzes()->where('quiz_id', $quiz->id)->first()->pivot->answers);
               $points = \Auth::user()->solvedQuizzes()->where('quiz_id', $quiz->id)->first()->pivot->points;
                $correct = 0;
                $wrong = 0;
               foreach ($quiz->questions as $key => $question) {
                   if(array_key_exists($question->id, $answers)) 
                   {
                       if($question->answer == $answers[$question->id])
                       {
                         $correct++;
                       } else {
                        $wrong++;
                       }
                    } else {
                        $wrong++;
                    }   
               } 

               return view('quiz.result', compact('quiz' ,'answers', 'points', 'correct', 'wrong'));
        }
         else {
                session()->flash('flash_title', "You have to solve this quiz yet!");
            session()->flash('flash_message', 'You will have to solve this quiz to analyse your answers!');  
            return redirect('/quiz/' . $quiz->id);
         }
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $quiz->update($request->all());

        return redirect('/quiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();

        return redirect('/quiz');
    }
}
