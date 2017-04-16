@extends('layouts.app')


@section('content')

<!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Checkmate Puzzle</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Puzzle</li>
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
                        

                        <div class="comments">
                            
                            <ol>
                              
                                <li style="margin-bottom: 10px;">
                                <div class="article">
                                    <div class="details">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 32px;">Check Mate in {{ $puzzle->moves }} moves.</h4></div>
                                            <div class="date"><span style="font-size: 22px;color: #f39c12;font-weight: bold;">[ {{ $puzzle->points }} Points ]</span></div>
                                        </div>
                                        <div class="comment-content">
                                           
                                        </div>
                                       
                                    </div>

                                    
                                </div>
                               
                            </li>    

                            </ol>


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

                        

                        <div class="comments">

                            <div class="fb-comments" data-href="http://trumpetstechnologies.com/cv/articles/show/<?= $puzzle->id; ?>" data-numposts="5" data-width="100%"></div>
                                    
                            
                        </div> <!-- end comments -->
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('posts.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->


</div>





@endsection