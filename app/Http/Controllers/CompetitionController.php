<?php

namespace App\Http\Controllers;

use App\Models\Competition;
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

        dd($request->competitions);

        $student = Student::create([
            'username'=> $request->input('username'),
            'email'=> $request->input('email'),

        ]);

        $student->courses()->sync($request->course_id);
        dd($request->input('username'));
        //  return view('compatition-form');
    }
}
