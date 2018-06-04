<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turistictypecompany extends Model
{
    protected $table = 'turistic_type_companies';

	protected $fillable = [
		'name',
		'description',
		'service_type',
        'slug'
	]; 
    public function categories()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    return $this->belongsToMany('App\Category','categories_turistic_type_companies','turistic_type_company_id','category_id')->withTimestamps();
    }
    public function turisticcompanies()
    {
        return $this->belongsToMany('App\Turisticcompany');
    }
    
}
