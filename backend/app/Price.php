<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $appends = [
        'total',
    ];
    public function restaurants()       {
        return $this->hasMany('App\Restaurant');
    } 
    public function getTotalAttribute(){
        return $this->restaurants()->count();
    }
}
