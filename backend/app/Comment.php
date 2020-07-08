<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [
        'user_id', 'restaurant_id', 'comment',
    ];

    public function restaurant(){
        return $this->belongsTo('App\Restaurant');
    }
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
