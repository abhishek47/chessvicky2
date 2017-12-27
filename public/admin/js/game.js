var init = function() {

//--- start example JS ---
var board,board2
  game = new Chess(),
  game2 = new Chess(),
  finalfenEl = $('#finalfen');
  startfenEl = $('#startfen');
  pgnele = $('#pgn');





var onDrop = function(source, target, piece, newPos, oldPos, orientation) {
  console.log("Source: " + source);
  console.log("Target: " + target);
  console.log("Piece: " + piece);
  console.log("New position: " + ChessBoard.objToFen(newPos));
  console.log("Old position: " + ChessBoard.objToFen(oldPos));
  console.log("Orientation: " + orientation);
  console.log("--------------------");
  board.position(ChessBoard.objToFen(newPos));
  startfenEl.val(board.fen());
};



var updateStatus = function() {
  
  startfenEl.val(board.fen());
  
};

var cfg = {
  draggable: true,
  position: 'start',
  dropOffBoard: 'trash',
  sparePieces: true,
  pieceTheme: 'https://chessvicky.com/admin/img/chesspieces/wikipedia/{piece}.png',
  onDrop: onDrop,
};
board = ChessBoard('startboard', cfg);

updateStatus();


// do not pick up pieces if the game is over
// only pick up pieces for the side to move
var onDragStart2 = function(source, piece, position, orientation) {
    return true;
};

var onDrop2 = function(source, target) {
  // see if the move is legal
  var move = game2.move({
    from: source,
    to: target,
    promotion: 'q' // NOTE: always promote to a queen for example simplicity
  });


  // illegal move
  if (move === null) return 'snapback';

  updateStatus2();
};
// update the board position after the piece snap 
// for castling, en passant, pawn promotion
var onSnapEnd2 = function() {
  board2.position(game2.fen());
};

var updateStatus2 = function() {
  

  finalfenEl.val(game2.fen());
  if(pgnele.val() != ''){
  pgnele.val(pgnele.val() + ',' + game2.history().pop());
  } else {
     pgnele.val(game2.history().pop());
  }

  $('#moves').val(parseInt($('#moves').val()) + 1);
};


var cfg = {
  draggable: true,
  position: 'start',
  onDragStart: onDragStart2,
  onDrop: onDrop2,
  pieceTheme: 'http://www.willangles.com/projects/chessboard/img/chesspieces/wikipedia/{piece}.png',
  onSnapEnd: onSnapEnd2
};
board2 = ChessBoard('finalboard', cfg);

  $('#start1').on('click', function(){
    board.start;
     updateStatus();
  });


$('#clearInst1').on('click', function() {
  board.clear(false);
  game.clear();
  updateStatus();
});


$('#record').on('click', function() {

    $('#solution').css('visibility', 'visible');
    game2.load(startfenEl.val() + ' w - - 1 1');
 
    board2.position(game2.fen());
    $('#moves').val(0);
    $('#pgn').val('');
});


if($('#edit').val())
{
  game.load($('#edit').val() + ' w - - 1 1');
  
  board.position(game.fen());

  updateStatus();

  game2.load(finalfenEl.val());
 
  board2.position(game2.fen());
}

//--- end example JS ---


}; // end init()
$(document).ready(init);