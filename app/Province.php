<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    class function turisticsites()
    {
    	return $this->belongsToMany('App\TuristicSite');
    }
}
