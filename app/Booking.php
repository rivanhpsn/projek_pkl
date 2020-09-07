<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User','user_id','id');
    }
    public function pelanggan() {
        return $this->belongsTo('App\Pelanggan','pelanggan_id','id');
    }
    public function respon() {
        return $this->belongsTo('App\Respon','respon_id','id');
    }
    public function category() {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
