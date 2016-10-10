<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    public function Settings(){
    	return $this->belongsTo('App\Settings');
    }
}
