<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminCourseController extends Controller
{
    public function index()
    {
        return view('admin.courses.index');
    }
}
