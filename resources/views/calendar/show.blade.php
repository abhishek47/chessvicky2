@extends('layouts.app')


@section('content')


<div class="page-wrapper blog-single-page">

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>ChessVicky | Calendar</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Calendar</li>
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
                                <h3>{{ $event->title }}</h3>
                                <ul class="meta-info">
                                    <li><a href="#"><i class="fa fa-clock-o"></i> {{ $event->start_date }} - {{ $event->end_date }}</a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                <p>{{ $event->description  }}</p>
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
                        
                       
                       
                  
                   

                      

                   


                    </div> <!-- end blog-content -->



	   
	                       
	                      


                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('contests.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->

    </div>    
@endsection