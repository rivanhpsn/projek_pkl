<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function pelanggan(){
        return $this->hasMany('App\Pelanggan','pelanggan_id');
    }
    public function booking(){
        return $this->hasMany('App\Booking','booking_id');
    }
    public function user(){
        return $this->hasMany('App\User');
    }
}
