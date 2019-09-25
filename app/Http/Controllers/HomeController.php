<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Patrimonialsite;

//ENVIO DE VONTROLLERS
//use App\Turisticsite;
use App\Category;
use App\Type;
//use App\Turistictypecompany;
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
        /* 
        //ENVIO DE MODELS
        $tss = Turisticsite::All(); 
        $ts = new Turisticsite();
        $cs = Category::all();
        $c = new Category();
        dd($cs);
        $ttcs = Turistictypecompany::all();
        dd($ttcs);
        $ttc = new Turistictypecompany();
        return view ('page_main')->withTss($tss)->withTs($ts)->withCs($cs)->withC($c)->withTtcs($ttcs)->withTtc($ttc);
        */
        $patrimonialsites = Patrimonialsite::orderBy('id','name')->paginate(6);
        //dd($patrimonialsites);
        $categories = Category::all();
        //dd($categories);
        $types = Type::all();
        //dd($types);
       // return view('patrimonialsite.index', compact('cities','patrimonialsites','categories','types'));
        return view ('page_main', compact('cities','patrimonialsites','categories','types'));
    }

    public function verificador()
    {
        //verificador de session
        return view ('/home');
    }
}
