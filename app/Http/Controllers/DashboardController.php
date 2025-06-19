<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use App\Models\User;
use App\Models\Lesson;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{

public function index()
{
    $user = Auth::user();

    if ($user && $user->email === 'admin@example.com') {

        // ✅ Add all metrics for admin
        $courseCount = Course::count();
        $lessonCount = Lesson::count();
        $studentCount = User::where('email', '!=', 'admin@example.com')->count();
        $completedLessonsCount = \DB::table('lesson_user')->count();

        $recentStudents = User::where('email', '!=', 'admin@example.com')
            ->latest()
            ->take(5)
            ->get();

        return view('admin.dashboard', compact(
            'courseCount',
            'lessonCount',
            'studentCount',
            'completedLessonsCount',
            'recentStudents'
        ));
    }

    // 👇 Regular user stats
    $completedLessons = $user->completedLessons;
    $completedLessonCount = $completedLessons->count();

    $allCourses = Course::with('lessons')->get();
    $completedCourseCount = 0;
    $inProgressCourseCount = 0;
    $totalLessons = 0;
    $nextLesson = null;

    foreach ($allCourses as $course) {
        $lessonIds = $course->lessons->pluck('id');

        $totalLessons += $lessonIds->count();
        if ($lessonIds->isEmpty()) continue;

        $completedCount = $lessonIds->filter(fn($id) => $completedLessons->contains($id))->count();

        if ($completedCount === $lessonIds->count()) {
            $completedCourseCount++;
        } elseif ($completedCount > 0 && !$nextLesson) {
            $inProgressCourseCount++;
            $next = $course->lessons->filter(fn($lesson) => !$completedLessons->contains($lesson->id))->first();
            if ($next) {
                $nextLesson = $next;
                $nextLesson->course_title = $course->title;
            }
        }
    }


    return view('dashboard', compact(
        'completedLessonCount',
        'completedCourseCount',
        'inProgressCourseCount',
        'nextLesson'
    ));
}


}
