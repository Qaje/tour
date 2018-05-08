<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
        	'name'		=> 'Boss',
        	'email'		=> 'boss@boos.com',
        	'job_title'	=> 'administrador',
        	'password'	=> \Hash::make'secret',
        ));
    }
}
