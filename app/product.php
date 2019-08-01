<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function reviews(){
    	return $this->hasMany('App\review');
    	 //return $this->hasManyThrough('App\product', 'App\review');
        // 'App\product',
        // 'country_id', // Foreign key on users table...
        // 'user_id', // Foreign key on posts table...
        // 'id', // Local key on countries table...
        // 'id' // Local key on users table...
    }
}
