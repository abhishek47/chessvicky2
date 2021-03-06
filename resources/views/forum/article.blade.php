<!-- <div class="col col-md-12 col-xs-12">
    <div class="grid">
        
        
       
            <div class="entry-title">
                <h3><a href="/forum/{{$question->slug}}">{{ substr($question->title, 0, 70) }}...</a></h3>
            </div>
            <div class="entry-meta">
                <ul>

                    <li><i class="fa fa-clock-o"></i> {{ $question->created_at->toFormattedDateString() }}</li>
                    <li><i class="fa fa-comments"></i> <span>23</span> replies</li>
                </ul>
            </div>

            <div class="entry-details">
                
                <a href="#"><i class="fa fa-user"></i> &nbsp; <span>{{ $question->user->name }}</span></a> <br>
                
            </div>
            <hr>
        </div>
       
    </div> -->


 <li style="margin-bottom: 10px;">
    <div class="article">
        <div class="author-pic hidden-xs">
          @if($question->user->profile->photo)
            <img style="width: 60px;height: 60px;" src="{{ $question->user->profile->photo }}" alt="">
          @else
           <span class="chatter_avatar_circle" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($question->user->name) ?>">
                {{ ucfirst(substr($question->user->name, 0, 1)) }}
            </span>
          @endif  
        </div>
        <div class="details">
            <div class="author-meta">
                <div class="name"><h4 style="font-size: 12px;">@if(isset($q)){!! highlight_words($question->user->name, explode(' ', $q)) !!}@else {{ $question->user->name  }}@endif</h4></div>
                <div class="date"><span>{{ $question->created_at->diffForHumans() }}</span></div>
            </div>
            <div class="comment-content">
                <a href="/forum/{{$question->slug}}"><h4 style="font-size: 24px;margin-bottom: 10px;">@if($question->solved > 0)<i class="fa fa-check"></i>@endif @if(isset($q)){!! highlight_words($question->title, explode(' ', $q)) !!}@else {{ $question->title  }}@endif</h4> </a>
                  @if(isset($q)) 
                   <p>{!! highlight_words(substr(strip_tags($question->body), 0, 200), explode(' ', $q)) !!}@if(strlen(strip_tags($question->body)) > 200){{ '...' }}@endif</p> 
                @else
                   <p>{{ substr(strip_tags($question->body), 0, 200) }}@if(strlen(strip_tags($question->body)) > 200){{ '...' }}@endif</p>
                @endif 

                <p><small><i class="fa fa-comments"></i> <span>{{ count($question->answers) }}</span> replies</small></p>
            </div>
            
        </div>
    </div>
   
</li>

