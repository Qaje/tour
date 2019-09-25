<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		\DB::table('types')->insert(array (
            'id'    		=> '1',
            'description'   => 'Patrimonio Urbano, Arquitetonico y Artístico, museos y Manifestaciones Culturales',
        ));
        \DB::table('types')->insert(array (
            'id'    		=> '2',
            'description'   => 'Etnografia y folklore',
        ));
        \DB::table('types')->insert(array (
            'id'    		=> '3',
            'description'   => 'Realizaciones Tecnicas Cientificas',
        ));
        \DB::table('types')->insert(array (
            'id'    		=> '4',
            'description'   => 'Acontecimientos Programados',
        ));
        
    }
}
