<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('can:view');
    }

    public function adminList()
    {
        $alladmin = Role::all();
        $admins = Admin::all();
        return view('admin.Auth.core_admin.adminList', [
            'admins' => $admins,
            'alladmin' => $alladmin,
        ]);
    }

    public function viewAdmin()
    {


        $roles = Role::all();
        return view('admin.Auth.core_admin.addAdmin', compact('roles'));
    }

    public function storeAdmin(Request $request)
    {


        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $admin = Admin::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        $admin->role()->sync($request->role);

        return back()->with('Admin', 'Admin Has Been Added Successfully!.');

    }

    public function editAdmin($id)
    {
        $roles   = Role::all();
        $viewAdmin = Admin::where('id', $id)->first();
        return view('admin.Auth.core_admin.editAdmin', [
            'viewAdmin' => $viewAdmin,
            'roles'     => $roles
        ]);
    }


    public function updateAdmin(Request $request, $id)
    {
//        dd($request->all());

        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'password' => ['confirmed'],
//            'email'    => ['string', 'email', 'max:255', 'unique:admins'],
        ]);

        $updateAdmmin = Admin::where('id', $id)->first();
        $updateAdmmin->name  = $request->name;
        $updateAdmmin->email  = $request->email;

        if (trim(Input::get('password')) != '') {
            $updateAdmmin->password = Hash::make(trim(Input::get('password')));
        }

        //dd($updateAdmmin);
        $updateAdmmin->save();

        $updateAdmmin->role()->sync($request->input('role'));

        return back()->with('Admin', 'Admin Has Been Updated Successfully!.');

    }

    public function destroy($id)
    {
        Admin::where('id', $id)->delete();
        return back()->with('delete', 'Admin Has Been Deleted Successfully!.');
    }
}
