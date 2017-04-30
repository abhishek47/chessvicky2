


 <li style="margin-bottom: 10px;">
    <div class="article">
        <div class="details">
            <div class="author-meta">
                <div class="name"><h4 style="font-size: 12px;">{{ $contest->starts_at }} | {{ $contest->ends_at }}</h4></div>
              
            </div>
            <div class="comment-content">
                <a href="/puzzles/contest/{{$contest->id}}"><h4 style="font-size: 24px;margin-bottom: 10px;">{{ $contest->name }}</h4> </a>
                
                <p>{{ $contest->description }}</p>

                <p><small><i class="fa fa-money"></i>&nbsp; <span>{{ $contest->price }}</span> Coins Required to Play. | Win : {{ $contest->coins }} Coins | Minimum Time Uptil Now : 12 seconds </small></p>

                <a href="#" class="btn btn-success">Play Contest</a> <a href="#" class="btn btn-social">View Leaderboard</a>
            </div>
            
        </div>
    </div>
   
</li>

