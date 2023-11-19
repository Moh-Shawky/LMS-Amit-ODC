<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


$user = Auth::user();
class UserController extends Controller
{


    //roles:
    //role -> 1 <- student
    //role -> 2 <- instructor
    //role -> 3 <- admin
    
    public function login(Request $request)
    {

        return view('admin/auth.login');

    }
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
 
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            // dd($credentials['password']);
            return redirect('home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');

    }

    public function create (Request $request)
    {
        // dd($request);

        User::create([
            'user_name' => $request->username,'user_info'=>'student',
            'password' => Hash::make($request->password),
             'email' => $request->email, 'role' => 1
        ]);
        return redirect('/login');
    }

    public function index()
    {
        return view('frontend/index');
    }
    public function about()
    {
        return view('frontend/about');
    }
    public function courses()
    {
        return view('frontend/courses');
    }
    public function blog()
    {
        return view('frontend/blog');
    }
    public function contact()
    {
        return view('frontend/contact');
    }
}
