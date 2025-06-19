<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminLessonController extends Controller
{
    public function index()
{
    $lessons = Lesson::with('course')->get();
    $courses = Course::all(); // needed for dropdowns
    return view('admin.lessons.index', compact('lessons', 'courses'));
}

    public function create()
    {
        $courses = Course::all();
        return view('admin.lessons.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        Lesson::create($request->only('course_id', 'title', 'content'));

        return redirect()->route('admin.lessons.index')->with('success', 'Lesson created.');
    }

    public function edit(Lesson $lesson)
    {
        $courses = Course::all();
        return view('admin.lessons.edit', compact('lesson', 'courses'));
    }

    public function update(Request $request, Lesson $lesson)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'title' => 'required|string|max:255',
            'content' => 'nullable|string',
        ]);

        $lesson->update($request->only('course_id', 'title', 'content'));

        return redirect()->route('admin.lessons.index')->with('success', 'Lesson updated.');
    }

    public function destroy(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('admin.lessons.index')->with('success', 'Lesson deleted.');
    }
}
