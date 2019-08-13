<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Auth;
use Image;
use Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

use Mail;
use RegistersUsers\Http\Request\UserRequest;
//use Illuminate\Http\Request;
//use Validator;
//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Support\Facades\Mail;        
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
    public function dashboard()
    {
        return view('admin.dashboard');
        
    }
    public function index()
    {
        $users = User::orderBy('id','name')->paginate(5);
        $role = new Role();
        $roles = Role::all();
        //$role = Role::Find(1);
        //dd($role);
        return view('admin.admin_user.index')->withUsers($users)->withRoles($roles);
        
    }
    public function create()
    {
/*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
*/  
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
        $code = $this->generateCodigo(6);               
        $roles = Role::all();
        
        $data = array();
/*        $this->validate($request,[
            'name' => 'required|email',
            'last_name' => 'required|min:6'
        ]);*/
        $validator =  Validator::make($data, [
            'name'          => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            //'email'       => 'required|string|email|max:255|unique:users',
            //'ident_card'  => 'required|numeric|max:255',
            //'born_in'     => 'required|string|max:255',
            //'date_born'   => 'required|date|date_format:Y-m-d',
           //'avatar'      => 'required|string|max:255',
        ]);
        
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = 'avatar_user' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(128,120)->save(public_path('/uploads/avatar_user/' . $filename));
        }
        //dd($validator);
        $user = new User();
        
        $user->name         = $request->name;
        $user->last_name    = $request->last_name;
        $user->email        = $request->email;    
        $user->ident_card   = $request->ident_card;
        $user->born_in      = $request->born_in;
        $user->date_born    = $request->date_born;
        $user->password     = bcrypt(request('password'));
        $user->role_id      = $request->role_id;
        $user->avatar       = $filename;
        $user->code         = $code;
        $user->activate     = 0;
        $user->save();

        $role = Role::Find($request->role_id);
        $user->roles()->attach($role);

        $email = $request->email;
        $dates = array('code' => $user->code, 'name'=> $user->name);
        //dd($dates);
        $this->Email($dates,$email);

        return redirect()->route('user.index');
     }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $role = new Role();
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
        $role = new Role();
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
        $user->last_name    = $request->input('last_name');
        $user->email        = $request->input('email'); 
        $user->ident_card   = $request->input('ident_card');
        $user->born_in      = $request->input('born_in');
        $user->date_born    = $request->input('date_born');
        $user->password     = bcrypt(request('password'));
        $user->avatar       = $request->input('avatar');
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
        $user->role_id= $user->role_id;
        $user->delete();
        return redirect()->route('user.index');
    }
/*
    public function complete(UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->active = 1;
        $user->save();
        return redirect::to('login');
    }
 */   
    public function generateCodigo($longitud){
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for ($i=1; $i < $longitud ; $i++) 
        {
            $key .= substr($pattern, mt_rand(0, strlen($pattern)-1),1);
        }
            return $key;
        
    }

    public function Email($dates,$email){
        //dd($dates);
        Mail::send('emails.plantilla',$dates,function($message)use ($email){
            $message->subject('Bienvenido a la Plataforma');
            //dd($email); 
            $message->to($email);
            $message->from('no-reply@gmail.com','Patrmonios Bolivia');
        });
    }

}
