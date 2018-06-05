<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turisticcompany extends Model
{
	  protected $table = 'turistic_companies';

		protected $fillable = [
			'name_reasonsocial',
			'status',
			'history',
			'mision',
			'vision',
			'valores',
			'logo',
			'image_a',
			'image_b',
			'image_c',
			'observation',
			'siteweb',
			'service',
			'email',
			'whatsapp',
			'facebook'
		]; 

		public function users()
		{
				return $this->belongsToMany('App\User','user_turistic_companies','user_id','turistic_company_id')->withTimestamps();
			
		}

		public function turistictypes()
		{
				return $this->belongsToMany('App\Turistictypecompany','turistic_companies_turistic_type','turistic_company_id','turistic_type_id')->withTimestamps();
		}
		public function offices()
		{
				return $this->belongsToMany('App\Office');
		}
}
