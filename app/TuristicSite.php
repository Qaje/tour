<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TuristicSite extends Model
{
    
    public function provinces()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Province','turistic_sites_province','turistic_sites_id','province_id');
    }
}
