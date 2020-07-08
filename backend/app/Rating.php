<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'restaurant_id', 'rating',
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
