<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $table = 'cities';

	protected $fillable = [
		'name',
		'country_id'
	]; 
    public function provinces()
    {
        return $this->hasMany('App\Province')->withTimestamps();
    }
    
}
