<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

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
        return view('admin/courses.createcourse');
        // Course::create();
    }
    public function add(Request $request ) {
        // dd($request);
        Course::create(['course_name' => $request->course_name,
        'course_about'=> $request->course_about ,'price'=>$request->price,'user_ID'=> 1,'assignment_ID'=>1]);
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
