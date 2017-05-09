 var game = engineGame({book: '/js/book.bin'});

      function newGame() {
        var baseTime = parseFloat($('#timeBase').val()) * 60;
        var inc = parseFloat($('#timeInc').val());
        var skill = parseInt($('#skillLevel').val());
        game.reset();
        game.setTime(baseTime, inc);
        game.setSkillLevel(skill);
        game.setPlayerColor($('#color-white').hasClass('active') ? 'white' : 'black');
        game.setDisplayScore($('#showScore').is(':checked'));
        game.start();
      }

      newGame();