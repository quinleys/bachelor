<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant');
    }
    public function layouts()
    {
        return $this->belongsToMany('App\Layout')->withPivot('x', 'y','height','width', 'id');
    }
     public function reservations()
    {
        return $this->belongsToMany('App\Reservation');
    } 
}
