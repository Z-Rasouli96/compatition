<?php

namespace App\Http\Controllers;


use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('compatition-form',compact('courses'));
    }

    public function store(Request $request){
       

        $student = new Student();
        $student->username = $request->input('username');
        $student->email = $request->input('email');  
         
        $student->save();    

    
        $student->courses()->sync($request->course_id);

        // $students = Student::all();

        // return view('compatition-list',compact('students'));
        return view('compatition-list');


        
    }

    public function get(){
       

        $students = Student::get();
        // $students = Student::with('courses')->get();
      
      

        return view('compatition-list',compact('students'));
        
    }

    public function edit(Request $request){

        $student = Student::with('courses')->find($request->id);

        $selectedCourse = $student->courses->pluck('id')->toArray();

        $courses = Course::all()->pluck('id')->toArray();
        var_dump("selected.........",$selectedCourse);
        var_dump("courses all...............",$courses);

        $coursesId = array_diff($courses,$selectedCourse);

        $courses = Course::find($coursesId);

        return view('compatition-form-update',compact('student','courses'));
    }

    // public function update(Request $request){

    //     $students = Student::with('courses')->find($request->id);

    //     // dd($students);

    //     return view('compatition-form-update',compact('students'));
    // }
}
