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
use App\Models\registered;
use App\Models\AddStudentClass;
use App\Models\department;
use App\Models\classRoom;
use App\Models\classRoutine;

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

        $admin = User::all()->where('category' , 'Admin');
        return view('Admin.admin' , compact('admin'));
    }// Admin view Funciton

    public function Student(Request $request)
    {
        $student = User::all()->where('category' , 'Student');
        return view('Admin.student' , compact('student'));
    }// Developer view Funciton

    public function Teacher(Request $request)
    {
        $teacher = User::all()->where('category' , 'Teacher');
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
        $ViewSubjectListing = DB::table('subjects')->paginate(7);

        return view('Admin.subject' , compact('classToSubject' , 'ViewSubjectListing'));
    } // Subject view function

    public function student_Class_add_View(Request $request)
    {
       

        $class = $request->class ?? '';
        $section = $request->section ?? '';

        $searchStudeent = addStudentClass::all();
        

        if(!empty($section))
        {
             
            $classColums =  ['One','Two', 'Three','Four','Five','Six', 'Seven', 'Eight','Nine','Ten'];
            
            if(in_array($class , $classColums ))
            {
             
                $studentID = registered::where('name' , '=' , 'Student')
                ->orWhere('status' , '=' , 'Active')
                ->orderBy('id','DESC')->limit(1)->get();

                $searchStudeent->where('class' , $class);
               
                return view('admin.student-Class-add' , compact('studentID' , 'searchStudeent'));
                
                
            }
           
        }
     
        
            $studentID = registered::where('name' , '=' , 'Student')
            ->orWhere('status' , '=' , 'Active')
            ->orderBy('id','DESC')->limit(1)->get();

            return view('admin.student-Class-add' , compact('studentID' , 'searchStudeent'));
  
       
    }// add_Client view Funciton

    public function Class_routine()
    {
        $TeacherClassAssign = registered::where('category' ,  'Teacher')->get();
        $classRoutine = classRoutine::all();
        $classAssignToTeacher = ClassAdd::all();
        $classRoom = classRoom::all();

        return view('admin.class-routine' , compact('classAssignToTeacher' , 'TeacherClassAssign' , 'classRoom' ,'classRoutine'));
    } // Assign class to teacher 

    public function Department()
    {
        $department = department::all();
        return view('admin.department' , compact('department'));
    }

    public function Class_room()
    { 
        $classRoom = classRoom::all();
        return view('admin.class-room' , compact('classRoom'));
    }
    // Class routine function code Ends....

    public function DependentDropdown_for_class(Request $request)
    {
      $classID = $request->post('classID');
      $classData = subjects::where('classID' , $classID)->orderBy('subject' , 'asc')->get();
      
      $html ='<option value="">Section Subject</option>';
      foreach($classData as $list){
         $html.='<option value="'.$list->subject.'">'.$list->subject.'</option>';
      }
      echo $html;

    }
    // Dependent dropdown code Ends.....

    public function fetch(Request $request)
    {
        // $data['class']=DB::table('ClassAdd')->orderBy('className','asc')->get();
        $classData = ClassAdd::all();
		return view('admin.dependent', compact('classData'));
     
    }

    // Dependent dropdown for testing purpuse .....
    public function get_Subject(Request $request)
    {
        $cid=$request->post('cid');
        $classData = subjects::where('classID',$cid)->orderBy('subject','asc')->get();
        echo $classData;
		$html='<option value="">Select State</option>';
		foreach($classData as $list){
			$html.='<option value="'.$list->subject_id.'">'.$list->subject.'</option>';
		}
		echo $html;
    }

    public function profile()
    {
        return view('admin/profile');
    }

    public function Teacher_profile(Request $request)
    {
        echo $request->get('id');
        return view('admin.teacherProfile');
    }

 





   



}
