<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Layout extends Model
{
    public function tables()
    {
        return $this->belongsToMany('App\Table')->withPivot('x', 'y','height','width', 'id');
    }
    public function room(){
        return $this->hasOne('App\Room');
    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    } 
    public function user(){
        return $this->belongsTo('App\User');
    }
    

}
