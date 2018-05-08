<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('provinces')->insert(array (
        	'name'			=> 'Provincia de Aroma',
        	//'description'	=> 'Es una provincia maravilla ...',
            'geolocalization'   => 'data',
        	'long'				=> '-67.66622310000002',
        	'lat'				=> '-17.3966503',
        	'city_id'			=> '2',
        ));
        \DB::table('provinces')->insert(array (
        	'name'			=> 'Sica Sica',
        	//'description'	=> 'Es una provincia maravilla ...',
            'geolocalization'   => 'data',
        	'long'				=> '-67.66622310000002',
        	'lat'				=> '-17.3966503',
        	'city_id'			=> '2',
        ));
        \DB::table('provinces')->insert(array (
        	'name'			=> 'Provincia de Bautista Saavedra',
        	//'description'	=> 'provincia Blanca ...',
            'geolocalization'   => 'data',
        	'long'				=> '-67.66622310000002',
        	'lat'				=> '-17.3966503',
        	'city_id'			=> '2',
        ));
         \DB::table('provinces')->insert(array (
        	'name'			=> 'Provincia de Abel Iturralde',
        	//'description'	=> 'provincia Blanca ...',
            'geolocalization'   => 'data',
        	'long'				=> '-67.66622310000002',
        	'lat'				=> '-17.3966503',
        	'city_id'			=> '2',
        ));

       
    }
}
