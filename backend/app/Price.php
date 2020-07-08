<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function restaurants()       {
        return $this->hasMany('App\Restaurant');
    } 
}
