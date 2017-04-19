@extends('layouts.app')


@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>{{ $quiz->title }} | Quiz</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Quiz</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
 
   <div class="page-wrapper blog-single-page">

        <!-- start blog-single-content -->
        <section class="blog-single-content section-padding">
            <div class="container">
                <div class="row blog-with-sidebar">
                    <div class="col col-lg-9 col-md-8 ">

                     <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8"></div>
                            <div class="panel-body">
                                <h4><b>Points Scored : </b>{{ $points }} &nbsp; | &nbsp; <b>Correct Answers : </b>{{ $correct }} &nbsp; | &nbsp; <b>Wrong Answers : </b>{{ $wrong }} </h4>
                            </div>
                        </div> 
                        
                       

                        <div class="comments">
                            
                            <ol>
                              
                                <li style="margin-bottom: 10px;">
                                <div class="article panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">
                                   
                                      <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;" id="question_no">Results Quiz #{{$quiz->id}}</h4></div>
                                           
                                            <p style="color: #0b0b0b;">Analyse your answers.</p>

                                        </div>
                                      </div>  
                                        <div class="panel-body comment-content">

                                           @foreach($quiz->questions as $key => $question)

                                                   <div class="questions" style="margin-top: 20px;margin-bottom: : 20px; ">
                                                       <h3 style="margin-top: 0px;font-size: 20px;">{{$key+1 . '. '}}{!! $question->question !!} </h3>
                                                        <form class="options">
                                                          <input type="hidden" name="points" class="points" value="{{ $question->points }}">
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="radio card {{ $answers[$question->id] == 0 ? 'red' : '' }} {{ $question->answer == 0 ? 'correct' : '' }} 
                                                                   ">
                                                                 <label><input class="option" type="radio" name="{{ $question->id }}" value=0 disabled="true" >{{ $question->option_1 }}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card {{ $answers[$question->id] == 1 ? 'red' : '' }} {{ $question->answer == 1 ? 'correct' : '' }} ">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=1 disabled="true">{{ $question->option_2 }}</label>
                                                                </div>  
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card {{ $answers[$question->id] == 2 ? 'red' : '' }} {{ $question->answer == 2 ? 'correct' : '' }}">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=2 disabled="true">{{ $question->option_3 }}</label>
                                                                </div>  
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card {{ $answers[$question->id] == 3 ? 'red' : '' }} {{ $question->answer == 3 ? 'correct' : '' }}">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=3 disabled="true">{{ $question->option_4 }}</label>
                                                                </div>  
                                                            </div>
                                                            </div>
                                                            <br>
                                                            @if($answers[$question->id] == $question->answer) 
                                                              <p class=""><span style="color: #FFA500;font-weight: bold;">[{{ $question->points }} points]</span></p>
                                                            @endif
                                                        </form>
                                                    </div>


                                                    <hr>
                                                
                                            

                                            @endforeach
 
                                            
                                            <form>
                                                 <input type="hidden" name="qid" id="qid" value="<?= $quiz->id; ?>">
                                            </form>

                                         
                                        
                                           
                                        </div>
                                       
                                    </div>

                                    
                               
                               
                            </li>    

                            </ol>
                            <hr>

                        </div>

                        <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8"></div>
                            <div class="panel-body">
                               <a class="btn btn-lg btn-info"  style="margin-top: 4px;" href="/home"><b>Go Home</b></a> &nbsp;
                               
                              
                               <a href="/quiz/random" class="btn btn-lg btn-social pull-right" style="margin-top: 4px;" ><b>New Quiz</b></a>
                            </div>
                        </div> 


                        
 
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- CV AD 3 -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-8430312518838448"
                             data-ad-slot="5931605819"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>

                        <br>

                        

                        

                        <div class="comments">

                            <div class="fb-comments" data-href="http://trumpetstechnologies.com/cv/articles/show/<?= $quiz->id; ?>" data-numposts="5" data-width="100%"></div>
                                    
                            
                        </div> <!-- end comments -->
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('puzzles.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->


</div>





@endsection



@section('scripts')

@endsection