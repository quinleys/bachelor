<?php

namespace App\Http\Controllers\api\v1\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Extra;
use App\Room;
use App\Layout;
use App\Reservation;
use App\Restaurant;
use App\Comment;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Carbon\Carbon;
use Spatie\OpeningHours\OpeningHours;
use DateTime;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function layout($id)
    {
        $activeRooms = Room::where('restaurant_id',$id)->where('active', 1)->with('Layout')->with('Extras')->get();
        $allrooms = Room::where('restaurant_id',$id)->with('Layout')->with('Extras')->get();
        $layouts = Layout::where('restaurant_id', $id)->with('Tables')->get();
        return ['activeRoom' => $activeRooms, 'allRooms' => $allrooms , 'allLayouts' => $layouts ];
    }
    public function all($id)
    {
        /* $result = QueryBuilder::for(Comment::class)
        ->allowedFilters(['restaurant.id'])
        ->with('User')
        ->paginate(9);
        return $result; */
        
        /* $results = Comment::where('restaurant_id',$id)->with('user')->get();

        return $results; */
    }
    public function plattegrond(Request $request){

        date_default_timezone_set('UTC');
        $persons = $request->persons;
        $restaurant = Restaurant::with('Reservations','Rooms')->find($request->id);

        if($restaurant)
        {

        $date = $request->date;
        $carbon_date = Carbon::parse($date);
        $carbon_justdate = Carbon::parse($date)->toDateString();
        $carbon_TimeLate = Carbon::parse($date)->addHours(2);
        $carbon_TimeEarly = Carbon::parse($date)->subHours(2);

        $array = json_decode($restaurant->openinghours, true);
        $openingHours = OpeningHours::create($array[0]);
/*         $openingHours->isOpenAt(new DateTime($date));
        if($openingHours->isOpenAt(new DateTime($carbon_date))){
            return 'hello';
        } */
        /* $time = $request->time; */
        /* $carbon_time = Carbon::parse($time); */
        
        /* $extrahours = $carbon_date->addHours(2);
        $lessHours = $carbon_date->subHours(2); */
       
        if($openingHours->isOpenAt(new DateTime($date))){
        $layout = array();
        // where restaurant_id && zelfde datum && time between hours -2 & +2
        
        $reservations = Reservation::where('restaurant_id', $request->id)->where('date', $carbon_justdate )->whereBetween('time', [$carbon_TimeEarly,$carbon_TimeLate])->get();
        
        if(!$reservations->isEmpty()){
          
                $alltables = array();
      
                    if($restaurant->rooms){
                    $mytime = Carbon::now();
                    $rooms = Room::where('restaurant_id','=',$restaurant->id)->where('active', true)->with('Layout')->with('Layout.Tables')->get();
                        if(!$rooms->isEmpty()){
                            $allRooms = array();
                                    foreach($rooms as $room){
                                        $returnTables = array();
                                        $freetables = array();
                            
                                        $tables = Layout::find($room->layout->id)->tables()->get();
                                    
                                        
                                        /* return $rooms; */
                                        foreach ($reservations as $reservation) {

                                            foreach ($tables as $key => $pick ) { // Note: $key represents the current element's key so the first one will be 0, second one will be 1, etc.
                                                // Do your comparison here
                                                if ($reservation->table_pivot_id == $pick->pivot->id && $reservation->table_id == $pick->id) {
                                                    $tables->forget($key);
                                                }
                                            }
                                        }

                                        foreach($tables as $table){
                                            $freetable = Layout::find($room->layout->id)->tables()->wherePivot('id', $table->pivot->id)->get();
                                            $newCompete = array($freetable);
                                            array_push($freetables, $newCompete);
                                        }

                                        $newCompete = array('freetables' => $freetables, 'reservations' => $reservations);
                                        array_push($allRooms, $newCompete);
                                    
                                    }
                                    
                                return ['open', 'rooms' => $allRooms ];

                        }else {
                            return ['closed', 'Dit restaurant is momenteel niet beschikbaar!'];
                        }
                       
                       
                    }
                    

            // geen reservaties
        } else {

                $rooms = Room::where('restaurant_id','=',$restaurant->id)->where('active',true) ->with('Layout')->with('Layout.Tables')->get();
                
                if( !$rooms->isEmpty() ){
                    $allRooms = array();
                    foreach($rooms as $room){
                        $freetables = array();
                        $tables = Layout::find($room->layout->id)->tables()->get();
                        foreach($tables as $table){
                           
                                $newCompete = array($table);
                                array_push($freetables, $newCompete);

                            
                        }
                        $newCompete = array('freetables' => $freetables, 'reservations' => 'geen reservaties');
                            
                        array_push($allRooms, $newCompete);
                    }
                    return ['open','rooms' => $allRooms];

                }else{
                    return ['closed', 'Dit restaurant is momenteel niet beschikbaar!'];
                }
                
            }
          // openingsuren gesloten  
        }else {
            return ['closed', 'nothing found'];
            }
            // geen restaurant
        }else{
            return ['closed', 'nothing found'];
        }
    }

    public function recentReservations($id)
    {
        return Reservation::where('restaurant_id', $id)->orderBy('created_at', 'desc')->paginate(5);
    }
    
    public function recentComments($id)
    {
        return Comment::where('restaurant_id', $id)->orderBy('created_at', 'desc')->paginate(5);
    }

    public function room($id)
    {
        $user = auth()->guard('api')->user();
        $room = Room::where('id',$id)->with('Extras')->with('Restaurant')->first();
        if($user->restaurant[0] == $room->restaurant->id){
            return $room;
        }else{
            return 'Not allowed';
        }
        
    }

    public function updateroom(Request $request)
    { 
        
        $room = Room::find($request->id);

        if($request->title){
            $room->title = $request->title;
        }
        if($request->walls){
            $room->walls = $request->walls;
        }
       
        if($request->layout){
            $room->layout_id = $request->layout;
        }
        
        if($request->active){
            
            if($request->active == "true"){
                
                $room->active = true;
            }else {
                
                $room->active = false;
            }
            
            
        }
       
        $room->save();

        if($request->extras){

           $room->extras()->detach(); 

            $extras = $request->extras;

             foreach ($extras as $extra) {
                 $room->extras()->attach($extra['realId'],["restaurant_id" => $room->restaurant_id , "x" => $extra['x'], "y" => $extra['y'],"width" => $extra['width'] ,"height" => $extra['height']]);
             }
        } 

        $newRoom = Room::where('id',$request->id)->with('layout')->with('layout.tables')->with('extras')->first();

        return $newRoom;
    }

    public function getActiveRooms ($id) {
        $rooms = Room::where('restaurant_id', $id)->where('active', true)->with('Layout')->with('Layout.Tables')->get();
        return $rooms;
    }


    public function updatelayout(Request $request)
    { 
        $layout = Layout::find($request->id);

        $layout->title = $request->title;

        $layout->save();
 

        if($request->tables){

           $layout->tables()->detach(); 

            $tables = $request->tables;

             foreach ($tables as $table) {
                 $layout->tables()->attach($table['realId'],["restaurant_id" => $layout->restaurant_id , "x" => $table['x'], "y" => $table['y'],"width" => $table['width'] ,"height" => $table['height']]);
             }
        } 


        return $layout;
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
            'comment' => 'required',

        ]);

        $newComment = Comment::create($validatedDate);
        $id = $newComment->id;
        $comment = Comment::where('id',$id)->with('user')->get();
      
        return $comment;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        //
    }
}
