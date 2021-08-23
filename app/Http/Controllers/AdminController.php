<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use app\Models\User;
use App\Models\ClassAdd;
use App\Models\subjects;

class AdminController extends Controller
{
    // public function Admin(){
    //     return view('Admin.dashboard');
    // }
    // public function Developer(){
    //     return view('Developer.dashboard');
    // }
    public function adminDashboard()
    {  
        return view('Admin.dashboard');
    }

    public function Admin(Request $request)
    {

        $admin = User::all()->where('name' , 'Admin');
        return view('Admin.admin' , compact('admin'));
    }// Admin view Funciton

    public function Student(Request $request)
    {
        $student = User::all()->where('name' , 'Student');
        return view('Admin.student' , compact('student'));
    }// Developer view Funciton

    public function Teacher(Request $request)
    {
        $teacher = User::all()->where('name' , 'Teacher');
        return view('Admin.teacher' , compact('teacher'));
    }// Designers view Funciton

    public function Registration()
    {
        return view('Admin.registration');
    }// Registration view Funciton

    public function Client()
    {
        $clientShow = AdminAddModel::all();
        return view('Admin.clients' , ['clients' => $clientShow]);
    }// Client view Funciton


    // Functaionalities are used for edit Admin

    public function add_Client()
    {
        return view('Admin.add-clients');
    }// add_Client view Funciton

    public function Class()
    {
        $classShow = ClassAdd::all();
        return view('Admin.class' , compact('classShow'));
    } // class view function


    public function Subject()
    {
        $classToSubject = ClassAdd::all();
        $ViewSubjectListing = DB::table('subjects')->paginate(3);

        return view('Admin.subject' , compact('classToSubject' , 'ViewSubjectListing'));
    } // Subject view function





   



}
