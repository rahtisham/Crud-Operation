<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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
    return view('welcome');
});
Route::get('/admin', function () {
  return view('admin');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('redirects' , 'App\Http\Controllers\HomeController@index');

Route::group(['middleware' => 'auth'] , function(){

  Route::get('Admin-Dashboard' , [AdminController::class , 'adminDashboard'])->name('Admin.Dashboard');


  Route::group(['middleware' => 'AuthCheck:admin' , 'prefix' => 'admin' , 'as' => 'admin.'], function(){
      Route::get('/dashboardss', [App\Http\Controllers\AdminController::class , 'Admin']);
  });
  // This route Admin can access to give right 

  Route::group(['middleware' => 'AuthCheck:developer' , 'prefix' => 'developer' , 'as' => 'developer.'], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class , 'Developer'])->name('dev');
  });
  // This route Developer can access to give right 


});