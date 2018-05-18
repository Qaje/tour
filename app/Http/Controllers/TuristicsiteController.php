<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Turisticsite;
use App\Province;
use App\Role;
use Auth;
use Image;
use Storage;

class TuristicsiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $turisticsites = Turisticsite::orderBy('id','name_title')->paginate(7);
        return view('turisticsite.index')->withTuristicsites($turisticsites);
    }
    public function create()
    {
        
        $provinces = Province::all();
        //dd($provinces);
        return view('turisticsite.create')->withProvinces($provinces);
        //return view('turisticsite.create');

    }
    public function store(Request $request)
    {
        /*$this->validate($request,[
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);*/                           
        $provinces = Province::all();
        
        //dd($province);
            //menor a 4 MB IMAGEN
        if($request->hasFile('turisticsite_photo')){
            $turisticsite_photo = $request->file('turisticsite_photo');
            $filename = 'turisticsite_photo' . time() . '.' . $turisticsite_photo->getClientOriginalExtension();
            Image::make($turisticsite_photo)->resize(1280,1040)->save(public_path('/uploads/turisticsite_photos/' . $filename));
        }
        $turisticsite = new Turisticsite();
        //dd($request);
        //$photo = $request->file('turisticsite_photo');
        //$filename = 'turisticsite_photo' .'.' .time() ;
        //Image::make($photo)->save(public_path('/uploads/turisticsite_photos/' . $filename));
        //Image::make($photo)->save($filename, '/uploads/turisticsite_photos/');
        //(public_path('/uploads/turisticsite_photos/' . $filename));
        //dd($filename);
        
        
            
            //$turisticsite->turisticsite_photo = $filename;
        
        $turisticsite->name_title         = $request->name_title;
        $turisticsite->summary            = $request->summary;    
        $turisticsite->description        = $request->description;
        $turisticsite->how_to_come        = $request->how_to_come;
        $turisticsite->recomendation      = $request->recomendation;
        //$turisticsite->province           = $request->province;
        $turisticsite->turisticsite_photo = $filename;
        $turisticsite->long               = $request->long;
        $turisticsite->lat                = $request->lat;

        $turisticsite->save();

        $province = Province::Find($request->province_id);
        $turisticsite->provinces()->attach($province);
        
        
        //dd($turisticsite);

        return redirect()->route('turisticsite.index');
        //dd($request->file('image'));
    /*    $this->validate($request, array(
             'name_title'            => 'required',
             'summary'               => 'required',
             'description'           => 'required',
             'how_to_come'           => 'required',
             'recomendation'         => 'required',
             //'province'              => 'required',
             'turisticsite_photo'    => 'required',
             'long'                  => 'required',
             'lat'                   => 'required'
         ));
    */   

     }
     public function show($id)
     {
        $turisticsite = Turisticsite::find($id);
        return view('turisticsite.show')->withTuristicsite($turisticsite);
    }
    public function edit($id)
    {
        $turisticsite = Turisticsite::find($id);
        $provinces = Provinces::all();
        $provs= array();
        foreach ($provinces as $province) 
        {
            $provs[$province->id] = $category->name;
        }
        return view('turisticsites.edit')->withTuristicsite($turisticsite)->withPronvinces($provs);
    }

    public function update(Request $request, $id)
    {
                /*
            $turisticsite = Turisticsite::find($id);
            if($request->hasFile('turisticsite_photo'))
            {
                    $turisticsite_photo = $request->file('turisticsite_photo');
                    $filename = 'turisticsite_photo' . time() . '.' . $turisticsite_photo->getClientOriginalExtension();
                    Image::make($turisticsTuristicsiteite_photo)->resize(1280,1024)->save(public_path('/uploads/turisticsite_photos/' . $filename));
             Turisticsite
                   $turisticsite->turisticTuristicsitesite_photo = $filename;
            }Turisticsite
            Turisticsite
            if($request->input('province')Turisticsite == $turisticsite->province)
            {
                $this->validate($request, array(
                'name_title'            => 'required|max:100',
                'summary'               => 'required|max:200',
                'description'           =>Turisticsite 'required|max:100',
                'how_to_come'           => 'required|max:100',
                'recomendation'         => 'required|max:200',
                //'province'              => 'required|max:200',
                'turisticsite_photo'    => 'required|max:200',
                'long'                  => 'required|numeric',
                'lat'                   => 'required|numeric'
                ));
            }else
            {    
                $this->validate($request, array(
                    'name_title'            => 'required|max:100',
                    'summary'               => 'required|max:200',
                    'description'         Turisticsite  => 'required|max:100',
                    'how_to_come'           => 'required|max:100',
                    'recomendation'         => 'required|max:200',
                    'province'              => 'required|max:200',
                    'turisticsite_photo'    => 'required|max:200',
                    'long'                  => 'required|numeric',
                    'lat'                   => 'required|numeric'
                ));
            }
         
            //guardar en la base de datos
            $turisticsite = Turisticsite::find($id);
            $turisticsite->title = $request->input('title');
            $turisticsite->slug = $request->input('slug');
            $turisticsite->category_id = $request->input('category_id');
            $turisticsite->body = $request->input('body');
            
            $turisticsite->name_title         = $request->input('name_title');
            $turisticsite->summary            = $request->input('summary'); 
            $turisticsite->description        = $request->input('description');
            $turisticsite->hot_to_come        = $request->input('hot_to_come');
            $turisticsite->recomendation      = $request->input('recomendation');
            $turisticsite->province           = $request->input('province');
            $turisticsite->turisticsite_photo = $request->input('turisticsite_photo');
            $turisticsite->long               = $request->input('long');
            $turisticsite->lat                = $request->input('lat');
            $turisticsite->save();
            Session::flash('success','This TuristicSite was suyccessfully update.');
            return redirect()->route('turisticsites.show', $turisticsite->id);*/

        }


        public function destroy($id)
        {
            $turisticsite = Turisticsite::find($id);
            $turisticsite->provinces()->detach();
            $turisticsite->delete();
        //Session::flash('success','The turisticsite was successfully deleted.');
            return redirect()->route('turisticsites.index');
        }
    }

