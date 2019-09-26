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
Route::get('/', 'HomeController@index')->name('home');
Route::get('/verificador', 'HomeController@verificador')->name('verificador');

//facebook
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

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
//offices
	Route::resource('office','OfficeController');
//Patrimonial
	Route::resource('patrimonialsite','PatrimonialsiteController');

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

	//Route::get('/remember','UserController@rememberpass')

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

	//Remember Password
	Route::get('/remember',function(){ return view('remember'); });
	Route::post('/validation','UserController@validation');

	//Respuesta
	Route::get('/respuesta',function(){
		return view('response');
	});
	//
	Route::get('activacion/{code}','UserController@activate');
	Route::post('complete/{id}','UserController@complete');	

	//bycity
	Route::get('/city/{id}/provinces','PatrimonialsiteController@byCity');
	Route::get('/city/{id}','PatrimonialsiteController@byCityCode');
	//byprovinces
	Route::get('/province/{id}/municipalities','PatrimonialsiteController@byProvince');
	Route::get('/provincecode/{id}','PatrimonialsiteController@byProvinceCode');
	//MUnicipality
	Route::get('/municipalitycode/{id}','PatrimonialsiteController@byMunicipalityCode');
	
	//byCategory
	Route::get('/catergory/{id}/ambits','PatrimonialsiteController@byCategory');
	//byAmbit
	Route::get('/ambit/{id}/subambits','PatrimonialsiteController@byAmbit');
	Route::get('/ambit/{id}','PatrimonialsiteController@byAmbitCode');
	
	Route::get('/subambit/{id}','PatrimonialsiteController@bySubAmbitCode');
	//byType
	Route::get('/type/{id}/subtypes','PatrimonialsiteController@byType');
	//numbergenerate
	Route::get('/num/','PatrimonialsiteController@CountElements');
	//oute::get('/city/{id}/provinces','PatrimonialsiteController@byCity');
	//Route::get()

	//use Symfony\Component\HttpFoundation\Response;
// Route::get('/test', function () {
// 	$response = $this->json('POST', '/user', ['name' => 'Sally']);

// 	return  $response;
//             // ->assertStatus(201)
//             // ->assertExactJson([
//             //     'created' => true,
//             // ]);
    
// });

    Route::get('patrimonialsite/pdf/{id}','PatrimonialsiteController@pdf');
    Route::get('visit/pdf/{id}','PatrimonialsiteController@visitpdf');
	/*
	Route::post('validate', 'UserController@validateCredentials');

	Route::get('validate', function()
	{
	    return View::make('user/login');
	});*/

	/*Retorno de app en json*/
	// use GuzzleHttp\Client;
	// Route::get('/test',function(){

	// 	$client = new Client([
	// 	    // Base URI is used with relative requests
	// 	    'base_uri' => 'http://api.open-elevation.com/api/v1/lookup?locations=41.161758,-8.583933',
	// 	    // You can set any number of default request options.
	// 	    'timeout'  => 8.0,
	// 	]);
	// 	$response = $client->request('GET', 'results');
	// 	dd($response->getBody()->getContents());
	// 	//return view('welcome');
	// });