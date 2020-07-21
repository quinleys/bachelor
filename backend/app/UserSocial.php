<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocial extends Model
{
    protected $table = 'user_social';

    protected $fillable = [
        'user_id',
        'social_id',
        'service',
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id','user_id');
    }
}
