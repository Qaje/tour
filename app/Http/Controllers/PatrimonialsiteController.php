<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Validator;
use Auth;
use Image;
use storage;

use App\City;
use App\Province;
use App\Municipality;
use App\Patrimonialsite;
use App\Category;
use App\Ambit;
use App\Subambit;
use App\Type;
use App\SubType;
use Session;

use PDF;
class PatrimonialsiteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function provinces(){
        
        
        $city_id = Input::get('city_id');
        $provinces = Province::where('city_id','=',$city_id)->get();

        return response()->json($provinces);    

    }

     public function byCity($id)
    {
        $get_prov = Province::where('city_id', $id)->get();
        return $get_prov;
    }
    public function byCityCode($id)
    {
        $city_code = City::find($id);
        //dd($city_code);
        return $city_code->name;
    }

    public function byProvince($id)
    {
        $get_muni = Municipality::where('province_id', $id)->get();
        return $get_muni;
    }
    public function byProvinceCode($id)
    {
        $province_code = Province::find($id);
        //$code = $province_code->code;
        //dd($province_code->code);
        return $province_code->code;
    }
    public function byMunicipalityCode($id)
    {
        $municipality_code = Municipality::find($id);
        //$code = $municipality_code->code;
        //dd($municipality_code->code);
        return $municipality_code->code;
    }


    public function byCategory($id)
    {
       $get_amb = Ambit::where('category_id', $id)->get();
        return $get_amb;
    }
    public function byAmbitCode($id)
    {
       $ambit_code = Ambit::find($id);
        return $ambit_code->code;
    }

    public function byAmbit($id)
    {
        $get_subamb = Subambit::where('ambit_id', $id)->get();
        return $get_subamb;
    }
    public function bySubAmbitCode($id)
    {
        $get_subamb = Subambit::find($id);
        //$get_subamb = Subambit::all();
        //dd($get_subamb);
        return $get_subamb->code;
    }


    public function byType($id)
    {
        //dd($id);
        $get_typ = SubType::where('type_id', $id)->get();
        return $get_typ;
    }
     public function CountElements()
    {
         //dd($id);
         $get_num = Patrimonialsite::All()->count();
         return $get_num;
    }

    public function index()
    {
        //$provinces = Province::where('city_id', '1')->get();
        $cities = City::all();
        $patrimonialsites = Patrimonialsite::orderBy('id','name')->paginate(6);
        //dd($patrimonialsites);
        $categories = Category::all();
        //dd($categories);
        $types = Type::all();
        //dd($types);
        return view('patrimonialsite.index', compact('cities','patrimonialsites','categories','types'));
    }

    public function update_patrimonial_photo(Request $request)
    {
            //dd($request);
        if($request->hasFile('uploadImage1')){
            $patrimonial_photo = $request->file('uploadImage1');
            $filename = 'uploadImage1' . time() . '.' . $patrimonial_photo->getClientOriginalExtension();
            Image::make($patrimonial_photo)->resize(1200,628)->save(public_path('/uploads/patrimonialsite_photo/' . $filename));
            // $patrmial = Auth::user();
            // $patrmial->avatar = $filename;
            // $patrmial->save();
        }
        //return view('patrimonialsite.index',array('user' => Auth::user()) );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       /* $cities = City::all();
        //dd($cities);how_to_come
        //return view('admin.admin_user.create')->withRoles($cities);
        dd($cities);*/
        return view('patrimonialsite.create')->withCities($cities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  $validator = Validator::make($request->all(), [
        //     'name'        => 'required|string|min:4|max:200',
        //     'last_name'   => 'required|string|min:3|max:200',
        //     'email'       => 'required|email|max:200|',
        //     'job_title'   => 'required|string|max:200',
        //     'ident_card'  => 'required|numeric|max:200',
        //     'born_in'     => 'required|string|max:200',
        //     'date_born'   => 'required|date|date_format:Y-m-d',
        //     'avatar'      => 'required|string|max:200',
        // ]);
        //dd($request);
        if($request->hasFile('uploadImage1'))
        {
            $patrimonial_photo = $request->file('uploadImage1');
            $filename = 'uploadImage1' . time() . '.' . $patrimonial_photo->getClientOriginalExtension();
            Image::make($patrimonial_photo)->resize(1250,850)->save(public_path('/uploads/patrimonialsite_photos/' . $filename));
        }
        
        $patrimonialsite = new Patrimonialsite(); 
            $patrimonialsite->codemat                   = $request->text1;
            $patrimonialsite->code_photo                = $request->text2;
            $patrimonialsite->name_title                = $request->denom;
            $patrimonialsite->category                  = $request->catpat;
            $patrimonialsite->scope                     = $request->amb;
            $patrimonialsite->subscope                  = $request->subamb;
            $patrimonialsite->description_patrimonial   = $request->desc_pat;
            $patrimonialsite->patrimonial_photo         = $filename;
            $patrimonialsite->description_photo         = $request->descima;
            $patrimonialsite->date_take_photo           = $request->datetake;
            $patrimonialsite->photographer              = $request->photognam;
            $patrimonialsite->location                  = $request->ubi;
            $patrimonialsite->dating                    = $request->datin;
           
            $patrimonialsite->history_in_charge         = $request->history_in_charge;

            $patrimonialsite->department                = $request->selectcity;    
            $patrimonialsite->province                  = $request->selectprovince;    
            $patrimonialsite->municipality              = $request->selectmunicipality;    
            $patrimonialsite->direction                 = $request->direccion;
            $patrimonialsite->long                      = $request->lng;
            $patrimonialsite->lat                       = $request->lat;
            $patrimonialsite->alt                       = $request->alt;
            $patrimonialsite->zone                      = $request->zona;

            $patrimonialsite->conservation                = $request->selectconser;
            $patrimonialsite->natural_geologico           = $request->natgeo;
            $patrimonialsite->natural_hidrico             = $request->nathid;
            $patrimonialsite->natural_eolico              = $request->nateol;
            $patrimonialsite->natural_natural_otros       = $request->natot;
            $patrimonialsite->deteriorate_urbano          = $request->antdurb;
            $patrimonialsite->deteriorate_agricola        = $request->antdagr;
            $patrimonialsite->deteriorate_saq_van         = $request->antdsaq;
            $patrimonialsite->deteriorate_inf_civ         = $request->intinf;
            $patrimonialsite->deteriorate_turismo         = $request->anttur;
            $patrimonialsite->deteriorate_antropico_otros = $request->antot;
                
                //--$patrimonialsite->owner                       = $request->owner;
            

            $patrimonialsite->property_pub_com            = $request->publicom;
            $patrimonialsite->property_religious          = $request->prirel;
            $patrimonialsite->property_collective         = $request->pricol;
            $patrimonialsite->property_individual         = $request->priind;
            $patrimonialsite->public_state                = $request->pubest;
            $patrimonialsite->joint_responsability        = $request->decor;
            $patrimonialsite->turistic                    = $request->utur;
            $patrimonialsite->educational_unit            = $request->uuni;
            $patrimonialsite->none                        = $request->unin;
            $patrimonialsite->housing                     = $request->uhab;
            $patrimonialsite->religous                    = $request->urel;
            $patrimonialsite->commerce                    = $request->ucom;
            $patrimonialsite->museum                      = $request->umus;
            $patrimonialsite->other                       = $request->uotr;

            $patrimonialsite->turistic_type               = $request->typ;
            $patrimonialsite->turistic_sub_type           = $request->subtyp;
            $patrimonialsite->api                         = $request->rapi;
            $patrimonialsite->aepi                        = $request->reapi;
            $patrimonialsite->hierarchy                   = $request->jerar;
            $patrimonialsite->capacity                    = $request->ecc;
            $patrimonialsite->objetics_factor             = $request->facobj;
            $patrimonialsite->touristic_perception        = $request->pertur;
            $patrimonialsite->research_entity             = $request->reen;
            $patrimonialsite->ctr_turnamer                = $request->rnam;
            $patrimonialsite->ctr_turnamerfoto            = $request->rfec;
            $patrimonialsite->ctr_turnbmeb                = $request->renam;
            $patrimonialsite->ctr_turnbmebfoto            = $request->refec;
            $patrimonialsite->ctr_turncmeb                = $request->apnam;
            $patrimonialsite->ctr_turncmebfoto            = $request->apfec;


            $patrimonialsite->recognized                  = $request->rec;
               
                //$patrimonialsite->law                         = $request->law;

            $patrimonialsite->observation                 = $request->obser;
            $patrimonialsite->source                      = $request->sour;
            $patrimonialsite->degree_of_reliability       = $request->resconf;
                
                //--$patrimonialsite->historychange               = $request->historychange;

            //$patrimonialsite->pub_state = $request->pubest;
            $patrimonialsite->save();

            //Session::Flash('success','New Province was successfully created!');

            return redirect()->route('patrimonialsite.index');
    }
    

    public function pdf()
    {
        $patrimonialsites = Patrimonialsite::All();
        //$data = ['title' => 'Welcome to HDTuto.com'];
        //$pdf = PDF::loadView('myPDF', $data);
            //$pdf = PDF::loadView('myPDF');
            //return $pdf->download('itsolutionstuff.pdf');
        //dd($patrimonialsites);
        return view('patrimonialsite.myPDF',compact('patrimonialsites'));

    }
    public function setPropertiesAttribute($value)
    {
        $properties = [];

        foreach ($value as $array_item) {
            if(!is_null($array_item['key'])){
                $properties[] = $array_item;
            }
        }
        $this->attributes['properties'] = json_encode($properties);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrimonialsite = Patrimonialsite::find($id);
        //dd($patrimonialsite);
        //$patrimonialsites = Patrimonialsite::All();
        $cities = City::all();
        $categories = Category::all();
        //dd($categories);
        $types = Type::all();
        //dd($types);
        //dd($patrimonialsite);
        //return view('patrimonialsite.show');
        return view('patrimonialsite.show',compact('patrimonialsite','categories','cities','types'));
        //return view('patrimonialsite',compact('patrimonialsite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $patrimonialsite = Patrimonialsite::find($id);
        // $city = City::all();
        // $categories = Category::all();
        // //dd($categories);
        // $types = Type::all();
        // return view('patrimonialsite.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patrimonialsite = Patrimonialsite::find($id);
        //$cities = City::all();
        //$categories = Category::all();
        //dd($categories);
        //$types = Type::all();
        $patrimonialsite->delete();

//        return redirect('/empl')
        //dd($types);
        //dd($patrimonialsite);
        //$patrimonialsites = Patrimonialsite::All();

        //return redirect('/patrimonialsite')->with('success','Data Delete');
        return redirect('/patrimonialsite');
    }
}
