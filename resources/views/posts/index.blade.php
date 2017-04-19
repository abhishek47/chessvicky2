@extends('layouts.app')


@section('content')

<!-- start page-title -->
<section class="page-title">
    <div class="container">
        <div class="title-box">
            <h1>Articles &amp; Tutorials</h1>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li>Blog</li>
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

                        @foreach($posts->chunk(2) as $items)
	   
	                         @foreach($items as $post)
    							<div class="comments">
    							 <ol>
		                            @include('posts.article')
		                            <hr>
		                          </ol>  
                                </div>
	                           @endforeach 
	                            
	                       
	                      @endforeach    

                        <div class="row page-pagination-wrapper">
                            <div class="col col-xs-12">
                                    {{ $posts->links() }}
                                
                            </div>
                        </div>                        
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                       
                       <div class="sidebar">  
                        @include('posts.sidebar')
                       </div>                        
                        
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-sidebar-section -->
     </div>  
       

        

@endsection