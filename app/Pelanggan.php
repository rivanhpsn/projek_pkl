<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table="pelanggan";

    protected $guarded = [];

    public function respon() {
        return $this->belongsTo('App\Respon','respon_id','id');
    }
    public function category() {
        return $this->belongsTo('App\Category','category_id','id');
    }
    public function booking(){
        return $this->hasMany('App\Booking','pelanggan_id');
    }

}
