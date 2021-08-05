<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAddController;
use App\Http\Controllers\AdminUpdateController;

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

  Route::get('authvalue' , [AdminController::class , 'adminDashboard'])->name('authvalue');

  Route::get('admin/admin' , [AdminController::class , 'Admin'])->name('admin');
  // This is developer view route
  
  Route::get('admin/developer' , [AdminController::class , 'Developers'])->name('developer');
  Route::get('admin/developer-edit-view/{id}/edit' , [AdminController::class , 'Developers_edit_view'])->name('developer.edit.view');
  Route::get('admin/developer/{id}/delete' , [AdminController::class , 'Developers_delete'])->name('developer.delete');
  // This is developer view route

  Route::get('admin/designers' , [AdminController::class , 'Designers'])->name('designers');
  Route::get('admin/designer-edit-view/{id}/edit' , [AdminController::class , 'Designer_edit_view'])->name('designer.eidt.view');
  Route::get('admin/designer/{id}/delete' , [AdminController::class , 'Designer_delete'])->name('designer.delete');
   // This is designer view route

   Route::get('admin/clients' , [AdminController::class , 'Client'])->name('client');
   Route::get('admin/add-clients' , [AdminController::class , 'add_Client'])->name('add.clients');
   Route::get('admin/{id}/client-edit-view' , [AdminUpdateController::class , 'client_edit_View'])->name('client.edit.view');
   Route::post('admin/update.client.listing' , [AdminAddController::class , 'Update_client_listing'])->name('update.client.listing');


  
  Route::get('admin/registration' , [AdminController::class , 'Registration'])->name('registration');
   // This is registration view route


  Route::group(['middleware' => 'AuthCheck:admin' , 'prefix' => 'admin' , 'as' => 'admin.'], function(){
      Route::get('/dashboardss', [App\Http\Controllers\AdminController::class , 'Admin']);
  });
  // This route Admin can access to give right 

  Route::group(['middleware' => 'AuthCheck:developer' , 'prefix' => 'developer' , 'as' => 'developer.'], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class , 'Developer'])->name('dev');
  });
  // This route Developer can access to give right 


});