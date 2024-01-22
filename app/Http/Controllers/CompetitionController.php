<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use App\Models\Course;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('compatition-form',compact('courses'));
    }

    public function store(Request $request){

        dd($request->input('username'));
        //  return view('compatition-form');
    }
}
