<?php

namespace App\Http\Controllers\api\v1\reservation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Reservation;
use Carbon\Carbon;
use App\User;
use App\Restaurant;

use App\Mail\ReservationMail;
use App\Mail\CancelEmail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Reservation::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function user($id)
    {

        $allreservations = Reservation::with('Restaurant')->where('user_id', $id)->get();
        $futurereservations = $allreservations->where('date_time', '>' , Carbon::now());
        $pastreservations = $allreservations->where('date_time', '<' , Carbon::now());
        return response()->json(['all'=> $allreservations , 'past' => $pastreservations,'future' => $futurereservations]);
    }
    public function past($id)
    {
        $allreservations = Reservation::with('Restaurant')->where('user_id', $id)->where('date_time', '<' , Carbon::now())->paginate(3);
        return $allreservations;
    }
    public function future($id)
    {
        $allreservations = Reservation::with('Restaurant')->where('user_id', $id)->where('date_time', '>' , Carbon::now())->paginate(3);
        return $allreservations;
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedDate = $request->validate([
            'user_id' => 'required',
            'restaurant_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'persons' => 'required',
            'table_id' => 'required',
            'table_pivot_id' => 'required'
        ]);

        $reservation = new Reservation;

        $reservation->user_id = $request->user_id;
        $reservation->restaurant_id = $request->restaurant_id;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->persons = $request->persons;
        $reservation->table_id = $request->table_id;
        $reservation->date_time = $request->date_time;
        $reservation->table_pivot_id = $request->table_pivot_id;

        $reservation->save();

        $user = User::find($request->user_id);
        $restaurant = Restaurant::find($request->restaurant_id);

        Mail::to($user->email)->send(new ReservationMail($user, $reservation, $restaurant));
        
       /*  if($restaurant->contactemail){
            Mail::to($restaurant->contactemail)->send(new ReservationMail($user, $reservation, $restaurant));
        } */

        return response(['reservation' => $reservation]);

    }
    public function getWeeklyReservations ($id) 
    {
        Carbon::setWeekStartsAt(Carbon::SUNDAY);
        Carbon::setWeekEndsAt(Carbon::SATURDAY);
        /* return Carbon::now()->endOfWeek(); */
        return Reservation::with('Restaurant')->where('restaurant_id', $id)->whereBetween('date_time', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get() ;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Reservation::with('Restaurant','User')->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();
        $user = User::find($reservation->user_id);
        $restaurant = Restaurant::find($reservation->restaurant_id);

        Mail::to($user->email)->send(new CancelEmail($user,$reservation,$restaurant));

        if($restaurant->contactemail){
            Mail::to($restaurant->contactemail)->send(new CancelEmail($user,$reservation,$restaurant));
        }
        
        return $reservation;
    }
}
