<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminList()
    {
        $admins = Admin::all();
        return view('admin.Auth.core_admin.adminList', ['admins' => $admins]);
    }

    public function viewAdmin()
    {
        return view('admin.Auth.core_admin.addAdmin');
    }

    public function storeAdmin(Request $request)
    {
        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        Admin::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return back()->with('Admin', 'Admin Has Been Added Successfully!.');

    }

    public function editAdmin($id)
    {
        $viewAdmin = Admin::where('id', $id)->first();
        return view('admin.Auth.core_admin.editAdmin', [ 'viewAdmin' => $viewAdmin]);
    }


    public function updateAdmin(Request $request, $id)
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

        return back()->with('Admin', 'Admin Has Been Updated Successfully!.');

    }

    public function destroy($id)
    {
        Admin::where('id', $id)->delete();
        return back()->with('delete', 'Admin Has Been Deleted Successfully!.');
    }
}
