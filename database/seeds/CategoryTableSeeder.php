<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         \DB::table('categories')->insert(array (
            'id'          => '1',
         	'code'	      => 'PM',
         	'description' => 'Patrimonio Material',
         ));
         \DB::table('categories')->insert(array (
            'id'          => '2',
         	'code'	      => 'PI',
         	'description' => 'Patrimonio Inmaterial.',
         ));
         \DB::table('categories')->insert(array (
            'id'          => '3',
         	'code'	      => 'SI',
         	'description' => 'Sitios Interesantes',
         ));
        // \DB::table('categories')->insert(array (
        // 	'name'	      => 'Información',
        // 	'description' => 'Servicio de información, cuando se facilite información a los usuarios de servicios turísticos sobre los recursos turísticos, con o sin prestación de otros servicios complementarios.',
        // ));
        // \DB::table('categories')->insert(array (
        // 	'name'	      => 'Acogida de Eventos',
        // 	'description' => 'Servicio de acogida de eventos congresuales, convenciones o similares.',
        // ));
    }
}
