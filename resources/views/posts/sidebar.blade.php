
<div class="widget recent-post-widget">
   <br>
    <h3>Recent posts</h3>
    <ul>
       @foreach($latestPosts as $post)

            <li>
                
                <div class="">
                    <h4><a href="#">{{ substr($post->title, 0, 30) }}..</a></h4>
                    <span>{{ $post->created_at->toFormattedDateString() }}</span>
                </div>
            </li>

        @endforeach
        
    </ul>
</div>

<div class="widget news-letter-widget" style="background: #0f80ff;;">
<h4 style="color: white">Now, even you can write articles on ChessVicky and earn fame!</h4>
<form class="form">
    <div>
        <button class="btn" type="submit">Write Article</button>
    </div>
</form>
</div>

<div class="widget archive-widget">
    <h3>Archive</h3>
    <ul>
    @foreach($archives as $stats)
         <li><a href="/blog?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] }} {{ $stats['year'] }} 
                <span class="badge">{{ $stats['published'] }}</span>
              </a>
        </li>
    @endforeach
       
    </ul>
</div>

<div>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- CV AD 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8430312518838448"
     data-ad-slot="9164273811"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- CV AD 2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8430312518838448"
     data-ad-slot="3117740219"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


</div>
