<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = 'permissions';

	protected $fillable = [
		'name',
		'description'
	]; 
    public function roles()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Role','permission_role','role_id','permission_id')->withTimestamps();
    }
}
