<?php

use App\Models\blog;
use App\Models\blogs;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\blogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('blog.index',[
        'blogs' => blog::all()
    ]);
});
//show single blog
Route::get('/blog/{blog}', [blogController::class, 'show']);



Route::get('/admin', function () {
    return view('admin');
});

Route::get('/create_blog', [blogController::class, 'create_blog']);

//show register page
Route::get('/register', [UserController::class, 'register']);

//show login form
Route::get('/login', [UserController::class, 'login']);

//create new user
Route::post('/users', [UserController::class, 'store']);

//login
Route::post('/users/authenticate', [UserController::class, 'authenticate']);


