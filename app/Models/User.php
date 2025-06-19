<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lesson; // ✅ Don't forget this

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // ✅ Fixed
    public function completedLessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_user');
    }
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function index()
    {
        // Get 5 most recent students by creation time
        $recentStudents = User::latest()->take(5)->get();

        return view('admin.dashboard', compact('recentStudents'));
    }
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_user');
    }
}
