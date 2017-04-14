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

        
<!-- start blog-with-sidebar-section -->
        <section class="blog-with-sidebar-section section-padding">
            <div class="container">
                <div class="row blog-with-sidebar">

                    <div class="blog-content col col-lg-9 col-md-8">

                        @foreach($posts->chunk(2) as $items)
	                        <div class="row blog-section-grids">
	   
	                         @foreach($items as $post)

		                            @include('posts.article')

	                           @endforeach 
	                            
	                        </div>
	                      @endforeach    

                        <div class="row page-pagination-wrapper">
                            <div class="col col-xs-12">
                                    {{ $posts->links() }}
                                
                            </div>
                        </div>                        
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3 col-md-4 col-sm-5">
                        
                        @include('posts.sidebar')
                        
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-with-sidebar-section -->


        <!-- start cta -->
        <section class="cta parallax" data-bg-image="images/cta-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h5>Want to write articles on ChessVicky?</h5>
                        <a href="#" class="btn">Request Article</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->



@endsection