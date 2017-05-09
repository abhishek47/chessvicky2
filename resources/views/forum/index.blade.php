@extends('layouts.app')


@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Welcome to ChessVicky Forums</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Forums</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

        <div class="page-wrapper blog-single-page">

        <!-- start blog-with-sidebar-section -->
        <section class="blog-with-sidebar-section section-padding">
            <div class="container">

                <div class="row blog-with-sidebar">

                    <div class="blog-content col col-lg-9 col-md-8">

                       @include('layouts.search', ['model' => 'forum', 'data' => $questions])

                        <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">
                           <div class="panel-heading">
                           	  <h4>Start New Discussion</h4>
                              <button class="btn btn-success" data-toggle="collapse" data-target="#qform"><i class="fa fa-arrow-down"></i> New Discussion</button>
                           </div>
                           
                           <div id="qform" class="panel-body collapse">
                            @if(Auth::check())
    	                           <form method="post" action="/forum">
     								
                                      {{ csrf_field() }}	

    	                              <div class="form-group">
    	                               <label for="title">Your Question</label>
    	                           	   <input id="title" name="title" class="form-control" type="text" />
    	                           	  </div> 

    	                              <div class="form-group">
    	                               <label for="body">Describe your question</label>
    	                           	   <textarea id="body" name="body" class="form-control"></textarea>
    	                           	  </div> 

    	                           	  <button class="btn btn-info" type="submit">Post Question</button>
    	                           </form>
                              @else

                                <a class="btn btn-info" href="/login">Login To Post New Question</a>
                                       
                              @endif 
                           </div>
                        	
                        </div>

                        <br>       

                        @foreach($questions->chunk(2) as $items)
	                       <div class="comments">
                      <ol>
	   
	                         @foreach($items as $question)

		                            @include('forum.article')
                                    <hr>

	                           @endforeach 
	                           </ol> 
	                        </div>
	                      @endforeach    

                        <div class="row page-pagination-wrapper">
                            <div class="col col-xs-12">
                                    @if(isset($q))
                                 {{ $questions->appends(['query' => $q])->links() }}
                                @else 
                                    {{ $questions->links() }}
                                @endif
                                
                            </div>
                        </div>    
                        
                        

                                     
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                        
                        @include('forum.sidebar')
                        
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-sidebar-section -->

        </div>

@endsection