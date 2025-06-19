<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = User::with('courses')
                    ->where('email', '!=', 'admin@example.com')
                    ->get();

    return view('admin.students.index', compact('students'));
    }
}
