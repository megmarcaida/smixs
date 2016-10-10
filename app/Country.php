<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Settings(){
    	return $this->belongsTo('App\Settings');
    }
}
