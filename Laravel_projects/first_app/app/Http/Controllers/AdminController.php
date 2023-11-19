<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function login(){
        return view('admin/auth.login');
    }
    public function index()
    {
        $admins = User::where('role', 3)->get();
        return view("admin.admin", ['admins' => $admins]);
    }
    public function show($id)
    {
        $admins = User::where('user_id', $id)->get();
        foreach($admins as $admin):
        return view('admin/updateadmin', ['admin' => $admin]);
        endforeach;
    }
    public function create()
    {
        return view('admin/createadmin');
    }
    public function store(Request $request)
    {

        User::create([
            'user_name' => $request->Admin_name,
            'user_info' => $request->Admin_info, 'password' => Hash::make($request->Admin_password),
             'email' => $request->Admin_email, 'role' => $request->role
        ]);
        return redirect('/admin');

    }
    public function update(Request $request)
    {
        User::where('user_id', $request->id)->update(
            ['user_name' => $request->Admin_name,
            'user_info' => $request->Admin_info, 'email' => $request->Admin_email,]
        );
        return redirect('/admin');

    }
    public function delete($id)
    {
        User::where('user_id', $id)->delete();
        return redirect('/admin');

        // return $this->index();
    }
}
