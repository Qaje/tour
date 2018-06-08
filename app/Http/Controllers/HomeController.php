<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Turisticsite;
use App\Category;
use App\Turistictypecompany;
use Image;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     * con guard es mas seguro la pagina
     * @return void
     */
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tss = Turisticsite::All(); 
        $ts = new Turisticsite();
        $cs = Category::all();
        $c = new Category();
        $ttcs = Turistictypecompany::all();
        $ttc = new Turistictypecompany();
        dd($ttcs);
        return view ('page_main')->withTss($tss)->withTs($ts)->withCs($cs)->withC($c);
    }

    public function verificador()
    {
        //verificador de session
        return view ('home');
    }
}
