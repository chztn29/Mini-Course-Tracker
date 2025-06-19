<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all(); // or paginate() if needed

        return view('courses.index', compact('courses'));
    }

    public function show($id)
    {
        $course = Course::with('lessons')->findOrFail($id);
        return view('courses.show', compact('course'));
    }
}
