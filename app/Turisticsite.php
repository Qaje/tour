<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turisticsite extends Model
{
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
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
		return $this->belongsToMany('App\Province','turistic_sites_province','province_id','turisticsites_id');
	}
}
