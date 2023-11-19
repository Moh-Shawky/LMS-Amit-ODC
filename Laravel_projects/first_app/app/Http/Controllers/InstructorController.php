<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class InstructorController extends Controller
{
    public function index()
    {
        $instructors = User::where('role', 2)->get();
        // dd($instructors);
        $data = DB::table('courses')
        ->join('users', 'users.user_id', '=', 'courses.user_ID')
        ->select()
        ->get();
        // dd($data);
        // dd($instructors);
        // $Courses = Course::where('id', $instructors->instructor_course)->get();

        return view('admin/instructors.instructor', ['Instructors' => $instructors, 'courses' => $data]);
    }
    public function create()
    {
        return view('admin/instructors.createinstructor');

    }
    public function store(Request $request){
        User::create(['user_name' => $request->Instructor_name,
        'user_info'=> $request->Instructor_info ,'password'=>Hash::make($request->Instructor_password),'email'=>$request->Instructor_email,'role'=>$request->role]);
        return redirect('/instructors');
    }
    public function delete($id){
        User::where('user_id', $id)->delete();
        return redirect('/instructors');
    }
}
