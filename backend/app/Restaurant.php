<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\OpeningHours\OpeningHours;

use Illuminate\Support\Facades\Auth;


class Restaurant extends Model
{
    protected $appends = [
        'average_rating',
        'favorited',
        'rated',
        'reservation',
        'daily',
        'weekly',
        'monthly',
        'yearly',
        'fivestar',
        'fourstar',
        'threestar',
        'twostar',
        'onestar',
        'totalrating',
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function price() {
        return $this->belongsTo('App\Price');
    }

    public function reservations()       {
        return $this->hasMany('App\Reservation');
    } 

    public function rooms(){
        return $this->hasMany('App\Room');
    } 
    public function layouts(){
        return $this->hasMany('App\Layout')->with('tables');
    }

    public function tables()
    {
        return $this->belongsToMany('App\Table')->withPivot('x', 'y','height','width', 'id');
    }

    public function extras()
    {
        return $this->belongsToMany('App\Extra')->withPivot('x', 'y','height','width', 'id');
    }

    public function payments()
    {
        return $this->belongsToMany('App\Payment');
    }

    public function facilities()
    {
        return $this->belongsToMany('App\Facility');
    }
    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }
    public function getAverageRatingAttribute()
    {
        return round($this->ratings()->avg('rating'),1);
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function getFavoritedAttribute()
    {
        $user = auth()->guard('api')->user();
        if($user){
            $favorite = $this->favorites()->where('user_id',$user->id)->get();
            if (!$favorite->isEmpty()){
                return true;
            }
            return false; 

    }
}
public function getRatedAttribute()
{
    $user = auth()->guard('api')->user();
    if($user){
        $favorite = $this->ratings()->where('user_id',$user->id)->pluck('rating');
        if (!$favorite->isEmpty()){
            return $favorite;
        }
        return false;       
}
}
public function getFivestarAttribute()
{
    $fivestar = $this->ratings()->where('rating',5)->count();
    return $fivestar;
}
public function getFourstarAttribute()
{
    $fourstar = $this->ratings()->where('rating',4)->count();
    return $fourstar;
}
public function getThreestarAttribute()
{
    $threestar = $this->ratings()->where('rating',3)->count();
    return $threestar;
}
public function getTwostarAttribute()
{
    $twostar = $this->ratings()->where('rating',2)->count();
    return $twostar;
}
public function getOnestarAttribute()
{
    $onestar = $this->ratings()->where('rating',1)->count();
    return $onestar;
}
public function getTotalRatingAttribute()
{
    return $this->ratings()->count();
}

public function getReservationAttribute()
{
    $user = auth()->guard('api')->user();
    $date = Carbon::now();
    if($user){
        $reservation = $this->reservations()->where('user_id',$user->id)->where('date','<',Carbon::now())->orderBy('date_time','desc')->get();
        if (!$reservation->isEmpty()){
            return $reservation;
        }
        return false; 

}
}

public function getDailyAttribute()
{
    $now = Carbon::today();
    $yesterday = Carbon::today()->subDays(1);

    $reservations= $this->reservations()->where('date', $now)->count();
    $yesterday = $this->reservations()->where('date', $yesterday)->count();

    return ['today'=>$reservations, 'yesterday' => $yesterday];
}
public function getWeeklyAttribute()
{
    /* $user = auth()->guard('api')->user();
    
    $date = Carbon::now();
    if($user){ */
        // this week
        $date = Carbon::now()->endOfWeek();
        $now = Carbon::now()->startofWeek();

        // last week 
        $otherweek = Carbon::now()->startofWeek()->subDays(7);
        
        $reservations = $this->reservations()->whereBetween('date_time',[ $now, $date ])->count();

        $lastweek = $this->reservations()->whereBetween('date_time',[ $otherweek ,$now])->count();
        
        return ['week'=>$reservations, 'lastweek' => $lastweek];
    
}
public function getMonthlyAttribute()
{
    /* $user = auth()->guard('api')->user();
    
    $date = Carbon::now();
    if($user){ */
        
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();

        $month = Carbon::now()->startOfMonth()->subDays(30);

        $reservations = $this->reservations()->whereBetween('date_time',[$start, $end])->count();

        $lastMonth = $this->reservations()->whereBetween('date_time',[$month, $start])->count();
        
        return ['month' => $reservations, 'lastmonth' => $lastMonth];
    
}
public function getYearlyAttribute()
{
    /* $user = auth()->guard('api')->user();
    
    $date = Carbon::now();
    if($user){ */
        $start = Carbon::now()->startOfYear();
        $end = Carbon::now()->endOfYear();
        
        $reservations = $this->reservations()->whereBetween('date_time', [$start,$end])->count();
        return $reservations;
    
}

}
