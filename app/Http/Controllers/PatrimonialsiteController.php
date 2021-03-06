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

    public function Categoryname($id){
         $get_num = Category::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

    }

    public function Ambitname($id){
         $get_num = Ambit::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

    }

    public function SubAmbitname($id){
         $get_num = Subambit::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

    }

    public function Cityname($id){
         $get_num = City::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

    }
    public function Provincename($id){
         $get_num = Province::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

    }    
    public function Municipalityname($id){
         $get_num = Municipality::where('id',$id)->get();
    //     dd($get_num);
          return $get_num;
    //     //return response()->json($provinces);    

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
        //dd($get_amb);
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
         $get_num = Patrimonialsite::All();
         return $get_num->last()->id;
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
        

        $validator = Validator::make($request->all(), [
            'denom'     => 'required|string|min:5|max:50',
            'catpath'   => 'required|string|min:3|max:200',
            'ambh'      => 'required|string|min:3|max:200',
            'subambh'   => 'required|string|min:3|max:200',
            'descima'   => 'required|string|min:5|max:50',
            'ubi'       => 'required|string|min:5|max:20',
            'photognam' => 'required|string|min:5|max:30',
            'desc_pat'  => 'required|string|min:5|max:500',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
            // 'email'       => 'required|email|max:200|',
            // 'job_title'   => 'required|string|max:200',
            // 'ident_card'  => 'required|numeric|max:200',
            // 'born_in'     => 'required|string|max:200',
            // 'date_born'   => 'required|date|date_format:Y-m-d',
            // 'avatar'      => 'required|string|max:200',
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
            $patrimonialsite->category                  = $request->catpath;
            $patrimonialsite->scope                     = $request->ambh;
            $patrimonialsite->subscope                  = $request->subambh;
            $patrimonialsite->description_patrimonial   = $request->desc_pat;
            $patrimonialsite->patrimonial_photo         = $filename;
            $patrimonialsite->description_photo         = $request->descima;
            $patrimonialsite->date_take_photo           = $request->datetake;
            $patrimonialsite->photographer              = $request->photognam;
            $patrimonialsite->location                  = $request->ubi;
            $patrimonialsite->dating                    = $request->datin;
           
            $patrimonialsite->history_in_charge         = $request->history_in_charge;

            $patrimonialsite->department                = $request->cityh;    
            $patrimonialsite->province                  = $request->provinceh;
            $patrimonialsite->municipality              = $request->municipalityh;
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
                
            $patrimonialsite->owner                       = $request->owner;
            

            $patrimonialsite->property_pub_com            = $request->propc;
            $patrimonialsite->property_religious          = $request->propr;
            $patrimonialsite->property_collective         = $request->propco;
            $patrimonialsite->property_individual         = $request->propi;
            $patrimonialsite->public_state                = $request->prope;
            $patrimonialsite->joint_responsability        = $request->dcorr;
            $patrimonialsite->turistic                    = $request->usot;
            $patrimonialsite->educational_unit            = $request->usoue;
            $patrimonialsite->none                        = $request->uson;
            $patrimonialsite->housing                     = $request->usoh;
            $patrimonialsite->religous                    = $request->usor;
            $patrimonialsite->commerce                    = $request->usoc;
            $patrimonialsite->museum                      = $request->umus;
            $patrimonialsite->other                       = $request->uotr;
 
            $patrimonialsite->turistic_type               = $request->typ;
            $patrimonialsite->turistic_sub_type           = $request->subtyp;
            $patrimonialsite->api                         = $request->rapi;
            $patrimonialsite->aepi                        = $request->resapi;
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
               
            $patrimonialsite->law                         = $request->law;

            $patrimonialsite->observation                 = $request->obser;
            $patrimonialsite->source                      = $request->sour;
            $patrimonialsite->degree_of_reliability       = $request->resconf;
                
            $patrimonialsite->historychange               = $request->historychange;

            //$patrimonialsite->pub_state = $request->pubest;
            $patrimonialsite->save();

            //Session::Flash('success','New Province was successfully created!');

            return redirect()->route('patrimonialsite.index');
    }
    

    public function pdf($id)
    {
        $patrimonialsite = Patrimonialsite::find($id);
        $history = json_encode($patrimonialsite->history_in_charge);
        $historyd = json_decode($history,true);
        $owner = json_encode($patrimonialsite->owner);
        $ownerd = json_decode($owner,true);
        $law = json_encode($patrimonialsite->law);
        $lawd = json_decode($law,true);
        $historychange = json_encode($patrimonialsite->historychange);
        $historychanged = json_decode($historychange,true);
        //$history = json_encode($patrimonialsite->history_in_charge);
            //dd($lawd);
        //dd($patrimonialsite);
        //$province = Province::find($id);
        //$data = ['title' => 'Welcome to HDTuto.com'];
        //$pdf = PDF::loadView('myPDF', $data);
            //$pdf = PDF::loadView('myPDF');
            //return $pdf->download('itsolutionstuff.pdf');
        //dd($patrimonialsite);
        return view('patrimonialsite.myPDF',compact('patrimonialsite','historyd','ownerd','lawd','historychanged'));
        //return view('patrimonialsite.myPDF',compact('patrimonialsite'))->with('history',json_decode($history,true));

    }
    public function visitpdf($id)
    {
        $patrimonialsite = Patrimonialsite::find($id);
        //dd($patrimonialsite);
        return view('patrimonialsite.visitPDF',compact('patrimonialsite'));

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
        $where = array('id' => $id);
        $patrimonialsite  = Patrimonialsite::where($where)->first();
        //dd($patrimonialsite);       
        //return Response::json($patrimonialsite);

        // $patrimonialsite = Patrimonialsite::find($id);
        // $cities = City::all();
        // $categories = Category::all();
        // $types = Type::all();
        //dd($patrimonialsite);
        //$patrimonialsites = Patrimonialsite::All();
        //dd($categories);
        //dd($patrimonialsite);
        //dd($patrimonialsite);
        //return view('patrimonialsite.show');
        //return view('patrimonialsite.show',compact('patrimonialsite','categories','cities','types'));
        return view('patrimonialsite',compact('patrimonialsite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $cities = City::all();
        //$patrimonialsites = Patrimonialsite::orderBy('id','name')->paginate(6);
        $patrimonialsite = Patrimonialsite::find($id);
        //dd($patrimonialsites);
        $categories = Category::all();
        //dd($categories);
        $types = Type::all();
        //dd($types);
        return view('patrimonialsite.edit', compact('cities','patrimonialsite','categories','types'));


        // $city = City::all();
        // $categories = Category::all();
        // //dd($categories);
        // $types = Type::all();
         //return view('patrimonialsite.edit');
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
        //    $user = User::find($id);
        // $user->roles()->detach();
        // $user->role_id= $user->role_id;
        // $user->delete();
        // return redirect()->route('user.index');

        $patrimonialsite = Patrimonialsite::find($id);
        //($patrimonialsite);
            
        $patrimonialsite->delete();
        return redirect()->route('patrimonialsite.index');
        //return back();
    }
    //ready
    public function buscar_patrimonios($city,$dato="")
    {
        $patrimonialsites = Patrimonialsite::Busqueda($city,$dato)->paginate(3);
        //dd($patrimonialsites);
        $cities = City::all();
        $citissel = $cities->find($city);
        return view('listados.listados_cities')
        ->with("cities", $cities )
        ->with("citissel", $citisel)
        ->with("patrimonialsites", $patrimonialsites);
    }
}
