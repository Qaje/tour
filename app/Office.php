<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $table = 'offices';

		protected $fillable = [
			'nominal',
			'direccion',
			'description',
			'office_photo',
			'contact',
			'long',
			'lat',
			'fono',
			'celular'
		]; 
/*
		public function users()
		{
				return $this->belongsToMany('App\User','user_turistic_companies','user_id','turistic_company_id')->withTimestamps();
			
		}
		*/

		public function turisticcompanies()
		{
				return $this->belongsToMany('App\Turisticcompany');
		}
}
