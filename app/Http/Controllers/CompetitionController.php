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
       
        // var_dump($request->course_id);
        // dd($request->course_id);
        // dd(json_encode($request->course_id));
      
        foreach ($request->course_id as $each_number) {
            $result_array[] = (int) $each_number;
        }
        $categories  = [1, 2, 4];
        // var_dump($categories);
        // var_dump($result_array);
        // dd($result_array);
     

        $student = new Student();
        $student->username = $request->input('username');
        $student->email = $request->input('email');  
         
        $student->save();    

    
        $student->courses()->sync($request->course_id);

        // foreach ($result_array as $key => $value) {
        //     $student->courses()->attach($value);
        //   }
     

        return view('compatition-list',compact('student'));
        
        //  return view('compatition-form');
    }
}
