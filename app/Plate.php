<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    
    protected $table = 'plates';

    


    public function user(){

        return $this->belongsTo('App\User');

    }


    public function orders(){

        return $this->belongsToMany('App\Order', 'plate_order','plate_id' , 'order_id' );

    }

}
