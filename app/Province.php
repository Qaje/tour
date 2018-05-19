<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'name', 'geolocalization', 'long','lat','city_id'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    public function Turisticsites()
    {
    	return $this->belongsToMany('App\Turisticsite')->withTimestamps();;
    }
    public function city()
    {
        return $this->belongsTo('App\City')->withTimestamps();;
    }
}
