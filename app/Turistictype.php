<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turistictype extends Model
{
    protected $table = 'turistic_types_companies';

	protected $fillable = [
		'name',
		'description'
		'service_type'
	]; 
    public function categories()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Category','categories_turistic_type_companies','category_id','turistic_type_company_id')->withTimestamps();
    }
}
