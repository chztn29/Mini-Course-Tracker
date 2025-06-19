<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = User::where('email', '!=', 'admin@example.com')->get();

        foreach ($students as $student) {
            $completedCourses = Course::with('lessons')->get()->filter(function ($course) use ($student) {
                $lessonIds = $course->lessons->pluck('id');
                $completedLessonIds = $student->lessons()
                    ->whereIn('lesson_id', $lessonIds)
                    ->pluck('lesson_id')
                    ->unique();

                return $lessonIds->count() > 0 && $lessonIds->diff($completedLessonIds)->isEmpty();
            });

            $student->completed_courses = $completedCourses;
        }

        return view('admin.students.index', compact('students'));
    }
}
