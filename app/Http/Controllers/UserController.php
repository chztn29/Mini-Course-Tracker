<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $completedLessons = $user->completedLessons()->with('course')->get();

        return view('users.index', compact('completedLessons'));
    }
}
