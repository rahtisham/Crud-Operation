<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function Admin(){
        return view('Admin.dashboard');
    }
    public function Developer(){
        return view('Developer.dashboard');
    }
    public function test()
    {
        return view('Admin/dashboard');
    }
}
