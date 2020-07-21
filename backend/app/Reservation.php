<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Spatie\QueryBuilder\QueryBuilder;
use Spatie\QueryBuilder\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\OpeningHours\OpeningHours;

class Reservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'restaurant_id', 'date', 'time', 'date_time','persons', 'table_id'
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    

/*     public function table()
    {
        return $this->belongsTo('App\Table');
    } */
}
