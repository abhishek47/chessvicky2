
<div class="col col-md-4 col-xs-12" style="padding: 10px;margin-bottom: 20px;padding-top: 0px;border: 1px solid #000;height: 170px; ">
    <div class="grid">
        <div class="details">
            <h3><a href="/quiz/{{ $quiz->id }}">{{ $quiz->title }}</a></h3>
            <span>Level : {{$quiz->level}} | Points : {{$quiz->getPoints()}} | Coins : {{$quiz->getCoins()}}</span> <br><br>
            <b><a href="/quiz/{{ $quiz->id }}" class="view-case-studes" style="font-size: 22px;">Solve Quiz --></a></b>
        </div>
    </div>
</div>

