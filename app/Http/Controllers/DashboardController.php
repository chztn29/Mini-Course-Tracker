<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user && $user->email === 'admin@example.com') {
            // Return admin dashboard view
            return view('admin.dashboard');
        }
        // Return regular dashboard view
        return view('dashboard');
    }
}