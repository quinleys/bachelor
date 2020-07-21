@component('mail::message')
# Hi {{$user->name}},

Thank you for your reservation!

Reservation details:
Restaurant: {{$restaurant->title}}
Date: {{$reservation->date }}
Time: {{ $reservation->time }}
Amount of People: {{ $reservation->persons}}

@component('mail::button', ['url' => 'http://localhost:3000/'])
Go to website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
