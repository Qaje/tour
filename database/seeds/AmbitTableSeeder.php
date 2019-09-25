<?php

use Illuminate\Database\Seeder;

class AmbitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('ambits')->insert(array (
            'id'                => '1',
            'name'              => 'Mueble',
            'code'              =>  '01',
            'category_id'       => '1', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '2',
            'name'              => 'Inmueble',
            'code'              =>  '02',
            'category_id'       => '1', 
        ));

        \DB::table('ambits')->insert(array (
            'id'                => '3',
            'name'              => 'Conocimiento y Saberes relacionados con la sociedad, naturaleza y universo',
            'code'              =>  '01',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '4',
            'name'              => 'Tradiciones y expresiones orales',
            'code'              =>  '02',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '5',
            'name'              => 'Artes escénicas y prácticas sociales',
            'code'              =>  '03',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '6',
            'name'              => 'Formas tradicionales de organización socio cultural',
            'code'              =>  '04',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '7',
            'name'              => 'Espiritualidad, ritualidad y actos festivos.',
            'code'              =>  '05',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '8',
            'name'              => 'Música y Danza.',
            'code'              =>  '06',
            'category_id'       => '2', 
        ));
        \DB::table('ambits')->insert(array (
            'id'                => '9',
            'name'              => 'Formas de hacer y técnicas tradicionales',
            'code'              =>  '07',
            'category_id'       => '2', 
        ));
        
    }
}
