<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    public function product(){
        return $ths->belongsTo('App\Product') ;
    }
}
