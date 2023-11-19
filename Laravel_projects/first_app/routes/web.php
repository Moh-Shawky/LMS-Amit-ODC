<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;
use Illuminate\Routing\RouteRegistrar;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.   ll
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

#route that return view(html page)
//Route::get('users',function () {
//    return view('users');
//});

// Route::get('users', function (Request $request) {
//     // dd($request);
//     $username = "MOH";
//     // ddd($username);

//     return view('users', compact('username'));
// });

#route return value at a new page using get method
#by this method we can detect input type
// Route::get('users/{username}',function ($name){
//     if($name=="shawky") {
//         return "Prince";
//     }
//     else{
//         return "normal";
//     }
// });

// Route::get('/listings', function () {
//     return view(
//         'listings',
//         [
//             'Heading' => 'LISTING',
//             'listings' => listing::all()
//         ]
//     );
// });
// Route::get('/listings/{id}', function ($id) {
//     return view('listings', [
//         'Heading' => 'LISTING',
//         'listings' => listing::find($id)
//     ]);
// });
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/logindata', [UserController::class, 'auth'])->name('logindata');

// Route::middleware('auth.user')->group(function () {
    // Your protected routes go here
    // Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    // ...

//Admin Routes

Route::get("/createadmin", [AdminController::class, 'create']);
Route::post("/addadmin", [AdminController::class, 'store'])->name('addadmin');
Route::get("/admin/{id}", [AdminController::class, 'show']);
Route::post("/adminupdate", [AdminController::class, 'update'])->name('adminupdate');
Route::get("/deleteadmin/{id}", [AdminController::class, 'delete']);
Route::get("/admin", [AdminController::class, 'index']);



Route::get("/register", [AdminController::class, 'register']);

Route::post("/register", [AdminController::class, 'register']);

// logindata

// Route::get('/login');
// Route::get('/courses',[Course::class])

//Courses Routes
Route::get('/admincourses', [CourseController::class, 'index']);
Route::get('/admincourse/{id}', [CourseController::class, 'show']);
Route::get('/coursedelete/{id}', [CourseController::class, 'delete']);
Route::get('/createcourse', [CourseController::class, 'create'])->name('createcourse');
Route::post('/addcourse', [CourseController::class, 'store'])->name('addcourse');
Route::post('/courseupdate', [CourseController::class, 'update'])->name('courseupdate');

//Instructors Routes
Route::get('/instructors', [InstructorController::class, 'index']);
Route::get('/createinstructor', [InstructorController::class, 'create']);
Route::post('/addinstructor', [InstructorController::class, 'store'])->name('addinstructor');
Route::get('/instructordelete/{id}', [InstructorController::class, 'delete']);

//Students Routes
Route::get('/students', [StudentController::class, 'index']);
Route::get('/studentdelete/{id}', [StudentController::class, 'delete']);


//User Routes
Route::get('/', [UserController::class, 'index']);
// Route::get('/home', [UserController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', [UserController::class, 'index'])->name('home');

Route::get('/about', [UserController::class, 'about']);
Route::get('/courses', [UserController::class, 'courses']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/contact', [UserController::class, 'contact']);
Route::post('/createuser', [UserController::class, 'create'])->name('createuser');



// });