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
       
        <div class="details">
            <div class="author-meta">
                <div class="name"><h4 style="font-size: 12px;">{{ $post->author }}</h4></div>
                <div class="date"><span>{{ $post->created_at->diffForHumans() }}</span></div>
            </div>
            <div class="comment-content">
                <a href="/blog/{{$post->slug}}"><h4 style="font-size: 21px;margin-bottom: 10px;">{{ $post->title }}</h4> </a>
                <p>{{ empty($post->intro) ? 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.' : substr($post->intro, 0, 300) }}...</p> 

                <p><small><i class="fa fa-comments"></i> <span>{{ $post->tags }}</span></small></p>
            </div>
            
        </div>

        <hr>
    </div>
   
</li>
