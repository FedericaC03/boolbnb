<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    public function houses(){

        return $this->belongsToMany('App\House');
    }
}
