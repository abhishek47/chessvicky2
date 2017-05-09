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
                               <a class="btn btn-lg btn-danger" id="challenge" style="margin-top: 4px;""><b>Challenge Friend</b></a> &nbsp;
                               <a class="btn btn-lg btn-info"  style="margin-top: 4px;" href="/quiz/random"><b>New Quiz</b></a> &nbsp;
                               @if(!\Auth::user()->hasSavedQuiz($quiz))
                                 <a class="btn btn-lg btn-success" id="save" data-save="1" style="margin-top: 4px;"><b>Save Quiz</b></a> &nbsp;
                               @else
                                  <a class="btn btn-lg btn-success" id="save" data-save="0" style="margin-top: 4px;"><b>Unsave Quiz</b></a> &nbsp;
                               @endif   
                              
                               <a class="btn btn-lg btn-social" id="shareBtn" style="margin-top: 4px;" href="#"><b>Share Quiz</b></a>
                            </div>
                        </div> 

                        <div class="comments">
                            
                            <ol>
                              
                                <li style="margin-bottom: 10px;">
                                <div class="article panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">
                                   
                                      <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;" id="question_no">Question #1</h4></div>
                                            <div class="date"><span style="font-size: 22px;color: #f39c12;font-weight: bold;">[ <span id="points ">{{ $quiz->questions->first()->points }}</span> Points ]</span></div>
                                            <p style="color: #0b0b0b;">Choose your answer and click <b>next</b>.</p>

                                        </div>
                                      </div>  
                                        <div class="panel-body comment-content">

                                           @foreach($quiz->questions as $key => $question)

                                                   <div class="questions" data-id="{{ $question->id }}">
                                                       <h3 style="margin-top: 0px;font-size: 20px;">{{$key+1 . '. '}}{!! $question->question !!}</h3>
                                                        <form class="options">
                                                          <input type="hidden" name="points" class="points" value="{{ $question->points }}">
                                                          <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="radio card">
                                                                 <label><input class="option" type="radio" name="{{ $question->id }}" value=0 data-points="{{ $question->answer == 0 ? $question->points : 0  }}">{{ $question->option_1 }}</label>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=1 data-points="{{ $question->answer == 1 ? $question->points : 0  }}">{{ $question->option_2 }}</label>
                                                                </div>  
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=2 data-points="{{ $question->answer == 2 ? $question->points : 0  }}">{{ $question->option_3 }}</label>
                                                                </div>  
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="radio card">
                                                                  <label><input class="option" type="radio" name="{{ $question->id }}" value=3 data-points="{{ $question->answer == 3 ? $question->points : 0  }}">{{ $question->option_4 }}</label>
                                                                </div>  
                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                
                                            

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
                               <a class="btn btn-lg btn-info"  style="margin-top: 4px;" href="/home"><b>Exit Quiz</b></a> &nbsp;
                               
                              
                               <button class="btn btn-lg btn-social pull-right" style="margin-top: 4px;" id='next' value="Next" onclick="sum_values()"><b>Next Question</b></button>
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

                            <div class="fb-comments" data-href="https://www.chessvicky.com/quiz/{{$quiz->id}}" data-numposts="5" data-width="100%"></div>
                                    
                            
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

  <script src="/js/quiz.js"></script>

  <script>
document.getElementById('shareBtn').onclick = function() {
  FB.ui({
    method: 'share',
    display: 'popup',
    hashtag : '#chessvicky',
    mobile_iframe: true,
    quote: 'Sovle this quiz on Chessvicky and gain {{ $quiz->getPoints() }} Points.',
    href: 'www.chessvicky.com/quiz/{{$quiz->id}}',
  }, function(response){});
}
</script>

@endsection