<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $casts = [
        'walls' => 'array'
    ];
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    } 
    
    public function layout(){
        return $this->belongsTo('App\Layout');
    }

    public function extras()
    {
        return $this->belongsToMany('App\Extra')->withPivot('x', 'y','height','width', 'id');
    }

}
