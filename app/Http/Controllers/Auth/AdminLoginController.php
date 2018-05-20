<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
	{
		$this->middleware('guest:admin',['except'=>['logout']]);
	}

    public function showLoginForm()
    {
    	return view('auth.admin-login');
    }

    public function login(Request $request)
    {
    	//validate data
    	$this->validate($request,[
    		'email'	=> 'required|email',
    		'password' => 'required|min:6'
    	]);
		//dd($request);
    	//attemp  to log the user in
    	if (Auth::guard('admin')->attempt(['email'=> $request->email,'password' =>$request->password], $request->remember)) {
    		//if succesfulll then refdirect to their intended location
    		return redirect()->intended(route('admin.dashboard'));
    	}
    	//id unsuccessfull ,then redirect back to the login with the form data
    	return redirect()->back()->withInput($request->only('email','remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}

