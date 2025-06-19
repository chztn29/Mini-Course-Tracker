<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function index()
    {
    $studentCount = User::where('email', '!=', 'admin@example.com')->count();
    $courseCount = Course::count();
    $enrollmentsCount = DB::table('course_user')->count(); // for many-to-many
    $recentStudents = User::where('email', '!=', 'admin@example.com')
                      ->latest()
                      ->take(5)
                      ->get();


    return view('admin.dashboard', compact('studentCount', 'courseCount', 'enrollmentsCount', 'recentStudents'));
    }
}
