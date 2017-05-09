 <li>
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
                <div class="name"><h4>{{ $answer->user->name }}</h4></div>
                <div class="date"><span>{{ $answer->created_at->diffForHumans() }}</span></div>
            </div>
            <div class="comment-content">
                <p>{!! $answer->body !!}</p>
            </div>
            <div class="replay">
               @if($question->solved == $answer->id) 
                <a href="/forum/answer/{{ $answer->id }}/{{ $question->id }}/unmark" class="btn btn-social">Unmark Answer</a>
               @else 
                <a href="/forum/answer/{{ $answer->id }}/{{ $question->id }}" class="btn btn-success">Mark Answer</a>
               @endif 
            </div>
        </div>
    </div>
   
</li>

                                
                           