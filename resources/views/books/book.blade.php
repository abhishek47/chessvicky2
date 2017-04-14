<div class="col col-md-4 col-xs-6">
    <div class="grid panel panel panel-default" style="padding: 10px 10px 10px 10px;box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #f7f7f7;">  
     <div class="panel-heading" style="background: #2e6300"></div>
        <div class="img-holder">
            <a href="/books/{{ $book->id }}">
                <img src="{{ $book->photo }}" style="height: 400px;width: 100%;" class="img img-responsive">
            </a>
        </div>
        <div class="details">
            <h3><a href="/books/{{ $book->id }}">{{ substr($book->name, 0, 40) }}</a></h3>
            <span>Price : {{ $book->price }}</span>
            <a href="{{ $book->link }}" class="view-case-studes">Buy Now</a>
        </div>
    </div>
</div>

                     