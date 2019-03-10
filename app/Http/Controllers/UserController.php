<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phone_number'  => 'required',
            'email'         => 'required|email',
            'city'          =>  'required|max:70',
            'state'         => 'required|max:60',
            'country'       => 'required|max:60',
            'password'      => 'required|min:6',
            'address'       => 'required|max:100',
            'last_name'     => 'required|max:50',
            'first_name'    => 'required|max:50',
            'postal_code'   => 'required|max:15',
            'c_password'    => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $ship = $request->only([
            'first_name', 'last_name', 'email',
            'password', 'phone_number', 'city',
            'state', 'country', 'address', 'postal_code', 'image',
        ]);
        $ship['password'] = bcrypt($ship['password']);

        $user = User::create($ship);

        return view( compact('user'));
    }

    public function login(Request $request)
    {
        $status = 401;
        $response = ['error' => 'Unauthorised'];

        if (Auth::attempt($request->only(['email', 'password']))) {
            $status = 200;
            $response = [
                'user' => Auth::user()
            ];
        }

        return response()->json($response, $status);
    }
}
