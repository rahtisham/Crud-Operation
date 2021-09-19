<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
  /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequest()
    {
        return view('admin.ajaxExample');
    }


    /**
     * Display a listing of the myformPost.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajaxRequestStore(Request $request)
    {
        $validator = $this->validate($request, [
            'password' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);
        if ($validator->fails()){
            $errors = $validator->errors();
            echo $errors;
        }
            $clientInformation = new Student;

            $clientInformation->password = $request->get('password');
            $clientInformation->email = $request->get('email');
            $clientInformation->address = $request->get('address');
        
            $clientInformation->save();


            return response()->json(['success'=>'Added new records.']);
            

    }
}
