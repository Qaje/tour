<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Image;
use App\User;
use App\Role;
use Illuminate\Foundation\Auth\RegisterUsers;
use Illuminate\Support\Facades\Input;

use Mail;
use Redirect;
//use App\Http\Request\UserRequest;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    //use RegisterUsers;
    protected $redirectTo ='/homeuser';

    public function __construct()
    {

        $this->middleware('auth',['except' => ['uservalidate','validation','activate','complete']]);
        //dd($this);
    }

    public function validation(Request $request)
    {
        $fid = 0;
        $vare = "";
        $vare = $request->email;
        $user = new User(); 
        $users = User::all();
        $userfind = new User(); 
        foreach ( $users as $user )
        {
            if( $user->email == $vare )
                $fid = $user->id;
        }
        if( $fid > 0 )
        {   
            $userfind = User::find($fid);
            if($request->name == $userfind->name){
                if($request->last_name == $userfind->last_name){
                    if($request->email == $userfind->email){
                        if($request->ident_card == $userfind->ident_card){
                            if($request->born_in == $userfind->born_in){
                                if($request->date_born == $userfind->date_born){
                                    //$vk = $userfind->code;
                                    //return $this->Email($request,$email);
                                    //dd($user->password);
                                    $user = User::find($fid);
                                    $user->password = bcrypt($request->password);
                                    $user->activate = 0;
                                    $user->save();
                                    $email = $user->email;
                                    //dd($user);
                                    $dates = array('code' => $user->code, 'name'=> $user->name);
                                    //dd($dates);
                                    $this->Email($dates,$email);
                                    return redirect::to('respuesta');

                                }
                            }
                        }
                    }
                }
            }
        }
        else{
            dd('Revise los datos');   
        }
    }

    public function index()
    {
        return view('user.index');
    }

    public function profile(Request $request)
    {
        return view('user.profile',array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request)
    {
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = 'avatar' . time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(120,120)->save(public_path('/uploads/avatars/' . $filename));
 
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('user.profile',array('user' => Auth::user()) );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function rememberpass()
    {
        $this->middleware('guest');
        return view('user.remember');
    }

    public function activate($code)
    {
 
        $users = User::where('code',$code);
        $exist = $users->count();
        $user = $users->first();
       if($exist == 1 and $user->activate == 0 )
        {
            $id = $user->id;
            return view('auth.date_complete',compact('id'));
        }else{
            return redirect::to('/');
        }
    }

    public function validateCredentials()
    {       
        $email = Input::post('email');
        $password = Input::post('password');
        return "Email: " . $email . "Password: " . $password;
    }

    public function Email($dates,$email){
        //dd($dates);
        Mail::send('emails.plantilla',$dates,function($message)use ($email){
            $message->subject('Bienvenido a la Plataforma');
            $message->to($email);
            $message->from('no-reply@gmail.com','Patrimonios Bolivia'); 
        });
    }

    public function validator(array $data)
    {
        return validator::make($data, [
                'name' => 'required|max:255',
                'email' => 'required|email|max:255|unique:users',
        ]);
    }

    public function complete(UserRequest $request,$id)
    {
      //dd($request);
      $user = User::find($id);
      $user->password = bcrypt($request->password);
      $user->activate = 1;
      $user->save();
      return redirect::to('homeuser');
    }
}
