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
        $this->middleware('auth:admin');
    }
    /*
    public function __construct()
    {
        $this->middleware('guest:admin');
        //$this->middleware('guest:admin',['except'=>['logout']]);
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    */
    public function index()
    {
        $provinces = Province::orderBy('id','name')->paginate(7);
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
        $province = Province::find($id);
        $city =   City::find($province->city_id);
        return view('province.show')->withProvince($province)->withCity($city);
    }

    public function edit($id)
    {
        $province = Province::find($id);
        //dd($province);
        $cities = City::all();
        //dd($cities);
        $city = City::find($province->city_id);
        //dd($city);
        return view('province.edit')->withProvince($province)->withCity($city)->withCities($cities);
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        $this->validate($request,array(
           'name'           =>'required',
           'geolocalization'=>'required',
           'long'           =>'required',
           'lat'            =>'required',
           'city_id'        =>'required',
        ));
        $province = Province::find($id);
        $province->name = $request->name;
        $province->geolocalization = $request->geolocalization;
        $province->long = $request->long;
        $province->lat = $request->lat;
        $province->city_id = $request->city_id;

        $province->save();

        Session::Flash('success','New Province was successfully UPdate!');
        
        return redirect()->route('province.index');

    }

    public function destroy($id)
    {
        $province = Province::find($id);
        $province->delete();

        return redirect()->route('province.index');
    }
}
