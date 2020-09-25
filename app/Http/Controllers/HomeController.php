<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function  index(){
        $videos = Video::latest()->with('category')->get();
        return view('frontend',compact('videos'));
    }
}
