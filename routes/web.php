<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//reservado para HOMe
Route::get('/home', 'HomeController@index')->name('home');


//Permissions
	Route::resource('permission','PermissionController');
//management_Users
	Route::resource('user','AdminController');
//Roles
	Route::resource('role','RoleController');
//Turiistic Sites
	Route::resource('turisticsite','TuristicsiteController');
//Provinces
	Route::resource('province','ProvinceController');
//Event
	Route::resource('event','EventController');
//Categiry
	Route::resource('category','CategoryController');
//Turistictypecompany
	Route::resource('turistictypecompany','TuristictypecompanyController');
//PAGE CONTROLLER

//SLUGS	
	Route::get('page/{slug}',['as' => 'page.single','uses'=>'TuristictypecompanyController@getSingle'])->where('slug','[\w\d\-\_]+');
//turistic company
	Route::resource('turisticcompany','TuristiccompanyController');

//Users
	Auth::routes();
	Route::post('/profile', 'UserController@update_avatar')->name('User update avatar');
	Route::get('/profile', 'UserController@profile')->name('User profile');
	Route::get('/homeuser', 'UserController@index')->name('User index');
	Route::get('/users/logout','Auth\LoginController@userLogout')->name('user.logout');

//Admins	
	Route::prefix('admin')->group(function(){

		Route::get('/admin', 'Auth\AdminLoginController@dashboard');
		Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
		Route::get('/', 'AdminController@index')->name('admin.index');
		Route::get('/logout','Auth\AdminLoginController@logout')->name('admin.logout');

		//Passsword reset routes
		Route::post('password/email','Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
		Route::get('password/reset','Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('password/reset','Auth\AdminResetPasswordController@reset');
		Route::get('password/reset/{token}','Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
	});
