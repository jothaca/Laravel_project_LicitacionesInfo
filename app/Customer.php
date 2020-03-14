<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Action;


class Customer extends Model
{
    
     function user(){
        return $this->belongsTo('App\User');
    }


    
    public function countActions(){
        $count = Action::where('customer_id','=',$this->id)->count();

        return $count;
    }
     public function project(){
    	return $this->belongsTo('App\Project');
    }
}
