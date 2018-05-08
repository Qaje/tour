<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * con guard es mas seguro la pagina
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$seid = Session::getId();
        //$data = Session::getId();
        //dd($data);
        //return view('admin.dashboard', ['data' => $data]);        
        //return view ('user.dashboard');
    }
}
