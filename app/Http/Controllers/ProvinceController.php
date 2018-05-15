<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Province;
use App\City;
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
        //dd($cities);
       $this->validate($request,array(
           'name' =>'required|max:255',
           'name' =>'required|max:255',
           'name' =>'required|max:255',
           'name' =>'required|max:255',
           'name' =>'required|max:255',
        ));
        $tag = new Tag;
        $tag->name = $request->name;
        $tag->save();

        Session::Flash('success','New Tag was successfully created!');

        return redirect()->route('tags.index');
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
