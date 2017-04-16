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
                                <div class="article panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">
                                   
                                      <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;">Check Mate in {{ $puzzle->moves }} moves.</h4></div>
                                            <div class="date"><span style="font-size: 22px;color: #f39c12;font-weight: bold;">[ {{ $puzzle->points }} Points ]</span></div>
                                            <p style="color: #0b0b0b;"><b>White</b> to move! Click on a white piece. Check and Mate the <b>black</b> oppnent.</p>
                                        </div>
                                      </div>  
                                        <div class="comment-content">

                                            <script src="/js/chess.js"></script>

                                            <div class="col-sm-8" style="padding: 14px;">
                                                
                                              <div id="board" style="width: 90%;"></div> 

                                            <br>

                                            </div>

                                            <div class="col-sm-4">

                                                 <i id="source" data-val="0" hidden="true"></i>
                          <i id="dest" data-val="0" hidden="true"></i>
                                                

                                                <p id="status"></p>
                                                <p id="pgndisp"></p>
                                            </div>


                                        <form>
                                            <input type="hidden" name="startfen" id="startfen" value="<?= $puzzle->start_position; ?>">
                                            <input type="hidden" name="moves" id="moves" value="<?= $puzzle->moves; ?>">
                                            <input type="hidden" name="pgn" id="pgn" value="<?= $puzzle->solution; ?>">
                                            <input type="hidden" name="finalfen" id="finalfen" value="<?= $puzzle->final_position; ?>">
                                        </form>
  
                                           
                                        </div>
                                       
                                    </div>

                                    
                               
                               
                            </li>    

                            </ol>
                            <hr>

                        </div>

                        <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);padding: 10px;">
                           <a class="btn btn-lg btn-danger" href="/user/challenge"><b>Challenge Friends</b></a> &nbsp;
                           <a class="btn btn-lg btn-info" href="/puzzles/random"><b>New Puzzle</b></a> &nbsp;
                           <a class="btn btn-lg btn-success" href="/user/save?type=puzzle&id={{$puzzle->id}}"><b>Save Puzzle</b></a>

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



@section('scripts')

  <script src="/js/puzzle.js"></script>

@endsection