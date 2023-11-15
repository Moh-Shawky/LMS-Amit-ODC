<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
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

Route::get('users', function (Request $request) {
    // dd($request);
    $username = "MOH";
    // ddd($username);

    return view('users', compact('username'));
});

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

Route::get('/listings', function () {
    return view(
        'listings',
        [
            'Heading' => 'LISTING',
            'listings' => listing::all()
        ]
    );
});
Route::get('/listings/{id}', function ($id) {
    return view('listings', [
        'Heading' => 'LISTING',
        'listings' => listing::find($id)
    ]);
});


//Admin Routes
Route::get("/admin", [AdminController::class,'index']);
Route::get('/login', [AdminController::class,'login']);
Route::get("/register", [AdminController::class,'register']);


// Route::get('/login');
// Route::get('/courses',[Course::class])

//Courses Routes
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{id}', [CourseController::class, 'show']);
Route::get('/coursedelete/{id}', [CourseController::class, 'delete']);
Route::get('/createcourse',[CourseController::class,'create'])->name('createcourse');
Route::post('/addcourse',[CourseController::class,'add'])->name('addcourse');
Route::post('/courseupdate',[CourseController::class,'update'])->name('courseupdate');


//User Routes
Route::get('/',function(){
    return view('frontend/index');
});
Route::get('/about',function(){
    return view('frontend/about');
});