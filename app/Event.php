<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $table = 'events';

	protected $fillable = [
		'begins_date',
		'begins_time',
		'ends_date',
		'ends_time', 
		'title',
		'name',
		'how_to_come', 
		'recomendation', 
		'geolocalization_photo',
		'long',
		'lat',
		'photorgrafic',
		'author',
		'all_day',
		'color'
	]; 


	public function users()
	{
		return $this->belongsToMany('App\User')->withTimestamps();
	}
}	
