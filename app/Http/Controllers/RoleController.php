<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $roles = Role::orderBy('id','name')->paginate(6);
        return view('role.index')->withRoles($roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        //dd($permissions);
        return view('role.create')->withPermissions($permissions);
        //return view('turisticsite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permissions = Permission::all();
        
        //dd($permission);
            //menor a 4 MB IMAGEN
        $role = new Role();
        $role->name               = $request->name;
        $role->description        = $request->description;
        $role->status             = $request->status;

        $role->save();

        $permission = Permission::Find($request->permission_id);
        $role->permissions()->attach($permission);
        

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);
        //$roles = Turisticsite::with('permissions');
        foreach ($role->permissions as $permission) 
        {
           $permission->id.$permission->name;
        }
       return view('role.show')->withRole($role)->withPermission($permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions= Permission::all();
        $role = Role::find($id);
        foreach ($role->permissions as $permission) 
        {
            $permission->id;
        }
    
        return view('role.edit')->withRole($role)->withPermission($permission)->withPermissions($permissions);
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
        $role = Role::find($id);
        $permissions = Permission::all();
        foreach ($role->permissions as $permission) 
        {
            $permission->id;
        }
            //guardar en la base de datos


        $role->name               = $request->input('name');
        $role->description        = $request->input('description'); 
        $role->status             = $request->input('status');
       // $role->recomendation      = $request->input('recomendation');

        $role->save();
        $role->permissions()->detach();

        $permission = Permission::Find($request->permission_id);
        $role->permissions()->sync($permission);

        return redirect()->route('role.show', $role->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->permissions()->detach($permission);
        $role->delete();
        return redirect()->route('role.index');
    }
}
