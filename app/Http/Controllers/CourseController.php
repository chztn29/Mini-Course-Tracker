<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Show all courses
    public function index()
{
    return view('courses.index');
}


    // Show a single course and its lessons
    public function show(Course $course)
    {
        $course->load('lessons'); // eager load lessons

        return view('courses.show', compact('course'));
    }

    // You can later add create, store, edit, update, destroy if needed
}
