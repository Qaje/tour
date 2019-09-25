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
            'name'          => 'Chuquisaca',
            'country_id'    => '1',
        ));
        
        \DB::table('cities')->insert(array (
        	'name'			=> 'La Paz',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Cochabamba',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Oruro',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Potosi',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
            'name'          => 'Tarija',
            'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Santa Cruz',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Beni',
        	'country_id'    => '1',
        ));
        \DB::table('cities')->insert(array (
        	'name'			=> 'Pando',
        	'country_id'    => '1',
        ));
        
    }
}
