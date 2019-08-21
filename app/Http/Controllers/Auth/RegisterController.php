<?php

namespace App\Http\Controllers\Auth;

use App\Roles;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
//use Registro\Http\Controller\Controller;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/respuesta';
    protected $redirectTo = '/respuesta';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     
    
    function generarCodigo($longitud){
        $key = '';
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
        $max = strlen($pattern)-1;
        for ($i=0; $i < $longitud ; $i++) $key = $pattern(mt_rand(0,$max));
            return $key;
    }
*/
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|confirmed|min:8|max:50|regex:/^(?=.*[a-z|A-Z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/',  
            /*'password' => 'required|string|min:6|confirmed',*/
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $code = $this->generarCodigo(6);
        $email = $data['email'];
        $dates = array('name'=>$data['name'],'code' =>$code);
        $this->Email($dates,$email);
        //dd($data);
        return User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'code'      => $code,
        ]);
        $roles = Role::all();
        $role = Role::Find(1);
        $user->roles()->attach(1);

    }

    function Email($dates,$email){
        //dd($dates);
        Mail::send('email.plantilla',$dates,function($message) use ($email){
            $message->subject('Bienvenido a la Plataforma de Patrimonios de Bolvia');
            $message->to($email);
            $message->from('no-replay@geeklife.com.ve','Geeklife');
        });
    }

}
