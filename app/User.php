<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User belongs to .
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roles()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)

        return $this->belongsToMany('App\Role','role_user','user_id','role_id')->withTimestamps(); //role_user
    }
    public function events()
    {
        // belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)

        return $this->belongsToMany('App\Event','events_user','users_id','events_id')->withTimestamps(); //role_user
    }
}
