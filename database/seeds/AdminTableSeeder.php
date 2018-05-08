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
        \DB::table('admins')->insert(array (
        	'name'		=> 'Boss',
        	'email'		=> 'boss@boss.com',
        	'job_title'	=> 'admin',
        	'password'	=> \Hash::make('secret'),
        ));
    }
}
