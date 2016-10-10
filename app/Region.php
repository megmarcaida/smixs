<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function Settings(){
    	return $this->belongsTo('App\Settings');
    }
}
