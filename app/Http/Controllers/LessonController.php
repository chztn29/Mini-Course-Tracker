<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
     public function markAsDone(Lesson $lesson)
    {
        // ✅ Define the user first
        $user = Auth::user();

        // ✅ Then use the $user to access the completedLessons relationship
        $user->completedLessons()->syncWithoutDetaching([$lesson->id]);

        return back()->with('success', 'Lesson marked as completed!');
    }
}
