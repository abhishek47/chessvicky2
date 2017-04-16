var init = function() {

//--- start example JS ---
var board,board2
  game = new Chess(),
  game2 = new Chess(),
  finalfenEl = $('#finalfen');
  var solution = $('#finalfen').data('val'); 
  startfenEl = $('#startfen');
  pgnele = $('#pgn');
var completed = false;




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
  
   
        
        board.position(game.fen());
  
};

var cfg = {
  draggable: false,
  position: 'start',
  sparePieces: false,
  pieceTheme: 'http://www.willangles.com/projects/chessboard/img/chesspieces/wikipedia/{piece}.png',
  onDrop: onDrop,
};
board = ChessBoard('board', cfg);

updateStatus();



      function clickOnSquare(evt) {
        
        if(!completed) {

            var square = $(this).data("square");
             var squareEl = $('#board .square-' + square);

               $('#board .square-55d63').css('background', '');
                 // highlight the square they clicked over
            var background = '#a9a9a9';
            if (squareEl.hasClass('black-3c85d') === true) {
              background = '#696969';
            }

              squareEl.css('background', background);
            
              
              var source = $('#source').data('val');
              
              if(source == 0)
              {
                $('#source').data('val', square);
               
              } else {
                  
                  
                  var destination = square;

               console.log(source+destination);

             
            var move = game.move({
              from: source.toString(),
              to: destination.toString(),
              promotion: 'q' // NOTE: always promote to a queen for example simplicity
            });
             

            // illegal move
            if (move != null) {
               board.position(game.fen());
               squareEl.css('background', background);
                  var background = '#a9a9a9';
                    if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
                      background = '#696969';
                    }
                     $('#board .square-' + source).css('background', background);
               // playAudio();
               
                
            } else {
                
                
                  $('#board .square-55d63').css('background', '');
                 } 
                  $('#source').data('val', 0);
                  updateStatus();
              }

            
            
            
             
            console.log("You clicked on square: " + square);

        }
      }

      $("#board").on("click", ".square-55d63", clickOnSquare);


}; // end init()
$(document).ready(init);