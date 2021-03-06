<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //Model::unguard();

        //admin
        $this->call('AdminTableSeeder');
        //users 10
        $this->call('UserTableSeeder');
        $this->call('CountryTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('CityTableSeeder'); 
        $this->call('ProvinceTableSeeder');
        $this->call('MunicipalityTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('AmbitTableSeeder');
        $this->call('SubambitTableSeeder');
        $this->call('TypeTableSeeder');
        $this->call('SubTypeTableSeeder');
        /*
        $this->call('TuristictypeTableSeeder');
        */
    }
}
