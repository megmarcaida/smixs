<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{
    public function academic_year(){
    	return $this->hasMany('App\Academic_year');
    }

    public function country(){
    	return $this->hasMany('App\Country');
    }

    public function municipality(){
    	return $this->hasMany('App\Municipality');
    }

    public function region(){
    	return $this->hasMany('App\Region');
    }

    public function school_level(){
    	return $this->hasMany('App\School_level');
    }

    public function school_type(){
    	return $this->hasMany('App\School_type');
    }

    public function template(){
    	return $this->hasMany('App\Template');
    }
}
