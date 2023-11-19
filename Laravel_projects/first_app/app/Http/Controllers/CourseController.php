<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{


    public function index()
    {
        $courses = Course::all();
        return view('admin/courses.courses',['courses' => $courses]);


        // dd($courses);
        // return view('');
    }
    public function show($id) {
        $course = Course::find($id);
        return view('admin/courses.updatecourse',['course' => $course]);
    }
    public function create() {
        $instructors = User::where('role', 2)->get();
        // $data = DB::table('users')
        // ->join('courses', 'users.user_id', '=', 'courses.user_ID')
        // ->select('users.user_name','users.user_id')
        // ->get();
        return view('admin/courses.createcourse',['instructors'=>$instructors]);
        // Course::create();
    }
    public function store(Request $request ) {
        // dd($request);
        Course::create(['course_name' => $request->course_name,
        'course_about'=> $request->course_about ,'price'=>$request->price,'user_ID'=> $request->course_instructor,'assignment_ID'=>1]);
        return $this->index();
    }
    public function update(Request $request) {
        Course::where('id', $request->id)->update(
            ['course_name' => $request->course_name,'course_about'=> $request->course_about ,'price'=>$request->price]);
            return $this->index();
        }
    public function delete($id){
        Course::where('id', $id)->delete();
        return $this->index();
    }
}

