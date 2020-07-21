<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant');
    }

    public function rooms()
    {
        return $this->belongsToMany('App\Room');
    }
}
