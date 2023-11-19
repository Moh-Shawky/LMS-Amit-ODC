<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::where('role', 1)->get();
        $data = DB::table('courses')
            ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
            ->join('users', 'users.user_id', '=', 'student_courses.student_id')
            ->select()
            ->get();
        // dd($data);
        return view('admin/students.students', ['students' => $students, 'courses' => $data]);
    }
    public function delete($id){
        User::where('user_id',$id)->delete();
        return $this->index();
    }
}
