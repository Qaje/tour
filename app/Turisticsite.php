<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turisticsite extends Model
{
	//protected $table = 'Turistic_sites';

      protected $fillable = [
            'name_title',
            'summary',
            'description',
            'how_to_come',
            'recomendation',
            'turisticsite_photo',
            'long',
            'lat'
      ]; 

	public function provinces()
	{
			return $this->belongsToMany('App\Province','turistic_sites_province','turistic_sites_id','province_id')->withTimestamps();
		
	}
}
