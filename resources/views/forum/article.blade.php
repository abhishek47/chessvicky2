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
            <img style="width: 60px;height: 60px;" src="/images/testimonials/img-1.jpg" alt="">
        </div>
        <div class="details">
            <div class="author-meta">
                <div class="name"><h4 style="font-size: 12px;">{{ $question->user->name }}</h4></div>
                <div class="date"><span>{{ $question->created_at->diffForHumans() }}</span></div>
            </div>
            <div class="comment-content">
                <a href="/forum/{{$question->slug}}"><h4 style="font-size: 24px;margin-bottom: 10px;">{{ $question->title }}</h4> </a>
                <p>{{ substr($question->body, 0, 300) }}...</p> 

                <p><small><i class="fa fa-comments"></i> <span>{{ count($question->answers) }}</span> replies</small></p>
            </div>
            
        </div>
    </div>
   
</li>

