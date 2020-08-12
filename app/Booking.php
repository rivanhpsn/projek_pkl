<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
    public function pelanggan() {
        return $this->belongsTo('App\Pelanggan');
    }
    public function respon() {
        return $this->belongsTo('App\Respon');
    }
}
