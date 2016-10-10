<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School_level extends Model
{
    public function Settings(){
    	return $this->belongsTo('App\Settings');
    }
}
