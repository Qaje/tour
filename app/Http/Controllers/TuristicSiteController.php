<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\TuristicSite;
use App\Province;
use Session;
use Image;

class TuristicSiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return view('turisticsite.index');
       $turisticsites = TuristicSite::all();    
       return view('turisticsite.index')->withTuristicsites($turisticsites);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $turisticsites = TuristicSite::all();
        $provinces = Province::all();
        return view('turisticsite.create')->withTuristicsites($turisticsites)->withProvinces($provinces);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //if($request->hasFile('turisticsite_photo')){
            $turisticsite_photo = $request->file('turisticsite_photo');
            $filename = 'turisticsite_photo' . time() . '.' . $turisticsite_photo->getClientOriginalExtension();
            Image::make($turisticsite_photo)->resize(1280,1024)->save(public_path('/uploads/turisticsite_photos/' . $filename));
 
            $turisticsite->turisticsite_photo = $filename;
        //}
        $this->validate($request, array(
            'name_title'            => 'required|max:100',
            'summary'               => 'required|max:200',
            'description'           => 'required|max:100',
            'how_to_come'           => 'required|max:100',
            'recomendation'         => 'required|max:200',
            'province'              => 'required|max:200',
            'turisticsite_photo'    => 'required|max:200',
            'long'                  => 'required|numeric',
            'lat'                   => 'required|numeric'
        ));
        $turisticsite = new TuristicSite;

        $turisticsite->name_title         = $request->name_title;
        $turisticsite->summary            = $request->summary;    
        $turisticsite->description        = $request->description;
        $turisticsite->hot_to_come        = $request->hot_to_come;
        $turisticsite->recomendation      = $request->recomendation;
        $turisticsite->province           = $request->province;
        $turisticsite->turisticsite_photo = $request->turisticsite_photo;
        $turisticsite->long               = $request->long;
        $turisticsite->lat                = $request->lat;
        
        $turisticsite->save();

        Session::flash('success','The Turistic site was seccessfully save!');
        
        return redirect()->route('turisticsite.index');
        //return redirect()->route('turisticsites.show', $post->id);
    }

    /**
     * 
     * $table->integer('name_title')->unsigned();
     * 
     *$table->string('name_title')->unsigned();
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turisticsite = TuristicSite::find($id);
        return view('turisticsite.show')->withTuristicsite($turisticsite);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turisticsite = TuristicSite::find($id);
        $provinces = Provinces::all();
        $provs= array();
        foreach ($provinces as $province) {
            $provs[$province->id] = $category->name;
        }
        
        return view('turisticsites.edit')->withTuristicsite($turisticsite)->withPronvinces($provs);
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
            //validacion de datos
            $turisticsite = TuristicSite::find($id);
            if($request->hasFile('turisticsite_photo')){
                    $turisticsite_photo = $request->file('turisticsite_photo');
                    $filename = 'turisticsite_photo' . time() . '.' . $turisticsite_photo->getClientOriginalExtension();
                    Image::make($turisticsite_photo)->resize(1280,1024)->save(public_path('/uploads/turisticsite_photos/' . $filename));
             
                   $turisticsite->turisticsite_photo = $filename;
                }
            
            if($request->input('province') == $turisticsite->province){
                $this->validate($request, array(
                'name_title'            => 'required|max:100',
                'summary'               => 'required|max:200',
                'description'           => 'required|max:100',
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
                    'description'           => 'required|max:100',
                    'how_to_come'           => 'required|max:100',
                    'recomendation'         => 'required|max:200',
                    'province'              => 'required|max:200',
                    'turisticsite_photo'    => 'required|max:200',
                    'long'                  => 'required|numeric',
                    'lat'                   => 'required|numeric'
                ));
            }
         
            //guardar en la base de datos
            $turisticsite = TuristicSite::find($id);
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

            
            //set flash data  with succes message
            Session::flash('success','This TuristicSite was suyccessfully update.');
            //redirection con flash data de turisticsites.show
            return redirect() -> route('turisticsites.show', $turisticsite->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $turisticsite = TuristicSite::find($id);
        //eliminar las relaciones
        $turisticsite->provinces()->detach();
        $turisticsite->delete();
        //dd($turisticsite);
        Session::flash('success','The turisticsite was successfully deleted.');
        return redirect()->route('turisticsites.index');
    }
}
