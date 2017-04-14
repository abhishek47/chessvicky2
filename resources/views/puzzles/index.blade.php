@extends('layouts.app')


@section('content')


 <!-- start page-title -->
        <section class="page-title">
            <div class="container">
                <div class="title-box">
                    <h1>Checkmate Puzzles</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Puzzles</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start case-studies -->
        <section class="case-studies section-padding">
            <div class="container">        

               <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $puzzles->links() }}
                      
                    </div>
                </div>
                <div class="row case-studies-grids">

                  @foreach($puzzles as $puzzle)
                    <div class="col col-md-4 col-xs-6">
                        <div class="grid">
                            <div class="img-holder">
                                <a href="/puzzles/{{ $puzzle->id }}">
                                    <div id="board<?= $puzzle->id; ?>" style=""></div>
                                </a>
                            </div>
                            <div class="details">
                                <h3><a href="/puzzles/{{ $puzzle->id }}">Checkmate in <?= $puzzle->moves; ?> Moves</a></h3>
                                <span>Level : {{$puzzle->level}} | Points : {{$puzzle->points}} | Coins : {{$puzzle->coins}}</span>
                                <a href="/puzzles/{{ $puzzle->id }}" class="view-case-studes">Solve Puzzle</a>
                            </div>
                        </div>
                    </div>

                     <script type="text/javascript">
	                                    var init<?= $puzzle->id; ?> = function() {

	                                    //--- start example JS ---
	                                    var board<?= $puzzle->id; ?>;

	                                    var cfg<?= $puzzle->id; ?> = {
	                                    draggable: false,
	                                    position: 'start',
	                                    sparePieces: false,
	                                    pieceTheme: 'http://www.willangles.com/projects/chessboard/img/chesspieces/wikipedia/{piece}.png'
	                                    };
	                                    board<?= $puzzle->id; ?> = ChessBoard('board<?= $puzzle->id; ?>', cfg<?= $puzzle->id; ?>);

	                                    board<?= $puzzle->id; ?>.position('<?= $puzzle->start_position; ?>');

	                                    }; // end init()
	                                    $(document).ready(init<?= $puzzle->id; ?>);
                                  </script>


                   @endforeach 
                    
                </div> <!-- end row -->

                <div class="row">
                    <div class="col col-xs-12">
                        
                            {{ $puzzles->links() }}
                      
                    </div>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end case-studies -->



@endsection