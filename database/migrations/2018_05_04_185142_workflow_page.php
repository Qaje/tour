<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkflowPage extends Migration
{
    public function up()
    {   
        Schema::create('patrimonial_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codemat',17);
            $table->string('code_photo',20);
            $table->string('name_title',50);
            $table->string('category');
            $table->string('scope');//ambito
            $table->string('subscope');//subambito
            $table->string('description_patrimonial', 500);
            $table->string('patrimonial_photo')->default('patrimonialdefault.jpeg');
            $table->string('description_photo',50);
            $table->datetime('date_take_photo');
            $table->string('photographer',30);
            $table->string('location');
            $table->string('dating',200);
            $table->json('history_in_charge'); //5 de 6 

            $table->string('department');
            $table->string('province');
            $table->string('municipality');
            $table->string('direction', 30);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->decimal('alt', 20,10);
            $table->string('zone',200);

            $table->string('conservation')->nullable();
            $table->string('natural_geologico')->nullable();
            $table->string('natural_hidrico')->nullable();
            $table->string('natural_eolico')->nullable();
            $table->string('natural_natural_otros')->nullable();
            $table->string('deteriorate_urbano')->nullable();
            $table->string('deteriorate_agricola')->nullable();
            $table->string('deteriorate_saq_van')->nullable();
            $table->string('deteriorate_inf_civ')->nullable();
            $table->string('deteriorate_turismo')->nullable();
            $table->string('deteriorate_antropico_otros')->nullable();
            $table->string('property_pub_com')->nullable();
            $table->string('property_religious')->nullable();
            $table->string('property_collective')->nullable();
            $table->string('property_individual')->nullable();
            $table->string('public_state')->nullable();
            $table->string('joint_responsability')->nullable();
            //$table->json('custody_name');//de 8 de 1
            $table->string('turistic')->nullable();
            $table->string('educational_unit')->nullable();
            $table->string('none')->nullable();
            $table->string('housing')->nullable();
            $table->string('religous')->nullable();
            $table->string('commerce')->nullable();
            $table->string('museum')->nullable();
            $table->string('other')->nullable();
            $table->json('owner'); //1 a 8 
            //IV INFORMATION TURISTIC
            $table->string('turistic_type');
            $table->string('turistic_sub_type');
            $table->string('api');
            $table->string('aepi');
            $table->string('hierarchy');//jerarquia
            $table->string('capacity');
            $table->string('objetics_factor');
            $table->string('touristic_perception');
            $table->string('ctr_turnamer');
            $table->string('ctr_turnamerfoto');
            $table->string('ctr_turnbmeb');
            $table->string('ctr_turnbmebfoto');
            $table->string('ctr_turncmeb');
            $table->string('ctr_turncmebfoto');

            //V CONDITION LEGAL
            $table->string('recognized');
            $table->json('law'); //1 a 8
            //-->laws condition
            //VI OBSERVACIONES
            $table->string('observation',200);

            //VII FUENTE BIBLIOGRAFICA
            $table->string('source',100);//fuente
            $table->string('degree_of_reliability'); 
            //VII CONTROL DATA
            $table->string('research_entity');
            $table->json('historychange');
            //$table->boolean('edit_boolean');
            //$table->string('summary');

            //$table->string('avatar')->default('default.jpg');//extension jpg,png
            //$table->string('photografic', 100);
            // $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('approvers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reg_name');
            $table->datetime('reg_date_control');
            $table->string('rev_name');
            $table->datetime('rev_date_control');
            $table->string('apro_name');
            $table->datetime('apro_date_control');
            $table->integer('code_app');//REGISTER=1,REVIEW=2,APROBE=3  
            $table->timestamps();
        });
        Schema::create('patrimonial_site_approvers',function(Blueprint $table){
            $table->increments('id');
            $table->integer('approver_id')->unsigned();
            $table->integer('pat_site_id')->unsigned();
            $table->foreign('approver_id')->references('id')->on('approvers')->onDelete('cascade');
            $table->foreign('pat_site_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();
        }); 

        Schema::create('type_of_laws', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nivel');
            $table->string('number');
            $table->datetime('date_law');
            $table->string('declaration_title');  
            $table->timestamps();
        });
        Schema::create('patrimonial_site_type_of_laws',function(Blueprint $table){
            $table->increments('id');
            $table->integer('type_law_id')->unsigned();
            $table->integer('pat_site_id')->unsigned();
            $table->foreign('type_law_id')->references('id')->on('type_of_laws')->onDelete('cascade');
            $table->foreign('pat_site_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();
        });    

        Schema::create('personal_consignments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->datetime('registred');  
            $table->timestamps();
        });
        Schema::create('patrimonial_site_personal_consigments',function(Blueprint $table){
            $table->increments('id');
            $table->integer('per_cons_id')->unsigned();
            $table->integer('pat_site_id')->unsigned();
            $table->foreign('per_cons_id')->references('id')->on('personal_consignments')->onDelete('cascade');
            $table->foreign('pat_site_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();
        });    

        Schema::create('types',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('subtypes',function(Blueprint $table){
            $table->increments('id');
            $table->string('description')->unique();
            $table->integer('type_id')->unsigned();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->timestamps();
        });
        //persona encargado
        Schema::create('wealth_managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sur_name')->nullable();
            $table->string('last_name');
            $table->string('organization');
            $table->json('phone');
            $table->datetime('born_in');  
            $table->timestamps();
        });
        Schema::create('patrimonial_site_wealth_managers',function(Blueprint $table){
            $table->increments('id');
            $table->integer('wea_man_id')->unsigned();
            $table->integer('pat_site_id')->unsigned();
            $table->foreign('wea_man_id')->references('id')->on('wealth_managers')->onDelete('cascade');
            $table->foreign('pat_site_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();
        });        

        Schema::create('scopes',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('scope',100);
            $table->timestamps();
        });
        Schema::create('subscopes',function(Blueprint $table){
            $table->increments('id');
            $table->string('subscope',100)->unique();
            $table->integer('scope_id')->unsigned();
            $table->foreign('scope_id')->references('id')->on('scopes')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('roles',function(Blueprint $table){
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description',500);
            $table->boolean('status');
            $table->timestamps();
        });
        
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');      
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('permissions',function(Blueprint $table){
            $table->increments('id')->unique();
            $table->string('name',100);
            $table->string('description',500);
            $table->timestamps();
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('role_id')->unsigned();
            $table->integer('permission_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->timestamps();
        });

       
        Schema::create('countries',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->string('geolocalization',200);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->timestamps();
        });
        Schema::create('cities',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100)->unique();
            /*$table->string('description',500);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);*/
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('provinces',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->integer('code')->default('0');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            //$table->primary(['id','NAM']);
            $table->timestamps();
        });

        Schema::create('cities_provinces', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('cities_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities')->onDelete('cascade');      
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('municipalities',function(Blueprint $table){
            $table->increments('id');
            $table->integer('code');
            $table->string('name',100);
            $table->integer('province_id')->unsigned();
            //$table->foreign('province_id')->references('id')->on('provinces');
            $table->timestamps();
        });

        Schema::create('province_municipalities', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('province_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');      
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('patrimonial_sites_municipality', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patrimonial_sites_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->foreign('municipality_id')->references('id')->on('municipalities')->onDelete('cascade');
            $table->foreign('patrimonial_sites_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();      
        });

         Schema::create('categories',function(Blueprint $table){
            $table->increments('id');
            $table->string('code', 10)/*->primary()*/;
            $table->string('description',500);
            $table->timestamps();
        });

        Schema::create('ambits',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',100);
            $table->integer('code');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });


        Schema::create('subambits',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',300);
            $table->integer('code');
            $table->integer('ambit_id')->unsigned();
            $table->foreign('ambit_id')->references('id')->on('ambits');
            $table->timestamps();
        });

        Schema::create('ambit_subambit', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ambit_id')->unsigned();
            $table->integer('subambit_id')->unsigned();
            $table->foreign('ambit_id')->references('id')->on('ambits');      
            $table->foreign('subambit_id')->references('id')->on('subambits');
            $table->timestamps();
        });


        Schema::create('subambits_patrimonial_sites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subambit_id')->unsigned();
            $table->integer('patrimonial_sites_id')->unsigned();
            $table->foreign('subambit_id')->references('id')->on('subambits');      
            $table->foreign('patrimonial_sites_id')->references('id')->on('patrimonial_sites');
            $table->timestamps();
        });

        /*Schema::create('patrimonial_sites',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',200);
            $table->string('description',500);
            $table->string('service_type',40);
            $table->string('slug')->unique();
            //$table->timestamps();
        });
        */
        /*
        Schema::create('turistic_companies',function(Blueprint $table){
            $table->increments('id');
            $table->string('name_reasonsocial',200);
            //$table->string('nit',100);
            $table->boolean('status');
            $table->string('history');
            $table->string('mision');
            $table->string('vision');
            $table->string('valores');
            $table->string('logo');
            $table->string('image_a');
            $table->string('image_b');
            $table->string('image_c');
            $table->string('observation',500);
            $table->string('siteweb',200);
            $table->string('service',500);
            $table->string('email')->unique();
            $table->string('whattsapp');
            $table->string('facebook');
            $table->timestamps();
        });

        Schema::create('user_turistic_companies', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');      
            $table->integer('tur_comp_id')->unsigned();
            $table->foreign('tur_comp_id')->references('id')->on('turistic_companies')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('offices',function(Blueprint $table){
            $table->increments('id');
            $table->string('nominal',200);
            $table->string('direccion',200);
            $table->string('description',500);
            $table->string('office_photo',100);
            $table->string('contact',200);
            //$table->string('geolocalization',100);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->timestamps();   
        });
        Schema::create('turistic_company_offices', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('turistic_company_id')->unsigned();
            $table->integer('office_id')->unsigned();
            $table->foreign('turistic_company_id')->references('id')->on('turistic_companies')->onDelete('cascade');      
            $table->foreign('office_id')->references('id')->on('offices')->onDelete('cascade');
            $table->timestamps();
        });
        //Schema::create('turistic_companies_turistic_type', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('turistic_company_id')->unsigned();
            $table->foreign('turistic_company_id')->references('id')->on('turistic_companies')->onDelete('cascade');      
            $table->integer('turistic_type_id')->unsigned();
            $table->foreign('turistic_type_id')->references('id')->on('patrimonial_sites')->onDelete('cascade');
            $table->timestamps();
        });
        */

        /*
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->date('begins_date');
            $table->time('begins_time');
            $table->date('ends_date');
            $table->time('ends_time');
            $table->string('title',150);
            $table->string('name', 500);
            $table->string('how_to_come', 100); 
            $table->string('recomendation', 100);
            $table->string('geolocalization_photo', 100);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->string('photorgrafic', 100);
            $table->string('author', 100);
            $table->boolean('all_day');
            $table->string('color');
            $table->timestamps();
        });
        Schema::create('events_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('events_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('events_id')->references('id')->on('events')->onDelete('cascade');      
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->date('publication_date');
            $table->string('title',150);
            $table->string('content', 500);
            $table->string('how_to_come', 100); 
            $table->string('recomendation', 100);
            $table->string('geolocalization', 100);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->string('photorgrafic', 100);
            $table->string('author', 100);
            $table->boolean('status');
            $table->timestamps();
        });
        Schema::create('news_user', function (Blueprint $table) {
            $table->integer('news_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('news_id')
                  ->references('id')
                  ->on('news')
                  ->onDelete('cascade');      
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->primary(['news_id','users_id']);
            $table->timestamps();
        });
        Schema::create('announcements', function (Blueprint $table) {
            $table->increments('id');
            $table->date('publication_date');
            $table->string('title',150);
            $table->string('content', 500);
            $table->string('how_to_come', 100); //hospedae
            $table->string('recomendation', 100);
            $table->string('geolocalization_photo', 100);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->string('photorgrafic', 100);
            $table->timestamps();
        });
        Schema::create('announcements_user', function (Blueprint $table) {
            $table->integer('announcements_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->foreign('announcements_id')
                  ->references('id')
                  ->on('announcements')
                  ->onDelete('cascade');      
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
            $table->primary(['announcements_id','users_id']);
            $table->timestamps();
        });
        Schema::create('touristic_guides',function(Blueprint $table){
            $table->increments('id');
            $table->string('name',200);
            $table->string('direccion',200);
            $table->string('contact',20);
            $table->string('email_siteweb',40);
            $table->string('city', 100);
            $table->string('province', 100);
            $table->string('geolocalization_photo',100);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->integer('votes');
            $table->timestamps();
            });
        Schema::create('visitors',function(Blueprint $table){

                $table->increments('id');
                $table->string('nationaliy',200);
                $table->string('reside',100);
                $table->string('last_name',200);
                $table->string('first_name',100);
                $table->string('email',200)->unique();
                $table->boolean('status');
                $table->date('date_born');
                $table->string('geolocalization', 100);
                $table->decimal('long', 20,10);
                $table->decimal('lat', 20,10);
                $table->timestamps();
            });
            */
    }
    public function down()
    {
        Schema::DropIFExists('patrimonial_sites');

        Schema::DropIfExists('subambits_patrimonial_sites');
        Schema::DropIFExists('ambit_subambit'); 
        Schema::DropIfEXists('subambits');
        Schema::DropIfEXists('ambits');
        Schema::DropIfEXists('categories');

        //Schema::DropIFExists('patrimonial_sites');
        Schema::DropIfExists('patrimonial_sites_municipality');
        Schema::DropIFExists('province_municipalities');
        Schema::DropIFExists('municipalities');
        Schema::DropIfExists('provinces');
        Schema::DropIfExists('cities');
        Schema::DropIfExists('countries');

        Schema::DropIfExists('permission_role');
        Schema::DropIfExists('permissions');
        Schema::DropIfExists('role_user');
        Schema::DropIfExists('roles');

        Schema::DropIfExists('subscopes');
        Schema::DropIfExists('scopes');

        Schema::DropIFExists('patrimonial_site_wealth_managers');
        Schema::DropIFExists('wealth_managers');    

        Schema::DropIFExists('subtypes');
        Schema::DropIFExists('types');

        Schema::DropIFExists('patrimonial_site_personal_consigments');
        Schema::DropIFExists('personal_consignments');

        Schema::DropIFExists('patrimonial_site_type_of_laws');
        Schema::DropIFExists('type_of_laws');
        
        Schema::DropIFExists('patrimonial_site_approvers');
        Schema::DropIFExists('approvers');

        
    }
}

