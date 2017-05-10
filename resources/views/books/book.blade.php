<div class="col col-md-4 col-xs-6">
    <div class="grid panel panel panel-default" style="padding: 10px 10px 10px 10px;box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #f7f7f7;height: 600px;">  
     <div class="panel-heading" style="background: #2e6300"></div>
        <div class="img-holder">
            <a href="/books/{{ $book->id }}">
                <img src="{{ $book->photo }}" style="height: 400px;width: 100%;" class="img img-responsive">
            </a>
        </div>

        <?php
          
          if(isset($q))

            { 
                $value = highlight_words($book->name, explode(' ', $q)); 
            } 
            else 

            { 

                $value = $book->name ; 
            }

        ?>
        <div class="details">
            <h3 style="font-size: 18px;"><a href="{{ $book->link }}">{{ str_limit($value, $limit = 100, $end = '...') }}</a></h3>
            <span>Price : {{ $book->price }}</span>
            <span>Author : @if(isset($q)){!! highlight_words($book->author, explode(' ', $q)) !!}@else {{ $book->author  }}@endif</span>
            <a href="{{ $book->link }}" class="view-case-studes">Buy Now</a>
        </div>
    </div>
</div>

                     