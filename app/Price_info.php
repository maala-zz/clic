<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price_info extends Model
{
    public function product(){
        /**
         * get parent product to this group
         * makes Assessing and code more easier to write in the future !
         */
        return $this->belongsTo('App\Product');
    }
}
