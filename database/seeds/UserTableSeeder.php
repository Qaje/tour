<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for ($i=0; $i < 10; $i++) { 
            \DB::table('users')->insert(array (
            	'name'	=> $faker->name,
                'email'	=> $faker->email,
                'photo' => $faker->name,
            	'password'	=> \Hash::make('123456'),
            ));
        }
    }
}
