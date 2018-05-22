<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
use Image;
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
        $roles = Role::all();

        return view('admin.admin_user.index')->withUsers($users);
        
    }
    public function create()
    {

        $roles = Role::all();
        //dd($roles);how_to_come
        return view('admin.admin_user.create')->withRoles($roles);
        //return view('turisticsite.create');

    }

    public function store(Request $request)
    {   
        /*$this->validate($request,[
            'select_file' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);*/                           
        $roles = Role::all();

        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = 'avatar_user' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(128,120)->save(public_path('/uploads/avatar_user/' . $filename));
        }
        //Hash::make
        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;    
        $user->password     = $request->password;
        $user->avatar       = $request->avatar;
        $user->save();

        $role = Role::Find($request->role_id);
        $user->roles()->attach($role);
        
        return redirect()->route('user.index');
     }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        //dd($user);
        foreach ($user->roles as $role) 
        {
           $role->id;
        }
       return view('admin.admin_user.show')->withUser($user)->withRoles($roles)->withRole($role);
    }

    public function edit($id)
    {

        $user = User::find($id);
        $roles= Role::all();
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
        $user->roles()->sync($role);

        //Session::flash('success','This TuristicSite was suyccessfully update.');
        return redirect()->route('user.show', $user->id);

    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('user.index');
    }
}
