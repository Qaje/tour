<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turisticsite extends Model
{
    
    public function provinces()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Province','turistic_sites_province','province_id','turisticsites_id');
    }
}
