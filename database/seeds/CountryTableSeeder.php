<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('countries')->insert(array (
        	'name'				=> 'Bolivia',
        	'geolocalization'	=> 'data',
        	'long'				=> '-63.58865300000002',
        	'lat'				=> '-16.290154',
        ));
    }
}
