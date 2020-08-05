@component('mail::message')
# CANCELLATION CONFIRMATION

# Hi,

Your reservation has been canceled.


## Reservation Summary:  

ID:  {{$reservation->id}}   

Restaurant:  {{$restaurant->title}}   

Date:  {{$reservation->date }}   

Time:  {{ $reservation->time }}   

Amount of People:  {{ $reservation->persons}}   


@component('mail::button', ['url' => 'http://localhost:3000/'])
Go to website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
