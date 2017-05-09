function engineGame(options) {

    options = options || {}
    var game = new Chess();
    var board;
    var engine = new Worker(options.stockfishjs || '/js/stockfish.js');
    var engineStatus = {};
    var displayScore = false;
    var time = { wtime: 300000, btime: 300000, winc: 2000, binc: 2000 };
    var playerColor = 'white';
    var clockTimeoutID = null;
    var isEngineRunning = false;
    var timeOver = false;
    
      var statusEl = $('#status');

   

    // do not pick up pieces if the game is over
    // only pick up pieces for White
    var onDragStart = function(source, piece, position, orientation) {
        var re = playerColor == 'white' ? /^b/ : /^w/
            if (game.game_over() ||
                piece.search(re) !== -1) {
                return false;
            }
    };

    function uciCmd(cmd) {
        engine.postMessage(cmd);
    }
    uciCmd('uci');

    function displayStatus() {


        var status = '<b>Engine: </b> ';
        if(!engineStatus.engineLoaded) {
            status += 'loading...';
        } else if(!engineStatus.engineReady) {
            status += 'loaded...';
        } else {
            status += 'ready.';
            
      $('#gamelevel').val('[ Level ' + $('#skillLevel').val() + ' ]');
        }
        status += ' <b>Book: </b>' + engineStatus.book;
        if(engineStatus.search) {
            status += '<br><b>' + engineStatus.search + '</b> | ';
            if(engineStatus.score && displayScore) {
                status += ' <b>Score: </b>' + engineStatus.score;
            }
        }
        $('#engineStatus').html(status);
    }

    function displayClock(color, t) {
        var isRunning = false;
        if(time.startTime > 0 && color == time.clockColor) {
            t = Math.max(0, t + time.startTime - Date.now());
            isRunning = true;
        }
        var id = color == playerColor ? '#time2' : '#time1';
        var sec = Math.ceil(t / 1000);
        var min = Math.floor(sec / 60);
        sec -= min * 60;
        var hours = Math.floor(min / 60);
        min -= hours * 60;
        var display = hours + ':' + ('0' + min).slice(-2) + ':' + ('0' + sec).slice(-2);
        if(isRunning) {
            display += sec & 1 ? ' <--' : ' <-';
        }
        $(id).text(display);
    }

    function updateClock() {
        displayClock('white', time.wtime);
        displayClock('black', time.btime);
    }

    function clockTick() {
       
         if(time.wtime == 0)
            {
                timeOver = true;
                swal("Oops...", "White ran out of time!", "error");
            } else if(time.btime == 0) {
                timeOver = true;
                swal("Oops...", "Black ran out of time!", "error");
            } else {
                 updateClock();
        var t = (time.clockColor == 'white' ? time.wtime : time.btime) + time.startTime - Date.now();
        var timeToNextSecond = (t % 1000) + 1;
        clockTimeoutID = setTimeout(clockTick, timeToNextSecond);
       }
    }

    function stopClock() {
        if(clockTimeoutID !== null) {
            clearTimeout(clockTimeoutID);
            clockTimeoutID = null;
        }
        if(time.startTime > 0) {
            var elapsed = Date.now() - time.startTime;
            time.startTime = null;
            if(time.clockColor == 'white') {
                time.wtime = Math.max(0, time.wtime - elapsed);

            } else {
                time.btime = Math.max(0, time.btime - elapsed);
            }
        }
    }

    function startClock() {
        if(game.turn() == 'w') {
           
            time.wtime += time.winc;
            time.clockColor = 'white';
        } else {
            time.btime += time.binc;
            time.clockColor = 'black';
        }
        time.startTime = Date.now();
        clockTick();
    }

          //used for clickable moves in gametext
    //not used for buttons for efficiency
    function goToMove(ply) {
         /*gameHistory = game.history({verbose: true});
      if (ply > gameHistory.length - 1) 
          {
            ply = gameHistory.length - 1;
        }
      game.reset();
      for (var i = 0; i <= ply; i++) {
        game.move(gameHistory[i].san);
      }
      currentPly = i - 1;
      board.position(game.fen());*/
      alert("Hello");
      return false;
    }




    var onChange = function onChange() { //fires when the board position changes
      //highlight the current move
      $("[class^='gameMove']").removeClass('highlight');
      $('.gameMove' + currentPly).addClass('highlight');
    }


    function updatePgn()
    {  
        var h = game.header();
        var gameHeaderText = '<h4>' + h.White + ' (' + h.WhiteElo + ') - ' + h.Black + ' (' + h.BlackElo + ')</h4>';
        gameHeaderText += '<h5>' + h.Event + ', ' + h.Site + ' ' + h.EventDate + '</h5>';
        var pgn = game.pgn();
        var gameMoves = pgn.replace(/\[(.*?)\]/gm, '').replace(h.Result, '').trim();

          //format the moves so each one is individually identified, so it can be highlighted
          moveArray = gameMoves.split(/([0-9]+\.\s)/).filter(function(n) {return n;});
          for (var i = 0, l = moveArray.length; i < l; ++i) {
            var s = $.trim(moveArray[i]);
            if (!/^[0-9]+\.$/.test(s)) { //move numbers
              m = s.split(/\s+/);
              for (var j = 0, ll = m.length; j < ll; ++j) {
                m[j] = '<span class="gameMove' + (i + j - 1) + '"><a class="myLink" data-move="' + (i + j - 1) + '" href="#">' + m[j] + '</a></span>';
              }
              s = m.join(' ');
            }
            moveArray[i] = s;
          }
          $("#game-data").html('<div class="gameMoves">' + moveArray.join(' ') + ' <span class="gameResult">'  + '</span></div>');
          
          var moveColor = 'White';
        if (game.turn() === 'b') {
          moveColor = 'Black';
        }

        // checkmate?
        if (game.in_checkmate() === true) {
          status = 'chess over, ' + moveColor + ' is in checkmate.';

        }

        // draw?
        else if (game.in_draw() === true) {
          status = 'chess over, drawn position';
        }

        // chess still on
        else {
          status = moveColor + ' to move';

          // check?
          if (game.in_check() === true) {
            status += ', ' + moveColor + ' is in check';
          }
        }

        statusEl.html(status);
    }


    function prepareMove() {
        stopClock();
        updatePgn();
        board.position(game.fen());
        updateClock();
        var turn = game.turn() == 'w' ? 'white' : 'black';
        if(!game.game_over() && !timeOver) {
            if(turn != playerColor) {
                var moves = '';
                var history = game.history({verbose: true});
                for(var i = 0; i < history.length; ++i) {
                    var move = history[i];
                    moves += ' ' + move.from + move.to + (move.promotion ? move.promotion : '');
                }
                uciCmd('position startpos moves' + moves);

                if(time.depth) {
                    uciCmd('go depth ' + time.depth);
                } else if(time.nodes) {
                    uciCmd('go nodes ' + time.nodes);
                } else {
                    uciCmd('go wtime ' + time.wtime + ' winc ' + time.winc + ' btime ' + time.btime + ' binc ' + time.binc);
                }
                isEngineRunning = true;
            }
            if(game.history().length >= 2 && !time.depth && !time.nodes) {
                startClock();
            }
        } else if(playerColor == turn) {
           
            var dataString = 'operation=decrement' + '&points='+150;
  
              $.ajax({
              type: "POST",
              url: '/user/game/stats/',
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html, window)
              { 
                  console.log("LOST");
                         
  
              }
              });

              swal({
                  title: "Check And Mate!",
                  html: true,
                  text: "<span style='color:#0a0a0a;font-weight:400'>You lose the game and lost <b>150</b> skillometer points!</span>",
                  type: "error",
                  showCancelButton: true,
                  confirmButtonColor: "#0048bc",
                  confirmButtonText: "Play Again!",
                  cancelButtonText: "Go Home!",
                  closeOnConfirm: false,
                  closeOnCancel: false,
                },
                function(isConfirm){
                   if(isConfirm) {
                    window.location.href = "/game/computer";
                   } else {
                    window.location.href = "/home";
                   }  
                });
        } else {
          var dataString = 'operation=increment' + '&points='+250;
  
              $.ajax({
              type: "POST",
              url: '/user/game/stats/',
              data: dataString,
              cache: false,
              beforeSend: function(request){ return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));},
              success: function(html, window)
              { 
                    
              }
              });

              swal({
                  title: "You Win!",
                  html: true,
                  text: "<span style='color:#0a0a0a;font-weight:400'>You win the game and gain <b>250</b> skillometer points!</span>",
                  type: "success",
                  showCancelButton: true,
                  confirmButtonColor: "#0048bc",
                  confirmButtonText: "Play Again!",
                  cancelButtonText: "Go Home!",
                  closeOnConfirm: false,
                  closeOnCancel: false,
                },
                function(isConfirm){
                    if(isConfirm) {
                    window.location.href = "/game/computer";
                   } else {
                    window.location.href = "/home";
                   }  
                }); 
             
             
        }
    }

    engine.onmessage = function(event) {
        var line = event.data;
        if(line == 'uciok') {
            engineStatus.engineLoaded = true;
        } else if(line == 'readyok') {
            engineStatus.engineReady = true;
        } else {
            var match = line.match(/^bestmove ([a-h][1-8])([a-h][1-8])([qrbk])?/);
            if(match) {
                isEngineRunning = false;
               var move =  game.move({from: match[1], to: match[2], promotion: match[3]});
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
                prepareMove();
            } else if(match = line.match(/^info .*\bdepth (\d+) .*\bnps (\d+)/)) {
                engineStatus.search = 'Depth: ' + match[1] + ' Nps: ' + match[2];
            }
            if(match = line.match(/^info .*\bscore (\w+) (-?\d+)/)) {
                var score = parseInt(match[2]) * (game.turn() == 'w' ? 1 : -1);
                if(match[1] == 'cp') {
                    engineStatus.score = (score / 100.0).toFixed(2);
                } else if(match[1] == 'mate') {
                    engineStatus.score = '#' + score;
                }
                if(match = line.match(/\b(upper|lower)bound\b/)) {
                    engineStatus.score = ((match[1] == 'upper') == (game.turn() == 'w') ? '<= ' : '>= ') + engineStatus.score
                }
            }
        }
        displayStatus();
    };
    

var playAudio = function() {
    var audio = new Audio('../audio/mov.wav');
    audio.play();
};

   

   

    var cfg = {
        draggable: false,
        /*boardTheme: "symbol_board_theme,*/
        position: 'start',
        pieceTheme: 'http://www.willangles.com/projects/chessboard/img/chesspieces/wikipedia/{piece}.png'

       
    };

    if(options.book) {
        var bookRequest = new XMLHttpRequest();
        bookRequest.open('GET', options.book, true);
        bookRequest.responseType = "arraybuffer";
        bookRequest.onload = function(event) {
            if(bookRequest.status == 200) {
                engine.postMessage({book: bookRequest.response});
                engineStatus.book = 'ready.';
                displayStatus();
            } else {
                engineStatus.book = 'failed!';
                displayStatus();
            }
        };
        bookRequest.send(null);
    } else {
        engineStatus.book = 'none';
    }

    board = new ChessBoard('board', cfg);


function clickOnSquare(evt) {
  
   if (game.game_over() || timeOver) {
                return false;
            }
    var turn = game.turn() == 'w' ? 'white' : 'black';
    if(turn == playerColor)        
   {
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
                playAudio();
               squareEl.css('background', background);
                  var background = '#a9a9a9';
                    if ($('#board .square-' + source).hasClass('black-3c85d') === true) {
                      background = '#696969';
                    }
                     $('#board .square-' + source).css('background', background);
               
                prepareMove();
               
                
            } else {
                
                
                  $('#board .square-55d63').css('background', '');
                 } 

                  $('#source').data('val', 0);
                  
              }

            
            
            
             
            console.log("You clicked on square: " + square);
      }
}

$("#board").on("click", ".square-55d63", clickOnSquare);

    return {
        reset: function() {
            game.reset();
            uciCmd('setoption name Contempt Factor value 0');
            uciCmd('setoption name Skill Level value 20');
            uciCmd('setoption name Aggressiveness value 100');
        },
        loadPgn: function(pgn) { game.load_pgn(pgn); },
        setPlayerColor: function(color) {
            playerColor = color;
            board.orientation(playerColor);
        },
        setSkillLevel: function(skill) {
            uciCmd('setoption name Skill Level value ' + skill);
        },
        setTime: function(baseTime, inc) {
            time = { wtime: baseTime * 1000, btime: baseTime * 1000, winc: inc * 1000, binc: inc * 1000 };
        },
        setDepth: function(depth) {
            time = { depth: depth };
        },
        setNodes: function(nodes) {
            time = { nodes: nodes };
        },
        setContempt: function(contempt) {
            uciCmd('setoption name Contempt Factor value ' + contempt);
        },
        setAggressiveness: function(value) {
            uciCmd('setoption name Aggressiveness value ' + value);
        },
        setDisplayScore: function(flag) {
            displayScore = flag;
            displayStatus();
        },
        start: function() {
            uciCmd('ucinewgame');
            uciCmd('isready');
            engineStatus.engineReady = false;
            engineStatus.search = null;
            timeOver = false;
            displayStatus();
            prepareMove();
        },
        undo: function() {
            if(isEngineRunning)
                return false;
            game.undo();
            game.undo();
            engineStatus.search = null;
            displayStatus();
            prepareMove();
            return true;
        }
    };
}
