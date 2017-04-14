@extends('layouts.app')


@section('content')
  
  <div class="blog-single-page">
 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Article</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
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
                                <h2>{{ $post->title }}</h2>
                                <ul class="meta-info">
                                    <li><a href="#">By: {{ $post->author }}</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString() }}</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 26 comments</a></li>
                                </ul>
                            </div>
                            <div class="post-body">
                                {!! $post->body !!}
                            </div>
                        </div> <!-- end post -->

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

                        <div class="tag-share">
                            <div>
                                <span>Tags: </span>
                                <ul class="tag">
                                  <?php $tags = explode(',', $post->tags); ?>
                                  @foreach($tags as $tag)
                                    <li><a href="#">{{ $tag }}</a></li>
                                  @endforeach  
                                </ul>
                            </div>
                            <div>
                                <span>Share:</span>
                                <ul class="share">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end tag-share -->

                        <div class="comments">
                            <div class="fb-comments" data-href="http://trumpetstechnologies.com/cv/articles/show/<?= $post->slug; ?>" data-numposts="5" data-width="100%"></div>
                                    
                            
                        </div> <!-- end comments -->
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('posts.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->
        
         <!-- start cta -->
        <section class="cta parallax" data-bg-image="images/cta-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col col-xs-12">
                        <h5>Want to write article on ChessVicky?</h5>
                        <a href="#" class="btn">Request Article</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta -->

      
</div>

@endsection