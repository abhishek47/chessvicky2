<!-- Modal -->

<div class="modal fade" id="buyCoins" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Buy Coins</h4>
        <form method="post" action="/buy/coins">
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        <b>Choose number of coins you want to buy.</b>
        <br><br> 
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default active rbtn">
            <input type="radio"  name="coins" id="option1" value="50" autocomplete="off" checked><i class="fa fa-money" style="color: green;"></i> 50 Coins ( &#8377 100 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="coins" id="option2" value="100" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  100 Coins ( &#8377 200 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio" name="coins" id="option3" value="300" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  300 Coins ( &#8377 600 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="coins" id="option4" value="500" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  500 Coins ( &#8377 1000 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="coins" id="option5" value="1000" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  1000 Coins ( &#8377 2000 )
          </label>
        </div>
        <br>  <br> 
        <p>You can <b>buy</b> and use these <b>coins</b> to play <b>different events</b> of quiz, puzzles as well as online tournaments.Winning these events can multiply your coins to <b>3x more</b> than you invest.These can also be further <b>redeemed to real cash</b>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-social">Make Payment</button>
        </form>
      </div>
    </div>
  </div>
</div>