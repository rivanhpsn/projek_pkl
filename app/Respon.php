<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $guarded = [];

    public function pelanggan(){
        return $this->hasMany('App\Pelanggan');
    }

    public function booking(){
        return $this->hasMany('App\Booking');
    }

    public function user(){
        return $this->hasMany('App\User');
    }
}
