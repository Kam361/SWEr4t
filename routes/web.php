<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/index', [HomeController::class, 'index'])->name('index');
Route::get('/index1', [HomeController::class, 'index1'])->name('index1');
Route::get('/index2', [HomeController::class, 'index2'])->name('index2');
Route::get('/index3', [HomeController::class, 'index3'])->name('index3');
Route::get('/dashboard_users', [HomeController::class, 'dashboard_users'])->name('dashboard.users');
Route::post('/save_users', [HomeController::class, 'save_users'])->name('save_users');
Route::get('/user_edit/{id}', [App\Http\Controllers\HomeController::class, 'user_edit'])->name('user.edit');
Route::post('/user_update/{id}', [App\Http\Controllers\HomeController::class, 'user_update'])->name('user_update');
Route::get('/user_delete/{id}', [App\Http\Controllers\HomeController::class, 'user_delete'])->name('user_delete');
Route::get('/user_add', [App\Http\Controllers\HomeController::class, 'user_add'])->name('user_add');
Route::post('/user_save', [App\Http\Controllers\HomeController::class, 'user_save'])->name('user_save');


#admin
// Route::group(['middleware' => 'auth'], function (){

//     // Route::get('/home' , [
//     //     'uses' => 'HomeController@index' ,
//     //     'as' => 'admin.home'

//     // ])->middleware('admin');;

//     Route::get('/' , [
//         'uses' => 'HomeController@index' ,
//         'as' => 'a_dashboard'

//     ]);;


    // });
