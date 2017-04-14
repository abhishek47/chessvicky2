@extends('layouts.app')


@section('content')


 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Chess Quiz</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Quiz</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        

               <div class="row">
                    <div class="col col-xs-12">
                        
                            <a class="btn btn-primary" style="margin-bottom: 19px;" href="/puzzles/random"><b>Solve Random Quiz</b></a>
                      
                    </div>

                 
                </div>
                <div class="row case-studies-grid">

                  @foreach($quizzes as $quiz)
                    
                     @include('quiz.quiz')


                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $quizzes->links() }}
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->



@endsection