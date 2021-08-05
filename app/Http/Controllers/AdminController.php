<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use app\Models\User;

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

    public function Developers(Request $request)
    {
        $developers = User::all()->where('name' , 'Developer');
        return view('Admin.developer' , compact('developers'));
    }// Developer view Funciton

    public function Designers(Request $request)
    {
        $designer = User::all()->where('name' , 'Designers');
        return view('Admin.designer' , compact('designer'));
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




    //////////////////////////////////////////////////////////////////// Functaionalities are used for edit Admin

    public function add_Client()
    {
        return view('Admin.add-clients');
    }// add_Client view Funciton





    //////////////////////////////////////////////////////////////////// Functaionalities are used for edit Admin
    public function Developers_edit_view($id)
    {
        $developerEditView = User::where('id' , $id)->first();
        return view('Admin.developer-edit-view' , compact($developerEditView , 'id'));
    }

    public function Designer_edit_view($id)
    {
        $developerEditView = User::where('id' , $id)->first();
        return view('Admin.designer-edit-view' , compact($developerEditView , 'id'));
    }


}
