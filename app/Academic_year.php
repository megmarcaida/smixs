<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic_year extends Model
{
     public function Settings(){
    	return $this->belongsTo('App\Settings');
    }
}
