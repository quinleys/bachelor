<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $appends = [
        'total',
    ];
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant');
    }
    public function getTotalAttribute(){
        return $this->restaurants()->count();
    }
    
}
