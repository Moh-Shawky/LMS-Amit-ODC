<?php

use App\Http\Controllers\CourseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\listing;

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


Route::get('/', [CourseController::class, 'index']);


Route::get("/admin", function () {
    return view("admin.home");
});
