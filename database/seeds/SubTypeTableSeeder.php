<?php

use Illuminate\Database\Seeder;

class SubTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '1',
            'description'   => 'Legado Arqueologico',
            'type_id'    	=> '1',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '2',
            'description'   => 'Asentamientos humanos',
            'type_id'    	=> '1',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '3',
            'description'   => 'Museos y salas de exposision',
            'type_id'    	=> '1',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '4',
            'description'   => 'Obras de Arte Representativo',
            'type_id'    	=> '1',
        ));

 		\DB::table('subtypes')->insert(array (
        	'id'    		=> '5',
            'description'   => 'Grupos Etnicos ',
            'type_id'    	=> '2',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '6',
            'description'   => 'Folklore Material Artesanias ',
            'type_id'    	=> '2',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '7',
            'description'   => 'Folklore espiritual mental ',
            'type_id'    	=> '2',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '8',
            'description'   => 'Folklore Social',
            'type_id'    	=> '2',
        ));

        \DB::table('subtypes')->insert(array (
        	'id'    		=> '9',
            'description'   => 'Explotaciones Mineras',
            'type_id'    	=> '3',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '10',
            'description'   => 'Explotaciones Agropecuarias ',
            'type_id'    	=> '3',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '11',
            'description'   => 'Explotaciones Industriales ',
            'type_id'    	=> '3',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '12',
            'description'   => 'Obras de ingenieria ',
            'type_id'    	=> '3',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '13',
            'description'   => 'Obras Arquitectonicos Actuales',
            'type_id'    	=> '3',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '14',
            'description'   => 'Centros cietificos y tecnicos ',
            'type_id'    	=> '3',
        ));

        \DB::table('subtypes')->insert(array (
        	'id'    		=> '15',
            'description'   => 'Artisticos ',
            'type_id'    	=> '4',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '16',
            'description'   => 'Deportivas  ',
            'type_id'    	=> '4',
        ));
        \DB::table('subtypes')->insert(array (
        	'id'    		=> '17',
            'description'   => 'Espectaculos, Congresos y otros',
            'type_id'    	=> '4',
        ));


                
    }
}
