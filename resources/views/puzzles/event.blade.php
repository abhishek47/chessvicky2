@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="/css/flipclock.css">    

@endsection

@section('content')

<!-- start page-title -->
        <section class="page-title" style="background: url('/images/page-title/img-3.jpg');">
            <div class="container">
                <div class="title-box">
                    <h1>Puzzle Event</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Puzzle Event</li>
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
                               <div style="margin: 0 auto;margin-top: 1em;width: 300px;" class="clock"></div>
        
                                      
                            </div>
                        </div> 

                        <div class="comments">
                            
                            <ol>
                              
                                <li style="margin-bottom: 10px;">
                                <div class="article panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">
                                   
                                      <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;">Check Mate in {{ $puzzle->moves }} moves.</h4></div>
                                            <div class="date"><span style="font-size: 22px;color: #f39c12;font-weight: bold;">[ {{ $puzzle->points }} Points ]</span></div>
                                            <p style="color: #0b0b0b;"><b>White</b> to move! Click on a white piece to begin.</p>
                                        </div>
                                      </div>  
                                        <div class="comment-content">

                                            <script src="/js/chess.js"></script>

                                            <div class="col-sm-8" style="padding: 14px;">
                                                
                                              <div id="board" style="width: 100%;"></div> 

                                            <br>

                                            </div>

                                            <div class="col-sm-4" id="puzzle-detail">
                                                
                                                <h3>Player To Move</h3>   
                                                <p id="player" ><b><i style="color: #000" class="fa fa-user"></i> <span style="color: #019e13">{{ Auth::user()->username }}</span></b></p>
                                                <p id="comp" class="hidden"><b><i style="color: #000" class="fa fa-user"></i> <span style="color: #0048bc">chessvicky</span></b></p>

                                                <h3>Moves Left</h3>   
                                                <p id="movesleft" style="color: #000;font-weight: bold;">{{ $puzzle->moves }}</p>

                                                <h3>Difficulty Level</h3>   
                                                <p id="level" style="color: #000;font-weight: bold;">{{ $puzzle->level  }}</p>

                                                <i id="source" data-val="0" hidden="true"></i>
                                                <i id="dest" data-val="0" hidden="true"></i>
                                                

                                                
                                                <p id="pgndisp"></p>
                                            </div>


                                        <form>
                                            <input type="hidden" name="startfen" id="startfen" value="<?= $puzzle->start_position; ?>">
                                            <input type="hidden" name="moves" id="moves" value="<?= $puzzle->moves; ?>">
                                            <input type="hidden" name="pgn" id="pgn" value="<?= $puzzle->solution; ?>">
                                            <input type="hidden" name="pid" id="pid" value="<?= $puzzle->id; ?>">
                                             <input type="hidden" name="points" id="points" value="<?= $puzzle->points; ?>">
                                            <input type="hidden" name="finalfen" id="finalfen" value="<?= $puzzle->final_position; ?>">
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
                               <a class="btn btn-lg btn-info"  style="margin-top: 4px;" href="/home"><b>Exit Event</b></a> &nbsp;
                               
                              
                               <button class="btn btn-lg btn-social pull-right" style="margin-top: 4px;" id='next' value="Next" onclick="sum_values()"><b>Next Puzzle</b></button>
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

                            <div class="fb-comments" data-href="http://trumpetstechnologies.com/cv/articles/show/<?= $puzzle->id; ?>" data-numposts="5" data-width="100%"></div>
                                    
                            
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
  
    <script src="/js/flipclock.min.js"></script>

    

  <script src="/js/puzzleContest.js"></script>

@endsection