<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
    public function turisticsites()
    {
    	return $this->belongsToMany('App\TuristicSite');
    }
}
