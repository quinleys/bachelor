<?php

namespace App\Http\Controllers\api\v1\restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Restaurant;
use App\Category;
use App\Http\Resources\Restaurant as RestaurantResource;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;

class FiltersDate implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('reservations', function (Builder $query) use ($value) {
            $query->where('reservations.date', '!=', $value);
        });
    }
}
class FiltersTime implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('reservations', function (Builder $query) use ($value) {
            // fix time 
            $query->where('reservations.time', '!=', $value);
            /* $query->whereNotBetween('reservations.time', $value , $value); */
        });
    }
}
/* class FiltersPerson implements Filter
{
    public function __invoke(Builder $query, $value, string $property)
    {
        
    }
} */

class FiltersPersons implements Filter{

    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('tables', function (Builder $query) use ($value) {
            $query->where('tables.persons', '=', $value);
        });
        $query->whereHas('reservations', function (Builder $query) use ($value) {
            
            $query->where('reservations.persons', '!=', $value);
        });
    }
    
}
class FiltersRating implements Filter{

    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('ratings', function (Builder $query) use ($value) {
            $query->where('ratings.rating', '>=', $value);
        });

    }
    
}
class FiltersPrice implements Filter{

    public function __invoke(Builder $query, $value, string $property)
    {
        $query->whereHas('price', function (Builder $query) use ($value) {
            $query->where('price', '<=', $value);
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
        $result = QueryBuilder::for(Restaurant::class)
        ->allowedFilters(['title','address','category.title', AllowedFilter::custom('date', new FiltersDate),AllowedFilter::custom('rating', new FiltersRating),AllowedFilter::custom('time', new FiltersTime),AllowedFilter::custom('persons', new FiltersPersons),AllowedFilter::custom('price', new FiltersPrice) ,'tables.peoples','payments.id','facilities.id','reservations.time'])
        ->allowedSorts(['title','price_id'])
        ->with('Category','Tables','Reservations','Ratings', 'Comments', 'Favorites', 'Price', 'Facilities','Payments')
        ->paginate(9);
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
        $restaurants = Restaurant::orderByRaw('RAND()')->take(2)->with('Category','Tables','Reservations', 'Price')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Restaurant::with('Tables','Category','Reservations','Ratings','Comments','Favorites', 'Price','Facilities','Payments')->find($id);
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
    public function filter(){

            
    }
}
