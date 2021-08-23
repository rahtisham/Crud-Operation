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
  
  Route::get('admin/student' , [AdminController::class , 'Student'])->name('student.pp');
  Route::get('admin/student-edit-view/{id}/edit' , [AdminUpdateController::class , 'Student_edit_view'])->name('student.edit.view');
  Route::get('admin/student/{id}/delete' , [AdminController::class , 'Student_delete'])->name('student.delete');
  // This is Student view route

  Route::get('admin/teacher' , [AdminController::class , 'Teacher'])->name('teacher');
  Route::get('admin/teacher-edit-view/{id}/edit' , [AdminUpdateController::class , 'Teacher_edit_view'])->name('teacher.eidt.view');
  Route::get('admin/teacher/{id}/delete' , [AdminController::class , 'Teacher_delete'])->name('teacher.delete');
   // This is Teacher view route

   Route::get('admin/clients' , [AdminController::class , 'Client'])->name('client');
   Route::get('admin/add-clients' , [AdminController::class , 'add_Client'])->name('add.clients');
   Route::post('admin/add-clients.listening' , [AdminAddController::class , 'add_Client_listening'])->name('add.clients.listening');
   Route::get('admin/{id}/client-edit-view' , [AdminUpdateController::class , 'client_edit_View'])->name('client.edit.view');
   Route::post('admin/update.client.listing' , [AdminAddController::class , 'Update_client_listing'])->name('update.client.listing');


   Route::get('admin/class' , [AdminController::class , 'Class'])->name('class');
   Route::post('admin/add-class' , [AdminAddController::class , 'add_Class_listing'])->name('add.class');
   // This is Class view route


   Route::get('admin/subject' , [AdminController::class , 'Subject'])->name('subject');
   Route::post('admin/subject' , [AdminAddController::class , 'add_Subjects_listing'])->name('Add.Subject');
   // This is Class view route


  
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