<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    public function products(){
        return $this->belongsToMany('App/Product') ;
    }
}
