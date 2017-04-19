@component('mail::message')
# Chess Quiz Challenge From {{ $user->name }}!

Your friend {{ $user->name }} has challenged you to solve a quiz on Chessvicky.com.

@component('mail::button', ['url' => $url])
Accept Challenge
@endcomponent

Thanks,<br>
ChessVicky
@endcomponent
