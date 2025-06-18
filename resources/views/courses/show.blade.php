<!-- resources/views/courses/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold text-indigo-700">{{ $course->title }}</h1>
    <p class="text-gray-600 mb-4">{{ $course->description }}</p>

    <h2 class="text-xl font-semibold mt-6 mb-2">Lessons</h2>
    <ul class="space-y-2">
        @foreach($course->lessons as $lesson)
            <li class="bg-gray-100 p-3 rounded-lg">
                <strong>{{ $lesson->title }}</strong>
                <p class="text-sm text-gray-600">{{ $lesson->summary }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
