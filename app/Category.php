<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

	protected $fillable = [
		'name',
		'description'
	]; 
    public function Turistictypes()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Turistictype')->withTimestamps();
    }
}
