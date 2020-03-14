<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
    
    public function type(){
        return $this->belongsTo('App\ActionType');
    }

    public function customer(){
        return $this->belongsTo('App\Customer','id_client','id');
    }
    

    

}
