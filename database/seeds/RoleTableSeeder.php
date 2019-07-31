<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('roles')->insert(array (
        	'name'			=> 'Administrador',
        	'description'	=> 'Administrador del Sitio',
        	'status'		=>  1,
        ));
        \DB::table('roles')->insert(array (
        	'name'			=> 'Declarador',
        	'description'	=> 'Declarador de Patrimonio',
        	'status'		=>  1,
        ));
        
    }
}
