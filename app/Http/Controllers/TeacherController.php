<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function dashboard()
    {
        return view('teachers.dashboard');  // Create a view for the teacher dashboard
    }
}
