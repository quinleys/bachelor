<?php

namespace App\Http\Controllers\api\v1\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Category;
use App\Rating;
use App\Layout;
use App\Table;
use App\Reservation;
use App\Room;
use App\Http\Resources\Restaurant as RestaurantResource;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\OpeningHours\OpeningHours;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class FiltersDay implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $restaurantsOpen = array();

        // get all restaurants 
        $restaurants = \DB::table('restaurants')->select('openinghours','id')->get();

        $carbon_date = Carbon::parse($value);

        foreach ($restaurants as $restaurant) {
            $array = json_decode($restaurant->openinghours, true);
            $openingHours = OpeningHours::create($array[0]);

            if($openingHours->isOpenAt($carbon_date)){
                
                $newCompete = array('id'=> $restaurant->id);
                // save all restaurants that are open
                array_push($restaurantsOpen, $newCompete);
                
            }
           
        }
        if(count($restaurantsOpen) > 0){
            return $query->findMany($restaurantsOpen);
        }else{
            // return nothing if no restaurant found
       return $query->where('id', 10000000);
    }
    }
}
class FiltersDate implements Filter
{

    public function __invoke(Builder $query, $value, string $property)
    {

        $restaurantsOpen = [];
        $restaurants = Restaurant::all();
        /* dd($restaurants); */
        foreach ($restaurants as $restaurant) {
            return $restaurant;
           /*  dd($restaurant->openinghours); */
            $array = json_decode($restaurant->openinghours, true);
           /*  dd($array);  */
            $openingHours = OpeningHours::create($array[0]);
            /*  dd($openingHours);  */
            
            if($openingHours->isOpen($value)){
                
                $newCompete = array('id'=> $restaurant->id);
                array_push($restaurantsOpen, $newCompete);
                /* dd($restaurantsOpen); */
                
            }
           
        }
       /*  return $query->findMany($restaurantsOpen); */
    }
}
class FiltersTime implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {

        $restaurantsOpen = [];
        $restaurants = \DB::table('restaurants')->get();
        /* dd($restaurants); */
        foreach ($restaurants as $restaurant) {
           /*  dd($restaurant->openinghours); */
            $array = json_decode($restaurant->openinghours, true);
           /*  dd($array);  */
            $openingHours = OpeningHours::create($array[0]);
            /*  dd($openingHours);  */
            
            if($openingHours->isOpenOn($value)){
                
                $newCompete = array('id'=> $restaurant->id);
                array_push($restaurantsOpen, $newCompete);
                /* dd($restaurantsOpen); */
                
            }
           
        }
        return $query->findMany($restaurantsOpen);
            // fix time 
            /* $query->where('reservations.time', '<', $value && 'reservations.time', '>', $value ); */
            /* $query->where('reservations.time', '', $value); */

            /* $date = $value;
            $carbon_date = Carbon::parse($date);

            return $query->where('openinghours', '>', Carbon::parse($date));

            $openingHours = ('restaurants')->with('openinghours')->get();
            dd($openingHours);
           
            
            $now = new DateTime('now');
            $range = $openingHours->currentOpenRange($now);

            dd($range); */
           /*  $query->where('reservations.time', '<' , $carbon_date && 'reservations.time', '>' , $carbon_date->addHours(2));  */
        
    }
}
/* class FiltersDateTime implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $openingHours = OpeningHours::create(json_decode($restaurant->opening_hours, true));
        return response(){
            ->json($openingHours->isOpenOn($day));
        }
    }
} */
class FiltersSearchRestaurant implements Filter
{
    
    public function __invoke(Builder $query, $value, string $property)
    {
        

            
            $query->whereHas('layouts.tables', function (Builder $query) use ($value) {
               
            $date = $value[0];
            $persons = $value[1];

            /* $restaurants = Restaurant::all();
             */
            $carbon_date = Carbon::parse($date);
            $carbon_justdate = Carbon::parse($date)->toDateString();
            $carbon_TimeLate = Carbon::parse($date)->addHours(2);
            $carbon_TimeEarly = Carbon::parse($date)->subHours(2);

               $restaurants = Restaurant::whereHas('layouts.tables')->with('tables')->where('layouts.tables.id',1)->get(); 
               
            
            $freeRestaurants = array();

               /*  $restaurants = $query->get();  */
                dd($restaurants);  
                    foreach($restaurants as $restaurant){
                        
                        $array = json_decode($restaurant->openinghours, true);
                        $openingHours = OpeningHours::create($array[0]);
                         dd($openingHours->isOpenAt(new DateTime($carbon_date))); 
                        if($openingHours->isOpenAt(new DateTime($carbon_date))){
                            /* dd($carbon_date); */
                            $reservations = Reservation::where('restaurant_id', $restaurant->id)->where('date', $carbon_justdate )->whereBetween('time', [$carbon_TimeEarly,$carbon_TimeLate])->where('persons',2)->get();
                            dd ($reservations); 

                            if(!$reservations->isEmpty()){
                                // reservations are for 2 people
                              
                                foreach($reservations as $reservation){
                                    // change to value of query
                                    
                                    if(count($reservations) < count()){
                                        /* $newCompete = array('id'=> $restaurant->id);
                                        // save all restaurants that are open
                                        array_push($freeRestaurants, $newCompete); */
                                    }
                                       
                                    
                                }
                                
        
                            }else{
                                /* $newCompete = array('id'=> $restaurant->id);
                                // save all restaurants that are open
                                array_push($freeRestaurants, $newCompete); */
                            } 
                        } 
                    

                
                }
                

            /* return $query->findMany($freeRestaurants); */
    });
}
} 
class FiltersDateTime implements Filter
{
    
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('reservations', function (Builder $query) use ($value) {

            // only shows restaurants waar geen reservaties tussen deze tijd

            $date = $value;
            $carbon_date = Carbon::parse($date);
            
            $hours = $carbon_date->addHours(2);
            $mytime = Carbon::now();
            $query->where('reservations.date_time','>', $mytime )->whereNotBetween('reservations.date_time', [$value,$hours]) ; 
            /* $query->whereNotBetween('reservations.date_time', [$carbon_date ,$carbon_date]); */
            /* $query->whereBetween('reservations.date_time', [$carbon_date, $carbon_date->addHours(2)]); */
            
            /*  $date = $value;
            $carbon_date = Carbon::parse($date);
            $from3 = $carbon_date;
            $to3 = $carbon_date->addHours(2); */
            /* dd($query->whereNotBetween('reservations.date_time', [$carbon_date, $carbon_date->addHours(2)])); */
            /*$query ->where('reservations.date_time', '>', $carbon_date->addHours(2)); */
            /* ->where('reservations.date_time', '=', $carbon_date); */
          /*   $query->whereNotBetween('reservations.date_time', [$carbon_date, $carbon_date->addHours(2)] /* && 'reservations.date_time' , '>' , $carbon_date->addHours(2));  */
         });
    }
} 
/* class FiltersPerson implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        
    }
} */
class FiltersAvailability implements Filter {

    public function __invoke(Builder $query, $value, string $property)
    {

        $query->whereHas('rooms', function (Builder $query) use ($value) {
        
           $query->where('active', 1);
        
        });


    } 
    
}
class FiltersPersons implements Filter{

    public function __invoke(Builder $query, $value, string $property)
    {
        // only show resto's where tables with 2 people

        // persons
        $query->whereHas('layouts', function (Builder $query) use ($value) {
            
            $query->where('layouts.pivot.tables.persons', '=', $value);
        });
       
    }
    
}
class FiltersRating implements Filter{

    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('ratings', function (Builder $query) use ($value) {
            $query->where('ratings.rating', '>=' , $value );
           
            
            
        });

    }
    
}


class RestaurantController extends Controller
{
   

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // allow includes van de querybuilder kan elke problemen oplossen
        $result = QueryBuilder::for(Restaurant::class)
        ->with('Category','Ratings', 'Price','Facilities')
        ->allowedFilters(['category.title','title','address','ratings.average_rating', 'price.title', AllowedFilter::custom('day', new FiltersDay),AllowedFilter::custom('date', new FiltersDate),AllowedFilter::custom('date_time', new FiltersDateTime),AllowedFilter::custom('rating', new FiltersRating),AllowedFilter::custom('time', new FiltersTime),AllowedFilter::custom('availability', new FiltersAvailability),'layouts.tables.persons','payments.title','facilities.title','reservations.time'])
        ->allowedSorts(['title','price_id'])
        ->paginate(10);
        return $result;
        /* return Restaurant::with('Category','Tables', 'Reservations')->get();; */
    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function random()
    {
        $restaurants = Restaurant::orderByRaw('RAND()')->take(2)->with('Category','Ratings','Price')->get();
        return RestaurantResource::collection($restaurants);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $this->validate($request, [
            'primary_img' => 'image|nullabke|max:1999'
        ]);

        if($request->hasFile('cover_image')){

            $filenameWithExt = $request->file('primary_img')->getOriginalName();

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getOriginalClientExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //upload
            $path = $request->file('primary_img')->storeAs('public/primary_imgs', $fileNameToStore);

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /* $restaurant = Restaurant::findOrfail($id);
        return $restaurant; */
        return Restaurant::with('Tables','Category','Reservations','Ratings','Comments','Favorites', 'Price','Facilities','Payments')->findOrFail($id);
    }
    
    public function filterReservation(Request $request)
    {
        
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
          
                $personreservations = Reservation::where('restaurant_id', $request->id)->where('date', $carbon_justdate )->whereBetween('time', [$carbon_TimeEarly,$carbon_TimeLate])->where('persons','=',$persons)->get();
                $alltables = array();
                if(!$personreservations->isEmpty()){
                    if($restaurant->rooms){
                    $mytime = Carbon::now();
                    $rooms = Room::where('restaurant_id','=',$restaurant->id)->where('active', true)->with('Layout')->with('Layout.Tables')->get();
                    if(!$rooms->isEmpty()){
                        $allRooms = array();
                                foreach($rooms as $room){
                                    $returnTables = array();
                                    $freetables = array();
                        
                                    $tables = Layout::find($room->layout->id)->tables()->get();
                                    $personstables = $tables->where('persons','=', $persons);
                                    
                                    /* return $rooms; */
                                    foreach ($personreservations as $reservation) {

                                        foreach ($personstables as $key => $pick) { // Note: $key represents the current element's key so the first one will be 0, second one will be 1, etc.
                                            // Do your comparison here
                                            if ($reservation->table_pivot_id == $pick->pivot->id && $reservation->table_id == $pick->id) {
                                                $personstables->forget($key);
                                            }
                                        }
                                    }

                                    foreach($personstables as $persontable){
                                        $freetable = Layout::find($room->layout->id)->tables()->wherePivot('id', $persontable->pivot->id)->get();
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
                    }else{
                        // no reservations
                        $rooms = Room::where('restaurant_id','=',$restaurant->id)->where('active', true)->with('Layout')->with('Layout.Tables')->get();
                        $returnTables = array();
                        
                        if(!$rooms->isEmpty()){
                            $allRooms = array();
                            foreach($rooms as $room){
                                    $tables = Layout::find($room->layout->id)->tables()->get();
                                    
                                    foreach($tables as $table){
                                            if($table->persons == $persons){
                                                $freetable = Layout::find($room->layout->id)->tables()->wherePivot('id', $table->pivot->id)->get();
                                                $newCompete = array($freetable);
                                                array_push($returnTables, $newCompete);
                                            }
                                            /* return $table; */
                                        
                                    }
                                    if(!$reservations->isEmpty()){
                                       
                                        $newCompete = array('freetables' => $returnTables, 'reservations' => $reservations);
                                        array_push($allRooms, $newCompete);
                                    }else{
                                        $newCompete = array('freetables' => $returnTables, 'reservations' => 'no reservations');
                                        array_push($allRooms, $newCompete);
                                       
                                    }   

                                    
                                }
                                return ['open','rooms' => $allRooms ];
                            }
                             
                            return ['closed', 'Dit restaurant is momenteel niet beschikbaar!'];
                    }
                
            /*  return $restaurant; */

            // geen reservaties
            } else {

                $rooms = Room::where('restaurant_id','=',$restaurant->id)->where('active',true) ->with('Layout')->with('Layout.Tables')->get();
                
                if( !$rooms->isEmpty() ){
                    $allRooms = array();
                    foreach($rooms as $room){
                        $freetables = array();
                        $tables = Layout::find($room->layout->id)->tables()->get();
                        foreach($tables as $table){
                            if($table->persons == $persons){
                                $freetable = Layout::find($room->layout->id)->tables()->wherePivot('id', $table->pivot->id)->get();
                                $newCompete = array($freetable);
                                array_push($freetables, $newCompete);
                            }
                            /* return $table; */
                            
                        }
                        $newCompete = array('freetables' => $freetables, 'reservations' => 'no reservations');
                            
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
    public function dashboard($id, Request $request)
    {
        $id = $request->id;
        
        
        $restaurant = Restaurant::findOrFail($id);

        $comments =  Restaurant::findOrFail($id)->comments()->paginate(5);
        $reservations = Restaurant::findOrFail($id)->reservations()->paginate(5);
        return ['restaurant' => $restaurant, 'comments' => $comments , 'reservations' => $reservations ];
    }
   
    public function daily($id,Request $request)
    {
        $date = $request->date;
        $reservations = Reservation::where('restaurant_id', $id)->where('date',$date)->get();
        return $reservations;
    }

    public function weekly($id,Request $request)
    {
        $date = $request->date;
        $dateweek =  Carbon::parse($date)->endOfWeek();
        $now =  Carbon::parse($date)->startofWeek();
        $reservations = Reservation::where('restaurant_id', $id)->whereBetween('date', [$now, $dateweek])->get();
        return $reservations;
    }
    public function monthly($id, Request $request)
    {
        $date = $request->date;
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();
        $reservations = Reservation::where('restaurant_id', $id)->whereBetween('date', [$start,$end])->get();
        return $reservations;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function uploadprimaryImg (Request $request, $id)
    {
        
        $request->validate([
        'primary_img'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]); 
        /* $validator = \Validator::make($request->all(), $request->rules());
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } */
      
        $restaurant = Restaurant::findOrFail($id);
           
        if($request->primary_img){
            Storage::delete("public/primary_imgs/". $restaurant->primary_img);
            $filename  = time() . '.' . $request->primary_img->getClientOriginalExtension();
            $path = $request->file('primary_img')->storeAs('public/primary_imgs', $filename);
            $restaurant->primary_img = $filename;
        
        }
        
        $restaurant->save();

        return $restaurant; 
        
    }
    public function uploadImages (Request $request, $id)
    {
        
        $request->validate([
        'menus'     =>  'image|mimes:jpeg,png,jpg,gif|max:2048', 
        'carousel' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]); 

        /* $validator = \Validator::make($request->all(), $request->rules());
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } */
      
        $restaurant = Restaurant::findOrFail($id);
         
   
        if($request->menus){
          
            if(strlen($restaurant->menus) > 4){
                $names = json_decode($restaurant->menus);
           
                $filename  = time() . '.' . $request->menus->getClientOriginalExtension();
                $path = $request->menus->storeAs('public/menus', $filename);
                $newName = array("src" => $filename);
                
                array_push($names, $newName);  
                
                $restaurant->menus = $names;
            }else{

                $filename  = time() . '.' . $request->menus->getClientOriginalExtension();
                $path = $request->menus->storeAs('public/menus', $filename);
                $names = [];
                
                $newName = array("src" => $filename);
                array_push($names, $newName);
                /* array_push($names, $newName); */
                
                $restaurant->menus = $names; 
            }
            $restaurant->save();

            return ['menus', $restaurant->menus];
        }
       
        if($request->carousel){
            if(strlen($restaurant->images) > 4){
                $names = json_decode($restaurant->images);
           
                $filename  = time() . '.' . $request->carousel->getClientOriginalExtension();
                $path = $request->carousel->storeAs('public/carousel', $filename);
                $newName = array("src" => $filename);
                
                array_push($names, $newName);  
                
                $restaurant->images = $names;
            }else{
               
                $filename  = time() . '.' . $request->carousel->getClientOriginalExtension();
                $path = $request->carousel->storeAs('public/carousel', $filename);
                $names = [];
                
                $newName = array("src" => $filename);
                
                array_push($names, $newName);
                
                $restaurant->images = $names; 
            }
           
        }
        $restaurant->save();

        return ['images' , $restaurant->images ];  
    }
    public function deleteImage (Request $request, $id)
    {
        
        $restaurant = Restaurant::findOrFail($id);
         
        
        if($request->menus)
        {
            $newMenus = array();
            $names = json_decode($restaurant->menus);
            foreach($names as $name){
                if($name->src !== $request->menus){
                    $keepMenu = $name;
                    array_push($newMenus, $keepMenu);
                }
            }
            
          $newArray = json_encode($names); 
         
            if(strlen($newArray) < 5){
               
                $restaurant->menus = [] ;
                
            }else{
                $restaurant->menus = $newMenus;
            }

           
            $restaurant->save();

            Storage::delete("public/menus/". $request->menus);

            return ['menus', $restaurant->menus];
          
        }
        
         
        if($request->images)
        {
            $newMenus = array();
            $names = json_decode($restaurant->images);
            foreach($names as $name){
                if($name->src !== $request->images){
                    $keepMenu = $name;
                    array_push($newMenus, $keepMenu);
                }
            }
            
          $newArray = json_encode($names); 
         
            if(strlen($newArray) < 5){
               
                $restaurant->images = [] ;
                
            }else{
                $restaurant->images = $newMenus;
            }

           
            $restaurant->save();

            Storage::delete("public/carousel/". $request->images);

            return ['images', $restaurant->images];
          
        }
        
    }
    public function update(Request $request)
    {
        
        $request->validate([
            'title'              =>  'required',
            'description'       => 'required',
            'address'       => 'required',
            'telephone'       => 'required',
            'contactemail' => 'required',
            'website' => 'required',
            'category'       => 'required',
            'price'       => 'required',
            'payments'       => 'required',
            'facilities'       => 'required',   
            'openinghours' => 'required',
        ]);     
        
        
       

        $restaurant = Restaurant::with('facilities')->with('payments')->with('category')->with('price')->findOrFail($request->id);
        
        /* $primary_img = $restaurant->primary_img; */

        /* return $request; */

        $restaurant->title = $request->title;
        $restaurant->description = $request->description;
       
        $restaurant->address = $request->address;
        $restaurant->telephone = $request->telephone;
        $restaurant->contactemail = $request->contactemail;
        $restaurant->website = $request->website;
        
        $restaurant->category_id = $request->category;
        $restaurant->price_id = $request->price;
        
        $restaurant->openinghours = $request->openinghours;
        //$restaurant->openinghours = $request->openinghours;
        $payments = $request->payments;
        $facilities = $request->facilities; 

       
        
        if($request->payments){
            $restaurant->payments()->detach();
            foreach ( $payments as $payment){
                $restaurant->payments()->attach($payment['id']);
            }
        }
        if($request->facilities){
            $restaurant->facilities()->detach();

            foreach ( $facilities as $facility){
                $restaurant->facilities()->attach($facility['id']);
            }   
        }
 
        
       
      
/* 
            if($request->primary_img){

                $filenameWithExt = $request->file('primary_img')->getOriginalName();

                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    
                $extension = $request->file('primary_img')->getOriginalClientExtension();
                // filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
    
                //upload
                $path = $request->file('primary_img')->storeAs('public/primary_imgs', $fileNameToStore);
            
            }  */

        

        $restaurant->save();

        return $restaurant;

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
    public function filter(){

            
    }
}
