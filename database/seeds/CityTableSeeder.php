<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cities')->insert(array (
        	'name'			=> 'La Paz',
        	'description'	=> 'Es una ciudad maravilla ...',
            'geolocalization'   => 'data',
        	'long'				=> '-68.11929359999999',
        	'lat'				=> '-16.489689',
        	'country_id'				=> '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Cochambamba',
        	'description'	=> 'Es una ciudad maravilla ...',
            'geolocalization'   => 'data',
        	'long'				=> '-68.11929359999999',
        	'lat'				=> '-16.489689',
        	'country_id'				=> '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Sucre',
        	'description'	=> 'Ciudad Blanca ...',
            'geolocalization'   => 'data',
        	'long'				=> '-68.11929359999999',
        	'lat'				=> '-16.489689',
        	'country_id'				=> '1',
        ));
         \DB::table('cities')->insert(array (
        	'name'			=> 'Santa Cruz',
        	'description'	=> 'Ciudad Blanca ...',
            'geolocalization'   => 'data',
        	'long'				=> '-68.11929359999999',
        	'lat'				=> '-16.489689',
        	'country_id'				=> '1',
        ));
    }
}
