
<div class="col col-md-4 col-xs-12" style="padding: 10px;padding-top: 0px;margin-bottom: 10px;">
    <div class="grid panel panel-default" style="box-shadow: 3px 3px 3px 3px rgba(0,0,0,.05);background: #c7f2a2;height: 190px;">
        <div class="panel-heading" style="background: #2e6300">
            
        </div>
        <div class="details" style="padding: 0px 10px 10px 10px;">
            <h3><a href="/quiz/{{ $quiz->id }}">{{$key+1}}.{{ $quiz->title }}</a></h3>
            <span>Level : {{$quiz->level}} | Points : {{$quiz->getPoints()}} | Coins : {{$quiz->getCoins()}} | Questions : {{ count($quiz->questions) }}</span> <br><br>
            <b><a href="/quiz/{{ $quiz->id }}" class="view-case-studes" style="font-size: 21px;color: #f39c12;">Solve Quiz --></a></b>
        </div>
    </div>
</div>

