<?php

namespace App\Http\Controllers;
use DB;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function  index(){
        $categories = DB::select('select * from categories');
        $videos = DB::select('select * from videos');
        return view('frontend', ['videos' => $videos],['categories' => $categories]);
        return view('frontend',compact('videos'));
    }
}
