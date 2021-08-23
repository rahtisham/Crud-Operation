<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use App\Models\ClassAdd;
use App\Models\subjects;

class AdminAddController extends Controller
{
    public function add_Client_listening(Request $request)
    {
// dd($request);
    $this->validate($request, [

        'client_name' => 'required',
        'client_email' => 'required',
        'client_contact_number' => 'required|max:11',
        'client_address' => 'required',
        'client_project_name' => 'required',
        'client_country' => 'required',
        'client_city' => 'required',
        'client_infromation' => 'required',
        'client_idCard' => 'required'

    ]);

    $clientInformation = new AdminAddModel([

        'client_name' => $request->get('client_name'),
        'client_email' => $request->get('client_email'),
        'client_contact_number' => $request->get('client_contact_number'),
        'client_address' => $request->get('client_address'),
        'client_project_name' => $request->get('client_project_name'),
        'client_country' => $request->get('client_country'),
        'client_city' => $request->get('client_city'),
        'client_infromation' => $request->get('client_infromation'),
        'client_idCard' => $request->get('client_idCard')

    ]);

    $clientInformation->save();
    return back()->with('success' , 'Data inserted successfully');

    }

  /* Add client information at once to connect project tables */


  public function add_Class_listing(Request $request)
  {
      $this->validate($request , [
           
          'className' => 'required'

      ]);

      $classAdds = new ClassAdd([

        'className' => $request->get('className')

      ]);

      $classAdds->save();

      return back()->with('success' , 'Class has been Submited');

  }

  public function add_Subjects_listing(Request $request)
  {
     $this->validate($request , [

        'classNumber' => 'required',
        'subject' => 'required'

     ]);

     $addSubject = new subjects([

        'classID' => $request->get('classNumber'),
        'subject' => $request->get('subject')

     ]);

     $addSubject->save();

     return back()->with('success' , 'Subject has submited');
  }


}
