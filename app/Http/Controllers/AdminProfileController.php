<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if ($request->password ||  $request->has('email'))
        {
            $updateAdmmin->email = $request->email;
            $updateAdmmin->password = Hash::make($request->password);
        }

        $updateAdmmin->save();

        return back()->with('AdminProfile', 'Your Profile Has Been Updated.');

    }
}
