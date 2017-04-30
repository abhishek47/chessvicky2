


 <li style="margin-bottom: 10px;">

  <div class="panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);">

                            <div class="panel-heading" style="padding-bottom: 0px;padding-top: 0 ;background: #f8f8f8">
                                <h3 style="margin: 0px;padding-top: 2px;"><a href="/puzzles/contest/{{$contest->id}}"><h4>Contest #{{ $contest->id }}</h4> </a></h3>
                            </div>
                            <div class="panel-body" >

                <p style="color: #000;font-size: 18px;">Puzzles To Solve : <b>5</b> <br> Entry Fees : <span style="font-weight: bold;">{{ $contest->price }}</span> Coins |  Win : <b>{{ $contest->coins }}</b> Coins <br>Contest Leaderboard Highest : <b>12 seconds</b> | Players Enrolled : <b>32</b> <br>
                 Starts At : <b>{{ $contest->starts_at }}</b> | Ends At : <b>{{ $contest->starts_at }}</b>
                 </p>
                            </div>
                            <div class="panel-footer">
                                <a href="/puzzles/contest/{{$contest->id}}" class="btn btn-success">Play Contest</a> <a href="#" class="btn btn-social">View Contest Leaderboard</a>
                            </div>
                        </div> 

    
</li>

