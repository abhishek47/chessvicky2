@extends('layouts.app')


@section('content')


<div class="page-wrapper blog-single-page">

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>ChessVicky | Forums</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Forums</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <!-- start blog-single-content -->
        <section class="blog-single-content section-padding">
            <div class="container">
                <div class="row blog-with-sidebar">
                    <div class="col col-lg-9 col-md-8 ">
                        <div class="post">
                            <div class="post-title-meta">
                                <h2>{{ $question->title }}</h2>
                                <ul class="meta-info">
                                    <li><a href="#">@ {{ $question->user->username }}</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> {{ $question->created_at->toFormattedDateString() }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> {{ count( $question->answers )}} replies</a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>{!! $question->body !!}</p>
                            </div>
                        </div> <!-- end post -->
                        <br>
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
                        
                       
                       
                    <hr>

                    <div class="comments">
                      <ol>
	                      @foreach($question->answers as $answer)

			                   @include('forum.answer')
                               <hr>
		                   @endforeach 
                      </ol>
                     </div>  

                      

                       <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">
                           <div class="panel-heading">
                           	  <h4>Post Answer</h4>
                           </div>
                           
                           <div class="panel-body">
                              @if(Auth::check())
	                           <form method="post" action="/forum/answer">
 								
 								  {{ csrf_field() }}	

	                              <input type="hidden" name="question_id" value="{{ $question->id }}">

	                              <div class="form-group">
	                               <label for="body">Your Answer</label>
	                           	   <textarea id="body" name="body" class="form-control" rows="5"></textarea>
	                           	  </div> 

	                           	  <button class="btn btn-info" type="submit">Post Answer</button>
	                           </form>
                               @else 
                                <a class="btn btn-info" href="/login">Login To Post Answer</a>
                               @endif                                
                           </div>
                        	
                        </div>


                    </div> <!-- end blog-content -->



	   
	                       
	                      


                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('forum.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->

    </div>    
@endsection