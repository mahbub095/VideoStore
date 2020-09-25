<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function admin()
    {
        return view('backend.dashboard');
    }
/*
    public  function templatecheck(){
        return view('backend.category.create');
    }*/

}
