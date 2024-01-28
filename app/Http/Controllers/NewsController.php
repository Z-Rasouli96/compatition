<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(){

        $news = News::with('categories')->get();

        return view('news-list',compact('news'));
    }
}
