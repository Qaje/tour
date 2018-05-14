<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
    public function users()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\User')->withTimestamps();
    }

    /**
     * Role belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permits()
    {
    	// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
    	return $this->belongsToMany('App\Permission');
    }
}
