<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Province extends Model
{
    protected $table = 'provinces';

    protected $fillable = [
        'name', 'code','city_id'
    ]; 

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
   
    public function Turisticsites()
    {
    	//return $this->belongsToMany('App\Turisticsite')->withTimestamps();
        return $this->belongsToMany('App\Turisticsite','turistic_sites_province','turistic_sites_id','province_id')->withTimestamps();

    }
    public function city()
    {
        return $this->belongsTo('App\City')->withTimestamps();;
    }
}
