<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <x-sidebar-layout></x-sidebar-layout>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }} 👋</h1>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-4">
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h2 class="text-sm text-gray-500">Total lessons</h2>
                    <p class="text-2xl font-bold text-indigo-600">{{ $completedLessonCount }}</p> {{-- Replace with dynamic count --}}
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h2 class="text-sm text-gray-500">Courses Completed</h2>
                    <p class="text-2xl font-bold text-green-600">{{ $completedCourseCount }}</p> {{-- Replace with dynamic count --}}
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h2 class="text-sm text-gray-500">In Progress</h2>
                    <p class="text-2xl font-bold text-yellow-500">{{ $inProgressCourseCount }}</p> {{-- Replace with dynamic count --}}
                </div>
            </div>


            <!-- Continue Learning Section -->
            @if ($nextLesson)
            <div class="bg-white p-6 rounded-xl shadow mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Continue Learning</h2>
                <p class="text-sm text-gray-600 mb-3">Pick up where you left off:</p>
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-md font-bold text-blue-600">{{ $nextLesson->course_title }}</h3>
                        <p class="text-sm text-gray-500">Next Lesson: {{ $nextLesson->title }}</p>
                    </div>
                    <a href="{{ route('courses.show', $nextLesson->course_id) }}#lesson-{{ $nextLesson->id }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-sm">Resume</a>
                </div>
                @else
                <p class="text-sm text-gray-500">You have no ongoing courses at the moment.</p>
                @endif
            </div>


        </main>
    </div>
</x-app-layout>