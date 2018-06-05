<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WorkflowPage extends Migration
{
    public function up()
    {   
        Schema::create('roles',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
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
            $table->engine = 'InnoDB';
            $table->increments('id')->unique();
            $table->string('name',100);
            $table->string('description',200);
            $table->timestamps();
        });
        Schema::create('permission_role', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('permission_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('categories',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',200);
            $table->string('description',200);
            $table->timestamps();
        });
        Schema::create('turistic_type_companies',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',200);
            $table->string('description',200);
            $table->string('service_type',40);
            $table->string('slug')->unique()->after('name');
            $table->timestamps();
        });
        Schema::create('categories_turistic_type_companies', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');      
            $table->integer('turistic_type_company_id')->unsigned();
            $table->foreign('turistic_type_company_id')->references('id')->on('turistic_type_companies')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('turistic_companies',function(Blueprint $table){
            $table->engine = 'InnoDB';
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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');      
            $table->integer('turistic_company_id')->unsigned();
            $table->foreign('turistic_company_id')->references('id')->on('turistic_companies')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('offices',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nominal',200);
            $table->string('direccion',200);
            $table->string('description',200);
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
        Schema::create('turistic_companies_turistic_type', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('turistic_company_id')->unsigned();
            $table->foreign('turistic_company_id')->references('id')->on('turistic_companies')->onDelete('cascade');      
            $table->integer('turistic_type_id')->unsigned();
            $table->foreign('turistic_type_id')->references('id')->on('turistic_type_companies')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('countries',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->string('geolocalization',200);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->timestamps();
        });
        Schema::create('cities',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('description',500);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->timestamps();
        });
        Schema::create('provinces',function(Blueprint $table){
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name',100);
            $table->string('geolocalization',200);
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->timestamps();
        });            
        Schema::create('turistic_sites', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_title')->unsigned();
            $table->string('summary')->unsigned();
            $table->string('description', 100);
            $table->string('how_to_come', 100);
            $table->string('recomendation');
            $table->string('turisticsite_photo')->default('turisticsitedefault.jpeg');
            //$table->string('avatar')->default('default.jpg');//extension jpg,png
            $table->decimal('long', 20,10);
            $table->decimal('lat', 20,10);
            //$table->string('photografic', 100);
            $table->timestamps();
        });
        Schema::create('turistic_sites_province', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('turistic_sites_id')->unsigned();
            $table->integer('province_id')->unsigned();
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('turistic_sites_id')->references('id')->on('turistic_sites')->onDelete('cascade');
            $table->timestamps();      
        });
        Schema::create('events', function (Blueprint $table) {
            $table->engine = 'InnoDB';
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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('publication_date')->unsigned();
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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->date('publication_date')->unsigned();
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
            $table->engine = 'InnoDB';
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
                $table->engine = 'InnoDB';
                $table->increments('id');
                $table->string('nationaliy',200);
                $table->string('reside',100);
                $table->string('last_name',200);
                $table->string('first_name',100);
                $table->string('email',200)->unique();
                $table->boolean('status');
                $table->date('date_born', 100);
                $table->string('geolocalization', 100);
                $table->decimal('long', 20,10);
                $table->decimal('lat', 20,10);
                $table->timestamps();
            });
    }
    public function down()
    {
    
        Schema::DropIfExists('visitors');

        Schema::DropIfExists('touristic_guides');

        Schema::DropIfExists('announcements_user');
        Schema::DropIfExists('announcements');
        Schema::DropIfExists('news_user');
        Schema::DropIfExists('news');
        Schema::DropIfExists('events_user');
        Schema::DropIfExists('events');
 
        Schema::DropIfExists('turistic_sites_province');
        Schema::DropIFExists('turistic_sites');
        Schema::DropIfExists('provinces');
        Schema::DropIfExists('cities');
        Schema::DropIfExists('countries');

        Schema::DropIfExists('turistic_companies_turistic_type');
        Schema::DropIfExists('turistic_company_offices');
        Schema::DropIfExists('offices');

        Schema::DropIfExists('user_turistic_type_companies');
        Schema::DropIfExists('turistic_companies');

        Schema::DropIfExists('category_turistic_type_companies');
        Schema::DropIFExists('turistic_type_companies');
        Schema::DropIfEXists('categories');

        Schema::DropIfExists('permission_role');
        Schema::DropIfExists('permissions');
        Schema::DropIfExists('role_user');
        Schema::DropIfExists('roles');
    }
}

