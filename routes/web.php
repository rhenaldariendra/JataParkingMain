<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;



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
    return view('main.home');
});

Route::get('/profile_company', function () {
    return view('main.aboutus');
});
Route::get('/contactus', function () {
    return view('main.contactus');
});
Route::get('/ourteam', function () {
    return view('main.ourteam');
});
Route::get('/news', function () {
    return view('main.news');
});

<<<<<<< Updated upstream
Route::get('/admin', function () {
    return view('admin.main.home');
});
=======
Route::get('/project', [ProjectController::class, 'getProject']);


Route::get('/admin/project', [AdminController::class, 'getProject']);
Route::post('/admin/project/add', [AdminController::class, 'addProject']);
Route::delete('/admin/project/delete/{id}', [AdminController::class, 'deleteProject']);

Route::get('/admin/category', [AdminController::class, 'getCategory']);
Route::post('/admin/category/add', [AdminController::class, 'addCategory']);
Route::delete('/admin/category/delete/{id}', [AdminController::class, 'deleteCategory']);

Route::get('/admin/teams', [AdminController::class, 'getTeams']);
Route::post('/admin/teams/add', [AdminController::class, 'addTeams']);
Route::delete('/admin/teams/delete/{id}', [AdminController::class, 'deleteTeams']);

>>>>>>> Stashed changes
Route::get('/login', function () {
    return view('admin.login');
});
Route::post('/login/user', [AuthController::class, 'login']);

Route::get('/logout', function () {
    Auth::logout();
    Session::flush();
    Session::forget('user');
    return redirect('/login');
});





Route::get('/test', function () {
    return view('main.test');
});
