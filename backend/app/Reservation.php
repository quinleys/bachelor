<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'restaurant_id', 'date', 'time', 'persons', 'table_id'
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function table()
    {
        return $this->belongsTo('App\Table');
    }
}
