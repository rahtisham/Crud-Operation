<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Admin(){
        return view('Admin.dashboard');
    }
    public function Developer(){
        return view('Developer.dashboard');
    }
    public function adminDashboard()
    {
        return view('Admin/dashboard');
    }
}
