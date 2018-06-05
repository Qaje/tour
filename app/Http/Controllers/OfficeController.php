<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Turisticcompany;
use App\Office;

class OfficeController extends Controller
{
     public function __construct()
	    {
	        $this->middleware('auth:admin');
	    }


	    public function index()
	    {
	        $offices = Office::orderBy('id','nominal')->paginate(3);
	        return view('office.index')->withOffices($offices);
	    }
	    public function create()
	    {

	        $turistictypes = Turistictypecompany::all();
	        //dd($provinces);how_to_come
	        return view('turisticcompany.create')->withTuristictypes($turistictypes);
	        //return view('turisticsite.create');
	    		//return view('turisticcompany.create');
	    }
	    public function store(Request $request)
	    {   
	        /*$this->validate($request,[
	            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif'
	        ]);*/                           
	        $turistictypes = Turistictypecompany::all();
	        
	        //dd($province);
	            //menor a 4 MB IMAGEN
	        if($request->hasFile('logo')){
	            $logo = $request->file('logo');
	            $filename_logo = 'logo' . time() . '.' . $logo->getClientOriginalExtension();
	            Image::make($logo)->resize(200,167)->save(public_path('/uploads/turistic_company/turistic_company_logo/' . $filename_logo));
	        }
	        if($request->hasFile('image_a')){
	            $image_a = $request->file('image_a');
	            $filename_image_a = 'image_a' . time() . '.' . $image_a->getClientOriginalExtension();
	            Image::make($image_a)->resize(200,167)->save(public_path('/uploads/turistic_company/turistic_company_galery/' . $filename_image_a));
	        }
	        if($request->hasFile('image_b')){
	            $image_b = $request->file('image_b');
	            $filename_image_b = 'image_b' . time() . '.' . $image_b->getClientOriginalExtension();
	            Image::make($image_b)->resize(200,167)->save(public_path('/uploads/turistic_company/turistic_company_galery/' . $filename_image_b));
	        }
	        if($request->hasFile('image_c')){
	            $image_c = $request->file('image_c');
	            $filename_image_c = 'image_c' . time() . '.' . $image_c->getClientOriginalExtension();
	            Image::make($image_c)->resize(200,167)->save(public_path('/uploads/turistic_company/turistic_company_galery/' . $filename_image_c));
	        }
	        $turisticcompany = new Turisticcompany();
	          
	        $turisticcompany->name_reasonsocial = $request->name_reasonsocial;
	        $turisticcompany->status       			= $request->status; 
	        $turisticcompany->history        = $request->history;
	        $turisticcompany->mision        = $request->mision;
	        $turisticcompany->vision        = $request->vision;
	        $turisticcompany->valores        = $request->valores;
	        $turisticcompany->logo 				= $filename_logo;
	        $turisticcompany->image_a 		= $filename_image_a;
	        $turisticcompany->image_b 		= $filename_image_b;
	        $turisticcompany->image_c 		= $filename_image_c;
	        $turisticcompany->observation = $request->observation;
	        $turisticcompany->siteweb         = $request->siteweb;
	        $turisticcompany->service         = $request->service;
	        $turisticcompany->email         = $request->email;
	        $turisticcompany->whattsapp         = $request->whattsapp;
	        $turisticcompany->facebook         = $request->facebook;

	        $turisticcompany->save();

		      $turistictype = Turistictypecompany::Find($request->turistic_type_id);
	        $turisticcompany->turistictypes()->attach($turistictype);

	        return view('turisticcompany.index');
	     }
	     public function show($id)
	     {
	        $turisticcompany = Turisticcompany::find($id);
	        //$turisticsites = Turisticsite::withtu('provinces');
	        foreach ($turisticcompany->turistictypes as $turistictype) 
	        {
	           $turistictype->id;
	       	}
	        //dd($province);
	        //$province = Province::Find($turisticsite->province_id);
	        //$provinces = Province::all();
	       	return view('turisticcompany.show')->withTuristiccompany($turisticcompany)->withTuristictype($turistictype);
	   	}
	   public function edit($id)
	   {	
	    dd('no disposnible,estamos trabajando en ello');
/**
	    $provinces= Province::all();
	    $turisticsite = Turisticsite::find($id);
	    foreach ($turisticsite->provinces as $province) 
	    {
	        $province->id;
	    }
	    
	    return view('turisticsite.edit')->withTuristicsite($turisticsite)->withProvince($province)->withProvinces($provinces);
	    */
	}

	public function update(Request $request, $id)
	{
	    dd('no disposnible,estamos trabajando en ello');
	    /*
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
*/
	}


	public function destroy($id)
	{
	    $turisticcompany = Turisticcompany::find($id);
	    foreach ($turisticcompany->turistictypes as $turistictype) 
	    {
	           $turistictype->id;
	    }
	    $turisticcompany->turistictypes()->detach($turistictype);
	    $turisticcompany->delete();
	    return view('turisticcompany.index');

	}
}
