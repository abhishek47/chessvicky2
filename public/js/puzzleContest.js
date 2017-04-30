var init = function() {



//--- start example JS ---
var board
  game = new Chess(),
  startfenEl = $('#startfen'),
  pgn = $('#pgn').val(),
  start = $('#startfen').val(),
  solution = $('#finalfen').val(),
  moves = $('#moves').val(); 
  points = $('#points').val(); 

  var curMove = 0;
  var steps = pgn.split(',');
  var completed = false;
  var pid = $('#pid').val();
 
   var clock = $('.clock').FlipClock({
        // Create a minute counter
        clockFace: 'MinuteCounter',
        autoStart: false
        });

   var time;
  

var updateStatus = function(move) {

    // checkmate?
  if (game.in_checkmate() === true) {
    axios.post('/user/puzzles', {
    puzzle: pid,
    })
    .then(function (response) {
      console.log(response);
        clock.stop(function(){
            time = clock.getTime() - 1;
        });

       swal({
            title: "Puzzle Solved!",
            html: true,
            text: "<span style='color:#0a0a0a;font-weight:400'>You solved the puzzle in " + time + " seconds!</span>",
            type: "success",
            showCancelButton: true,
            confirmButtonColor: "#0048bc",
            confirmButtonText: "Next Puzzle",
            cancelButtonText: "Exit Contest!",
            closeOnConfirm: false,
            closeOnCancel: false,
          },
          function(isConfirm){
             if(isConfirm) {
              window.location.href = "/puzzles/random";
             } else {
              window.location.href = "/home";
             } 
          });
      
    })
    .catch(function (error) {
      console.log(error);
    });
    

  }

  // draw?
  else if (game.in_draw() === true) {
    status = 'Game over, drawn position';
  }

  // game still on
  else {
        
        if(move != null && move.san == steps[curMove]) {
              curMove++;
              moves--;
             changePlayer();
             setTimeout(
            function() 
            {
              playComputer();
            }, 2000);
             
        } else {
          game.undo();

        }  

        board.position(game.fen());
        
  }
        
        
  
};

var cfg = {
  draggable: false,
  position: 'start',
  sparePieces: false,
  snapbackSpeed: 500,
  snapSpeed: 100,
  pieceTheme: 'http://www.willangles.com/projects/chessboard/img/chesspieces/wikipedia/{piece}.png',
  
};
board = ChessBoard('board', cfg);

updateStatus();


 var playAudio = function() {
    var audio = new Audio('../audio/mov.wav');
    audio.play();
};


function changePlayer()
{
    $('#movesleft').html(moves);
  $('#player').toggleClass('hidden');
             $('#comp').toggleClass('hidden'); 
}
 

 function playComputer(){
     
     if(!completed) {
       move = game.move(steps[curMove]);
       $('#board .square-55d63').css('background', '');

        var background = '#a9a9a9';
      if ($('#board .square-' + move.to).hasClass('black-3c85d') === true) {
        background = '#696969';
      }
       $('#board .square-' + move.to).css('background', background);

       var background = '#a9a9a9';
      if ($('#board .square-' + move.from).hasClass('black-3c85d') === true) {
        background = '#696969';
      }
       $('#board .square-' + move.from).css('background', background);
       playAudio();
       curMove++;
       moves--;
       board.position(game.fen());
       changePlayer();
     }  

 }


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
            if (move != null ) {
               board.position(game.fen());
               squareEl.css('background', background);
                  var background = '#a9a9a9';
                    if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
                      background = '#696969';
                    }
                     $('#board .square-' + source).css('background', background);
                  playAudio();
               
                
            } else {

                   $('#board .square-55d63').css('background', '');
            } 



                  $('#source').data('val', 0);
                  updateStatus(move);
              }

            
            
            
             
            console.log("You clicked on square: " + square);

        }
      }

      $("#board").on("click", ".square-55d63", clickOnSquare);
      
      console.log(start);
      game.load(start + ' w KQkq - 1 3');
      board.position(game.fen());

  

    

         setTimeout(
            function() 
            {
              clock.start(function() {
                // Optional callback will fire when the clock starts
                });
            }, 2000);

      

       

}; // end init()
$(document).ready(init);