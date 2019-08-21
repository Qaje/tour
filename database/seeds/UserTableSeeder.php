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
                'last_name'  => $faker->name,
                'email'	=> $faker->email,
                'job_title' => $faker->name,
                'ident_card' => $faker->PhoneNumber,
                'born_in' =>'La Paz',
                'date_born'=> $faker->dateTime,
                'avatar' => 'default.jpg',
            	'password'	=> \Hash::make('123456'),
                'code' => 'asd',
                'activate' => 0,
                'role_id' => $faker->numberBetween(1,2) 
            ));
        }
        
    }
}
