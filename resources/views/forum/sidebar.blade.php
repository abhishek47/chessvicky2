
<div class="widget recent-post-widget">
   <br>
    <h3>Recent Questions</h3>
    <ul>
       @foreach($latestQues as $ques)

            <li>
                
                <div class="">
                    <h4><a href="#">{{ substr($ques->title, 0, 30) }}..</a></h4>
                    <span>{{ $ques->created_at->toFormattedDateString() }}</span>
                </div>
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
<br>
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
