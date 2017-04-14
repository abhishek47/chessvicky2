<div class="col col-md-6 col-xs-6">
    <div class="grid">
       <!-- <div class="entry-media">
            <img src="{{ $post->featured_img }}" alt class="img img-responsive">
        </div> -->
        <div class="entry-title">
            <h3><a href="/blog/{{$post->slug}}">{{ $post->title }}</a></h3>
        </div>
        <div class="entry-meta">
            <ul>
                <li><a href="#"><i class="fa fa-clock-o"></i> {{ $post->created_at->toFormattedDateString() }}</a></li>
                <li><a href="#"><i class="fa fa-comments"></i> <span>23</span> comments</a></li>
            </ul>
        </div>
        <div class="entry-details">
            <p>{{ $post->intro }}</p>

            <a href="/blog/{{$post->slug}}" class="read-more">Read more</a>
        </div>
    </div>
</div>