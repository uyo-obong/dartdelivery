<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function profile($id)
    {
        $admins = Admin::with('role')->where('id', $id)->first();
        return view('admin.Auth.core_admin.adminprofile', compact('admins'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'password' => ['confirmed'],
//            'email'    => ['string', 'email', 'max:255', 'unique:admins'],
        ]);

        $updateAdmmin = Admin::where('id', $id)->first();
        $updateAdmmin->name  = $request->name;
        $updateAdmmin->email = $request->email;

        if (trim(Input::get('password')) != '') {
            $updateAdmmin->password = Hash::make(trim(Input::get('password')));
        }

        $updateAdmmin->save();

        return redirect()->back()->with('AdminProfile', 'Your Profile Has Been Updated.');

    }
}
