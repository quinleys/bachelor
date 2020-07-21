@component('mail::message')
# Welcome {{$user->name}}

Thank you for registering!

Dont wait and make some reservations!
@component('mail::button', ['url' => 'http://localhost:3000/restaurants'])
Go to website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
