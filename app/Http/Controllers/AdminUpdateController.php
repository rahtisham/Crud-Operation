<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use app\Models\User;

class AdminUpdateController extends Controller
{
    public function client_edit_View(Request $request , $id)
    {
   
        $clientEditView = AdminAddModel::where('client_id' , $id)->first();
        return view('Admin.client-edit-view' , ['clientEditView' => $clientEditView]);
      
    }

    public function Update_client_listing(Request $request , $id)
    {
        dd($id);
    }


     // Functaionalities are used for edit Admin
     public function Student_edit_view($id)
     {
         $developerEditView = User::where('id' , $id)->first();
         return view('Admin.student-edit-view' , compact($developerEditView , 'id'));
     }

     
    public function Teacher_edit_view($id)
    {
        $developerEditView = User::where('id' , $id)->first();
        return view('Admin.teacher-edit-view' , compact($developerEditView , 'id'));
    }

}
