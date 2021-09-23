<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminAddController;
use App\Http\Controllers\AdminUpdateController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\rolePermission;


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

// Route::get('/dashboard', function () {
//   Role::create(['name' => 'Edit']);
//   return view('dashboard');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {   
//   return view('dashboard');
// })->name('dashboard');

// Route::get('redirects' , 'App\Http\Controllers\HomeController@index');

Route::group(['middleware' => 'auth'] , function(){

//   Route::get('/dashboard', function () {
//   // Role::create(['name' => 'Edit']);
//   return view('dashboard');
// });

Route::get('admin/dashboard' , [AdminController::class , 'adminDashboard'])->name('dashboard');

  Route::get('admin/feculty-registration', function () {
    return view('admin.feculty-registration');
  })->name('feculty-registration');

  Route::get('admin/registration' , [AdminController::class , 'Registration'])->name('registration');
  Route::post('admin/user-registered' , [AdminAddController::class , 'user_Registered'])->name('user.registered');
  Route::post('admin/student-registered' , [AdminAddController::class , 'student_Registered'])->name('student.registered');

  Route::get('authvalue' , [AdminController::class , 'adminDashboard'])->name('authvalue');

  Route::get('admin/admin' , [AdminController::class , 'Admin'])->name('admin');
  // This is developer view route
  
  Route::get('admin/student' , [AdminController::class , 'Student'])->name('student.pp');
  Route::get('admin/student-edit-view/{id}/edit' , [AdminUpdateController::class , 'Student_edit_view'])->name('student.edit.view');
  Route::post('admin/student-edit/{id}/edit' , [AdminUpdateController::class , 'Student_edit_listning'])->name('update.student.listing');
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

   
   Route::get('admin/class-routine' , [AdminController::class , 'Class_routine'])->name('Class.Routine');
   Route::post('admin/class-dependent-dropdown' , [AdminController::class , 'DependentDropdown_for_class'])->name('class-dependent-dropdown');
   Route::post('admin/class-routine-add' , [AdminAddController::class , 'Add_class_routine'])->name('class-routine-add');
   Route::get('admin/fetch' , [AdminController::class , 'fetch'])->name('dependentDropdown');
   Route::post('admin/getSubject' , [AdminController::class , 'get_Subject'])->name('getSubject');
  //  Route::post('dynamic_dependent/fetch', 'DynamicDependent@fetch')->name('dynamicdependent.fetch');
  // Class Routine

  
  Route::get('admin/class-room' , [AdminController::class , 'Class_room'])->name('Class.Room');
  Route::post('admin/add-class-room' , [AdminAddController::class , 'add_Class_Room'])->name('add.class.room');
  // Class rooms

  
  Route::get('admin/department' , [AdminController::class , 'Department'])->name('Department');
  Route::post('admin/add-department' , [AdminAddController::class , 'add_Department'])->name('add.Department');
  // Add Department to set their roles
  

   // store data into database using ajax
  Route::get('ajax/request', [StudentController::class, 'ajaxRequest'])->name('ajax.request');
  Route::post('ajax/request/store', [StudentController::class, 'ajaxRequestStore'])->name('ajax.request.store');
    // Ajax code ends


  Route::get('admin/student-class-add-view' , [AdminController::class , 'student_Class_add_View'])->name('student-class-add-view');
  Route::post('admin/student-class-add' , [AdminAddController::class , 'student_Class_add'])->name('student-class-add');
  Route::get('admin/class-Active/{id}/edit' , [AdminUpdateController::class , 'student_Registered_with_class'])->name('class-Active');
  // This is student class add view route

  Route::get('admin/profile' , [AdminController::class , 'profile'])->name('profile');
  // Profile route to view all student and teacher and also admin 

  
  Route::get('admin/{id}/profiles', [AdminController::class, 'Teacher_profile'])->name('teacher.profile');


  Route::get('admin/roles' , [rolePermission::class , 'Roles'])->name('roles');
  Route::post('admin/create-roles' , [rolePermission::class , 'Roles_create'])->name('create-roles');
  // Roles Router
  // Using this route pages show on dashboard

  Route::get('admin/permission' , [rolePermission::class , 'Permission'])->name('permission');
  Route::post('admin/create-permission' , [rolePermission::class , 'Permission_create'])->name('create-permission');
  // Permission Router
  // Using this route pages show on dashboard

  Route::group(['middleware' => 'AuthCheck:admin' , 'prefix' => 'admin' , 'as' => 'admin.'], function(){
      Route::get('/dashboardss', [App\Http\Controllers\AdminController::class , 'Admin']);
  });
  // This route Admin can access to give right 

  Route::group(['middleware' => 'AuthCheck:developer' , 'prefix' => 'developer' , 'as' => 'developer.'], function(){
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class , 'Developer'])->name('dev');
  });
  // This route Developer can access to give right 

 
 

});  // End of middleware 