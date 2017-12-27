@extends('layouts.app')




@section('content')

@if(request()->has('platform'))
      
      <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Play Chess With Computer</h1>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>Game</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->
 
 @endif

   <div class="page-wrapper blog-single-page">

        <!-- start blog-single-content -->
        <section class="blog-single-content section-padding">
            <div class="container">
                <div class="row blog-with-sidebar">
                    <div class="col col-lg-9 col-md-8 ">
                        
                        <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8"></div>
                            <div class="panel-body">
                               <a href="#"  data-toggle="modal" style="margin: 4px;" data-target="#con-close-modal" class="btn btn-social">
                                      <i class="fa fa-refresh"></i> Start New Game
                                   </a>
                            </div>
                        </div> 

                        <div class="comments">
                            
                            <ol>
                              
                                <li style="margin-bottom: 10px;">
                                <div class="article panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">
                                   
                                      <div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;">Play with ChessVicky!</h4></div>
                                            
                                        </div>
                                      </div>  
                                        <div class="comment-content">

                                            <script src="/js/chess.js"></script>

                                            <div class="col-sm-8" style="padding: 14px;">

                                               <p><b>Computer</b> (<span class="text-primary" id="time1">0:05:00</span>)</p>
                                                <br>
                                                
                                              <div id="board" style="width: 100%;"></div> 

                                               
                                                <br>
                                                <p><b>{{ Auth::user()->name }}</b> (<span class=" text-primary" id="time2">0:05:00</span>)</p>
       

                                            <br>

                                            </div>

                                            <div class="col-sm-4" id="puzzle-detail">

                                            <h3>Moves:</h3>
                                            <div id="game-data">
                                              </div>
                                            <hr>
                                            <p style="color: #000;font-weight: bold;"><strong>Status: </strong><span id="status"></span></p>
                                            <hr>
                                            <p style="color: #000;font-weight: bold;"> <div id="engineStatus">...</div> </p>
                                            <hr>                        
                                            <p>
                                             
                                              <i id="source" data-val="0" hidden="true"></i>
                                                <i id="dest" data-val="0" hidden="true"></i>
                                                

                                                
                                            </div>


                                      
  
                                           
                                        </div>
                                       
                                    </div>

                                    
                               
                               
                            </li>    

                            </ol>
                            <hr>

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

                        

                        

                       
                    </div> <!-- end blog-content -->

                    <div class="blog-sidebar col col-lg-3  col-md-4  col-sm-5">
                        @include('puzzles.sidebar')
                    </div>                    
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end blog-single-content -->


</div>


        <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title">Choose Game Preferences</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                
                                               <form class="form-horizontal">
                                                      <div class="form-group">
                                                        <label for="timeBase" class="control-label col-xs-4 col-sm-6 col-md-4">Base time (min)</label>
                                                        <div class="col-xs-4 col-sm-6 col-md-4">
                                                          <input type="number" class="form-control" id="timeBase" value="5"></input>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="timeInc" class="control-label col-xs-4 col-sm-6 col-md-4">Increment (sec)</label>
                                                        <div class="col-xs-4 col-sm-6 col-md-4">
                                                          <input type="number" class="form-control" id="timeInc" value="2"></input>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="skillLevel" class="control-label col-xs-4 col-sm-6 col-md-4">Skill Level (0-20)</label>
                                                        <div class="col-xs-6 col-sm-6 col-md-4">
                                                          <input type="number" class="form-control" id="skillLevel" value="5"></input>
                                                        </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="color" class="control-label col-xs-4 col-sm-6 col-md-4">I play</label>
                                                        <div class="col-xs-4 col-sm-6 col-md-4">
                                                          <div class="btn-group" data-toggle="buttons">
                                                            <label class="btn btn-default active" id="color-white"><input type="radio" name="color">White</label>
                                                            <label class="btn btn-inverse" id="color-black"><input type="radio" name="color">Black</label>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="form-group hidden">
                                                        <label for="showScore" class="control-label col-xs-4 col-sm-6 col-md-4">Show score</label>
                                                        <div class="col-xs-4 col-sm-6 col-md-4 hidden">
                                                          <input type="checkbox" class="form-control" id="showScore" checked></input>
                                                        </div>
                                                      </div>
                                                     
                                                    
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-info waves-effect waves-light" onclick="newGame()" data-dismiss="modal">Start Playing</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                 </div>
                            </div><!-- /.modal -->



@endsection



@section('scripts')
   
    <script src="/js/enginegame.js"></script>
    <script src="/js/smartgame.js"></script>

    <script type="text/javascript">
      $('.myLink').on('click', function(e) {
         e.preventDefault();
        var move = $(this).data('move');
        goToMove(move);
    });
    </script>

    <script type="text/javascript">
      $("#con-close-modal").modal()
    </script>
  
@stop