<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function agency() {
        return $this->belongsTo('App\Models\Agency');
    }

    public function madinahHotel() {
        return $this->hasOne('App\Models\Madhotel');
    }

    public function makkahHotel() {
        return $this->hasOne('App\Models\Makhotel');
    }
}
