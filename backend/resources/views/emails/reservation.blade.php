@component('mail::message')
# Hi {{$user->name}},

# Thank you for your reservation!

## Reservation details:  

Restaurant: {{$restaurant->title}}  

Date: {{$reservation->date }}  

Time: {{ $reservation->time }}  

Amount of People: {{ $reservation->persons}}  

{{-- @component('mail::button', ['url' => 'https://www.google.com/maps/place/' . $restaraunt->adress])
Google Maps
@endcomponent

@component('mail::button', ['url' => 'https://calendar.google.com/calendar/r/eventedit?dates='. $reservation->datetime .'&location=' . $restaurant->adress . '&text=' . $restaurant->title . '&details=Gaan+eten+met+'$reservation->persons'+personen&pli=1'])
Google Calender
@endcomponent --}}

@component('mail::button', ['url' => 'http://localhost:3000/'])
Go to website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
