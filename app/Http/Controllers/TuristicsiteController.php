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
        $turisticsites = Turisticsite::orderBy('id','name_title')->paginate(3);
        return view('turisticsite.index')->withTuristicsites($turisticsites);
    }
    public function create()
    {

        $provinces = Province::all();
        //dd($provinces);how_to_come
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
        //$turisticsites = Turisticsite::with('provinces');
        foreach ($turisticsite->provinces as $province) 
        {
           $province->id;
       }
        //dd($province);
        //$province = Province::Find($turisticsite->province_id);
        //$provinces = Province::all();
       return view('turisticsite.show')->withTuristicsite($turisticsite)->withProvince($province);
   }
   public function edit($id)
   {

    $provinces= Province::all();
    $turisticsite = Turisticsite::find($id);
    foreach ($turisticsite->provinces as $province) 
    {
        $province->id;
    }
    
    return view('turisticsite.edit')->withTuristicsite($turisticsite)->withProvince($province)->withProvinces($provinces);
}

public function update(Request $request, $id)
{
    //dd($request);
    $turisticsite = Turisticsite::find($id);
    $provinces = Province::all();
    //dd($province);
    foreach ($turisticsite->provinces as $province) 
    {
        $province->id;
    }

    if($request->hasFile('turisticsite_photo'))
    {
        $turisticsite_photo = $request->file('turisticsite_photo');
        $filename = 'turisticsite_photo' . time() . '.' . $turisticsite_photo->getClientOriginalExtension();
        Image::make($turisticsite_photo)->resize(1280,1024)->save(public_path('/uploads/turisticsite_photos/' . $filename));
        
        $turisticsite->turisticTuristicsitesite_photo = $filename;
    }

            //guardar en la base de datos
    $turisticsite = Turisticsite::find($id);


    $turisticsite->name_title         = $request->input('name_title');
    $turisticsite->summary            = $request->input('summary'); 
    $turisticsite->description        = $request->input('description');
    $turisticsite->how_to_come        = $request->input('how_to_come');
    $turisticsite->recomendation      = $request->input('recomendation');
    $turisticsite->turisticsite_photo = $request->input('turisticsite_photo');

            //$turisticsite->province           = $request->input('province');
    //$turisticsite->turisticsite_photo = $request->input('turisticsite_photo');
    $turisticsite->long               = $request->input('long');
    $turisticsite->lat                = $request->input('lat');

    $turisticsite->save();
    //dd($request);
    $turisticsite->provinces()->detach();

    $province = Province::Find($request->province_id);
    $turisticsite->provinces()->sync($province);

    //Session::flash('success','This TuristicSite was suyccessfully update.');
    return redirect()->route('turisticsite.show', $turisticsite->id);

}


public function destroy($id)
{
    $turisticsite = Turisticsite::find($id);
    $turisticsite->provinces()->detach($province);
    $turisticsite->delete();
    return redirect()->route('turisticsites.index');
}
}

