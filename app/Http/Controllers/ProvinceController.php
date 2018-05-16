<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
use Session;
class ProvinceController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $provinces = Province::all();
        //dd($provinces);
        return view('province.index')->withProvinces($provinces);
    }

    public function create()
    {
        $cities = City::all();
        return view('province.create')->withCities($cities);
        
    }

    public function store(Request $request)
    {
        $cities = City::all();
        //dd($request);
         $this->validate($request,array(
           'name'           =>'required',
           'geolocalization'=>'required',
           'long'           =>'required',
           'lat'            =>'required',
           'city_id'        =>'required',
        ));
        $province = new Province;
        $province->name = $request->name;
        $province->geolocalization = $request->geolocalization;
        $province->long = $request->long;
        $province->lat = $request->lat;
        $province->city_id = $request->city_id;

        $province->save();

        Session::Flash('success','New Province was successfully created!');

        return redirect()->route('province.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
