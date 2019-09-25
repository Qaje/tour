<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $table = 'municipalities';

    //protected $table = 'categories';

	protected $fillable = [
		'code',
		'name',
		'province_id'
	]; 
}
