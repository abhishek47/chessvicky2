@extends('layouts.app')


@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Forum | Questions</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Forum</li>
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
                                    {{ $questions->links() }}
                                
                            </div>
                        </div>    
                        
                        <br>

                         <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #fffbe0;">
                           <div class="panel-heading">
                           	  <h4>Post New Question</h4>
                           </div>
                           
                           <div class="panel-body">
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