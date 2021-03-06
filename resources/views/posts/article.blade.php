<!-- <div class="col col-md-6 col-xs-6">
    <div class="grid panel panel-default" id="article">
       <div class="entry-media">
            <img src="{{ empty($post->featured_img) ? '/images/slider/slider-3.jpg' : $post->featured_img }}" style="height: 256px;width: 100%;" alt class="img img-responsive">
        </div> 
        <div class="entry-title">
            <h3><a href="/blog/{{$post->slug}}">{{ substr($post->title, 0, 70) }}...</a></h3>
        </div>
        <div class="entry-meta">
            <ul>

                <li><a href="#"><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString() }}</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> <span>23</span> comments</a></li>
            </ul>
        </div>
        <div class="entry-details">
            <p>We’re the leading consulting partner to the private equity industry and its key stakeholders. We advise investors across the entire investment life cycle...<a href="/blog/{{$post->slug}}" class="read-more">Read more</a></p>
            <a href="#"><i class="fa fa-user"></i> &nbsp; <span>{{ $post->author }}</span></a> <br>
            
        </div>
    </div>
</div> -->



 <li style="margin-bottom: 10px;">
    <div class="article">
        <div class="author-pic hidden-xs">
          
           <span class="chatter_avatar_circle" style="background-color:#<?= \DevDojo\Chatter\Helpers\ChatterHelper::stringToColorCode($post->author) ?>">
                {{ ucfirst(substr($post->author, 0, 1)) }}
            </span>
          
        </div>
        <div class="details">
            <div class="author-meta">
                <div class="name"><h4 style="font-size: 12px;">@if(isset($q)){!! highlight_words($post->author, explode(' ', $q)) !!}@else {{ $post->author  }}@endif</h4></div>
                <div class="date"><span>{{ $post->created_at->diffForHumans() }}</span></div>
            </div>
            <div class="comment-content">
                <a href="/blog/{{$post->slug}}"><h4 style="font-size: 21px;margin-bottom: 10px;">@if(isset($q)){!! highlight_words($post->title, explode(' ', $q)) !!}@else {{ $post->title  }}@endif</h4> </a>
                @if(isset($q)) 
                   <p>{!! highlight_words(substr(strip_tags($post->body), 0, 200), explode(' ', $q)) !!}@if(strlen(strip_tags($post->body)) > 200){{ '...' }}@endif</p> 
                @else
                   <p>{{ substr(strip_tags($post->body), 0, 200) }}@if(strlen(strip_tags($post->body)) > 200){{ '...' }}@endif</p>
                @endif 
                     
                <p><small><i class="fa fa-comments"></i> <span>@if(isset($q)){!! highlight_words($post->tags, explode(' ', $q)) !!}@else {{ $post->tags  }}@endif</span></small></p>
            </div>
           
        </div>

        
    </div>
   
</li>
