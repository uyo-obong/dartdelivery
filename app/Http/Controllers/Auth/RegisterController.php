<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/send-parcel';

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
     */
    public function showRegistrationForm()
    {
       $countries = DB::table("countries")->pluck("name","id");
       return view('auth.register', compact('countries'));
       
   }

   protected function validator(array $data)
   {
    return Validator::make($data, [
        'state'        => ['required'],
        'city'         => ['required'],
        'country'      => ['required'],
        'address'      => ['required'],
        'postal_code'  => ['required'],
        'phone_number' => ['required'],
        'first_name'   => ['required', 'string', 'max:255'],
        'first_name'   => ['required', 'string', 'max:255'],
        'password'     => ['required', 'string', 'min:6', 'confirmed'],
        'email'        => ['required', 'string', 'email', 'max:255', 'unique:users'],
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
        return User::create([
            'city'         => $data['city'],
            'state'        => $data['state'],
            'email'        => $data['email'],
            'country'      => $data['country'],
            'address'      => $data['address'],
            'first_name'   => $data['first_name'],
            'last_name'    => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'postal_code'  => $data['postal_code'],
            'password'     => Hash::make($data['password']),
        ]);
    }
}
