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
            'id'                =>  '0101',
            'name'              => 'Oropeza',
            'geolocalization'   => 'data',
            'long'              => '-65.264841',
            'lat'               => '-18.877465',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0102',
            'name'              => 'Azurduy',
            'geolocalization'   => 'data',
            'long'              => '-64.294841',
            'lat'               => '-20.017465',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0103',
            'name'              => 'Zudañes',
            'geolocalization'   => 'data',
            'long'              => '-64.701705',
            'lat'               => '-19.117435',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0104',
            'name'              => 'Tomina',
            'geolocalization'   => 'data',
            'long'              => '-64.8731045',
            'lat'               => '-19.3733189',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0105',
            'name'              => 'Hernando Siles',
            'geolocalization'   => 'data',
            'long'              => '-64.4828799',
            'lat'               => '-20.2721156',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0106',
            'name'              => 'Yamparaez',
            'geolocalization'   => 'data',
            'long'              => '-88.9749226',
            'lat'               => '-15.81051',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0107',
            'name'              => 'Nor Cinti',
            'geolocalization'   => 'data',
            'long'              => '-65.3949534',
            'lat'               => '-20.2413817',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0108',
            'name'              => 'Belisario Boeto',
            'geolocalization'   => 'data',
            'long'              => '-64.5610376',
            'lat'               => '-18.9001507',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0109',
            'name'              => 'Sud Cinti',
            'geolocalization'   => 'data',
            'long'              => '-65.372164',
            'lat'               => '-21.0061235',
            'city_id'           => '1', 
        ));
        \DB::table('provinces')->insert(array (
            'id'                =>  '0110',
            'name'              => 'Luis Calvo',
            'geolocalization'   => 'data',
            'long'              => '-64.239895',
            'lat'               => '-20.0140927', 
            'city_id'           => '1', 
        ));


       
    }
}
