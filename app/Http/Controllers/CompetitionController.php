<?php

namespace App\Http\Controllers;

use App\Models\Competition;
use Illuminate\Http\Request;

class CompetitionController extends Controller
{
    public function index()
    {
        $competitions = Competition::all();

        return view('compatition-form',compact('competitions'));
    }

    public function store(Request $request){

        dd($request);
        //  return view('compatition-form');
    }
}
