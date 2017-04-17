@component('mail::message')
# Chess Puzzle Challenge From {{ $user->name }}!

Your friend {{ $user->name }} has challenged you to solve a puzzle on Chessvicky.com.

@component('mail::button', ['url' => $url])
Accept Challenge
@endcomponent

Thanks,<br>
ChessVicky
@endcomponent
