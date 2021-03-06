<div class="col col-md-4 col-xs-6">
                        <div class="grid panel panel panel-default" style="padding: 10px 10px 10px 10px;box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #f7f7f7;">
                            <div class="img-holder">
                                <a href="/puzzles/{{ $puzzle->id }}">
                                    <div id="board<?= $puzzle->id; ?>" style=""></div>
                                </a>
                            </div>
                            <div class="details">
                                <h3><a href="/puzzles/{{ $puzzle->id }}">Checkmate in <?= $puzzle->moves; ?> Moves</a></h3>
                                <span>Level : {{$puzzle->level + 1}} | Points : {{$puzzle->points}} | Coins : {{$puzzle->coins}} | White</span>
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
	                                    pieceTheme: 'https://chessvicky.com/admin/img/chesspieces/wikipedia/{piece}.png'
	                                    };
	                                    board<?= $puzzle->id; ?> = ChessBoard('board<?= $puzzle->id; ?>', cfg<?= $puzzle->id; ?>);

	                                    board<?= $puzzle->id; ?>.position('<?= $puzzle->start_position; ?>');

	                                    }; // end init()
	                                    $(document).ready(init<?= $puzzle->id; ?>);
                                  </script>