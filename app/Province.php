<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
    public function Turisticsites()
    {
    	return $this->belongsToMany('App\Turisticsite');
    }
}
