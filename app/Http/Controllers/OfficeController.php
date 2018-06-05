<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Turisticcompany;
use App\Office;
use Image;
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

	        $turisticcompanies = Turisticcompany::all();
	        //dd($provinces);how_to_come
	        return view('office.create')->withTuristiccompanies($turisticcompanies);
	        //return view('turisticsite.create');
	    		//return view('turisticcompany.create');
	    }
	    public function store(Request $request)
	    {   
	        /*$this->validate($request,[
	            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif'
	        ]);*/                           
	        $turisticcompanies = Turisticcompany::all();
	        
	        //dd($province);
	            //menor a 4 MB IMAGEN
	        if($request->hasFile('office_photo')){
	            $office_photo = $request->file('office_photo');
	            $filename_photo = 'office_photo' . time() . '.' . $office_photo->getClientOriginalExtension();
	            Image::make($office_photo)->resize(200,167)->save(public_path('/uploads/turistic_company/turistic_company_office/' . $filename_photo));
	        }
	        $office = new Office();
	          
	        $office->nominal 			= $request->nominal;
	        $office->direccion    = $request->direccion; 
	        $office->description  = $request->description;
	        $office->office_photo	= $filename_photo;
	        $office->contact 			= $request->contact;
	        $office->long       	= $request->long;
	        $office->lat         	= $request->lat;
	        $office->save();

		      $turisticcompany = Turisticcompany::Find($request->turistic_company_id);
	        $office->turisticcompanies()->attach($turisticcompanies);

	        return view('office.index');
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
