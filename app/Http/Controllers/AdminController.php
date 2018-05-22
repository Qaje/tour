<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','name')->paginate(5);
        //dd($users);
        return view('admin.admin_user.index')->withUsers($users);
        
    }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        foreach ($user->roles as $role) 
        {
           $role->id;
       }
       return view('admin.admin_user.show')->withUser($user)->withRoles($roles)->withRole($role);
    }

    public function edit($id)
    {

        $roles= Role::all();
        $user = User::find($id);
        foreach ($user->roles as $role) 
        {
            $role->id;
        }
    
        return view('admin.admin_user.edit')->withUser($user)->withRole($role)->withRoles($roles);
    }

    public function update(Request $request, $id)
    {
        //dd($request);
        $user = User::find($id);
        $roles = Role::all();
        //dd($role);
        foreach ($user->roles as $role) 
        {
            $role->id;
        }   
        //guardar en la base de datos
        $user->name         = $request->input('name');
        $user->email            = $request->input('email'); 
       
        $user->save();
        //dd($request);
        
        //$user->roles()->detach();

        $role = role::Find($request->role_id);
        $user->roles()->attach($role);

        //Session::flash('success','This TuristicSite was suyccessfully update.');
        return redirect()->route('admin.admin_user.show', $user->id);

    }
        public function destroy($id)
    {
        $user = User::find($id);
        $user->roles()->detach($role);
        $user->delete();
        return redirect()->route('admin.admin_user.index');
    }
}
