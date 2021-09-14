<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAddModel;
use Illuminate\Support\Facades\Hash;
use Image;
use Storage;
use Crypt;
use App\Models\ClassAdd;
use App\Models\subjects;
use App\Models\registered;
use App\Models\AddStudentClass;
use App\Models\department;
use App\Models\classroom;

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

  public function user_Registered(Request $request)
  {
      $this->validate($request , [

        'category' => 'required',
        'name' => 'required',
        'contact' => 'required',
        'address' => 'required',
        'cnic' => 'required',
        'gender' => 'required',
        'DOB' => 'required',
        'DOJ' => 'required',
        'email' => 'required',
        'password' => 'required',
        'uploadedfile'    =>  'required',

      ]);

      $file = $request->file('uploadedfile');    
      
      $filename = time(). '.' . $file->getClientOriginalExtension();

      $file->storeAs('public/studentImages' , $filename);
      
      $path = $file->storeAs('' , $filename);

      $userRegistered  = new registered([

        'role' => "1",
        'category' => $request->get('category'),
        'name' => $request->get('name'),
        'contact' => $request->get('contact'),
        'address' => $request->get('address'),
        'cnic' => $request->get('cnic'),
        'gender' => $request->get('gender'),
        'DOB' => $request->get('DOB'),
        'DOJ' => $request->get('DOJ'),
        'status' => "Active",
        'email' => $request->get('email'),
        'email_verified_at' => now(),
        'profile_photo_path' => $path,
        'password' => Hash::make($request['password'])

      ]);

      $userRegistered->save();

      return back()->with('success','feculty has been Registered');
    }

    public function student_Registered(Request $request)
  {

      $this->validate($request , [

        'category' => 'required',
        'name' => 'required',
        'contact' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'DOB' => 'required',
        'DOJ' => 'required',
        'email' => 'required',
        'password' => 'required',
        'uploadedfile'    =>  'required',

      ]);

      $file = $request->file('uploadedfile');    
      
      $filename = time(). '.' . $file->getClientOriginalExtension();

      $file->storeAs('public/studentImages' , $filename);
      
      $path = $file->storeAs('' , $filename);


      $userRegistered  = new registered([

        
        'role' => "2",
        'category' => $request->get('category'),
        'name' => $request->get('name'),
        'contact' => $request->get('contact'),
        'address' => $request->get('address'),
        'cnic' => $request->get('cnic'),
        'gender' => $request->get('gender'),
        'DOJ' => $request->get('DOJ'),
        'status' => "Active",
        'email' => $request->get('email'),
        'email_verified_at' => now(),
        'profile_photo_path' => $path,
        'password' => Hash::make($request['password'])

      ]);

      $userRegistered->save();

      return back()->with('success','Student has been Registered');
    }



      public function student_Class_add(Request $request)
      {
       
          $this->validate($request , [

            'studentID' => 'required',
            'studentID' => 'required',
            'studentSection' => 'required',
            'class' => 'required',
            'year' => 'required',
            'status' => 'required'

          ]);

          $addStudentClasss = new AddStudentClass([

            'studentId' => $request->get('studentID'),
            'studentSection' => $request->get('studentSection'),
            'studentName' => $request->get('studentName'),
            'class' => $request->get('class'),  
            'year' => $request->get('year'),
            'status' => $request->get('status')

          ]); 

          $addStudentClasss->save();

          return redirect()->route('class-Active', ['id' => $addStudentClasss->studentId]);

      }

      public function add_Department(Request $request)
      {
        // dd($request);

        $this->validate($request ,[
        
          'departments' => 'required'

        ]);

        $departmentAdd = new department([

          'departments' => $request->get('departments'),

        ]);

        $departmentAdd->save();

        return back()->with('success' , 'Department has been added');

      }


      public function add_Class_Room(Request $request)
      {
        // dd($request);

        $this->validate($request ,[
        
          'classRoom' => 'required'

        ]);

        $classRoom = new classRoom([

          'classRoom' => $request->get('classRoom'),

        ]);

        $classRoom->save();

        return back()->with('success' , 'Class Room has been added');

      }


}
