<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use Session;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $permissions = Permission::orderBy('id','name')->paginate(7);
        return view('permission.index')->withPermissions($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'name'        =>    'required',
            'description' =>    'required'
         ));
         $permission = new Permission;
         $permission->name = $request->name;
         $permission->description = $request->description;
 
         $permission->save();
 
         Session::Flash('success','New Province was successfully created!');
 
         return redirect()->route('permission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        //$city =   City::find($permission->city_id);
        return view('permission.show')->withPermission($permission);
        //return view('permission.show')->withProvince($permission)->withCity($city);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        //dd($permission);
        //$cities = City::all();
        //dd($cities);
        //$city = City::find($permission->city_id);
        //dd($city);
        return view('permission.edit')->withPermission($permission);
        //return view('permission.edit')->withProvince($permission)->withCity($city)->withCities($cities);
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
        //dd($request);
        $this->validate($request,array(
            'name'           =>'required',
            'description'=>'required',
        ));
         $permission = Permission::find($id);
         $permission->name = $request->name;
         $permission->description = $request->description;
         
         $permission->save();
 
         Session::Flash('success','New Province was successfully UPdate!');
         
         return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();

        return redirect()->route('permission.index');
    }
}
