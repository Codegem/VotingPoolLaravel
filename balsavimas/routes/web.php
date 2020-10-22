<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', 'HomeController@index');

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/voting/create', 'App\Http\Controllers\VoteController@create');
Route::post('/voting', 'App\Http\Controllers\VoteController@store');
Route::get('/voting/{voting}', 'App\Http\Controllers\VoteController@show');
Route::get('/visipool', 'App\Http\Controllers\VoteController@showall');

Route::post('/poolvote', 'App\Http\Controllers\PoolController@regvote');

Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::resource('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'all']);

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

