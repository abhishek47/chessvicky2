 <li>
    <div class="article">
        <div class="author-pic">
            <img style="width: 60px;height: 60px;" src="/images/testimonials/img-1.jpg" alt="">
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
                <button>Mark Answer</button>
            </div>
        </div>
    </div>
   
</li>

                                
                           