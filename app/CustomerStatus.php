<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerStatus extends Model
{
    function customer(){
    	return $this->belongsTo('App\Customer');
    }

}
