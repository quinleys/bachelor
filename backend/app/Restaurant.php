<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function price() {
        return $this->belongsTo('App\Price');
    }

    public function reservations()       {
        return $this->hasMany('App\Reservation');
    } 
    
    public function tables()
    {
        return $this->belongsToMany('App\Table')->withPivot('x', 'y','height','width', 'id');
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

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }
}
