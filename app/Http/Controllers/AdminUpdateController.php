<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use app\Models\User;
use App\Models\registered;
use App\Models\testing;

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
         return view('Admin.student-edit-view' , ['developerEditView' => $developerEditView]);
     }

     public function Student_edit_listning(Request $request , $id)
     {
        
      $this->validate($request , [

        'category' => 'required',
        'name' => 'required',
        'contact' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'DOB' => 'required',
        'DOJ' => 'required',

      ]);

      $userRegistered  = registered::find($id); 

        $userRegistered->category = $request->get('category');
        $userRegistered->name = $request->get('name');
        $userRegistered->contact = $request->get('contact');
        $userRegistered->address = $request->get('address');
        $userRegistered->gender = $request->get('gender');
        $userRegistered->DOB = $request->get('DOB');
        $userRegistered->DOJ = $request->get('DOJ');
        $userRegistered->status = "Äctived";

      $userRegistered->save();

      return back()->with('success','Student has been Updated');

     }

     
    public function Teacher_edit_view($id)
    {
        $developerEditView = User::where('id' , $id)->first();
        return view('Admin.teacher-edit-view' , compact($developerEditView , 'id'));
    }
    

    public function student_Registered_with_class(Request $request , $id)
    {

        $studentRegistered = registered::where('name' , '=' , 'Student')
            ->orderBy('id','DESC')->limit(1)->get();


            $studentRegistered = registered::find($id);
            $studentRegistered->status = "Active Now";
            // dd($studentRegistered);
       
            $studentRegistered->save();

        return back()->with('success' , 'Class Has Been Added');
    }

}
