<div class="col col-md-6 col-xs-6">
    <div class="grid panel panel-default" style="padding: 10px 10px 10px 10px;box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #f7f7f7;height: 520px;">
       <div class="entry-media">
            <img src="{{ empty($post->featured_img) ? '/images/blog/img-1.jpg' : $post->featured_img }}" alt class="img img-responsive">
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
</div>