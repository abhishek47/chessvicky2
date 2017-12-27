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


}; // end init()
$(document).ready(init);