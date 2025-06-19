<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <x-sidebar-layout></x-sidebar-layout>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-1">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('courses.index') }}"
                        class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold px-4 py-2 rounded-md">
                        ← Go Back
                    </a>
                    <h1 class="text-2xl font-bold text-gray-800">{{ $course->title }}</h1>
                </div>
            </div>

            <p class="text-gray-600 mb-6">{{ $course->description }}</p>
            @php
            $totalLessons = $course->lessons->count();
            $completedLessons = Auth::user()->completedLessons->where('course_id', $course->id)->count();
            $progressPercent = $totalLessons > 0 ? round(($completedLessons / $totalLessons) * 100) : 0;
            @endphp

            <div class="mb-6">
                <p class="text-sm text-gray-700">
                    Progress: {{ $completedLessons }} / {{ $totalLessons }} lessons completed ({{ $progressPercent }}%)
                </p>
                <div class="w-full bg-gray-200 rounded-full h-4 mt-2">
                    <div class="bg-indigo-600 h-4 rounded-full"
                        style="width: {{ $progressPercent }}%;">
                    </div>
                </div>
            </div>


            <h2 class="text-lg font-semibold text-gray-700 mb-4">Lessons</h2>

            @if ($course->lessons->count())
            <div class="space-y-4">
                @foreach ($course->lessons as $lesson)
                <div class="bg-white border-l-4 border-blue-600 rounded-xl shadow p-6 mb-4 flex justify-between items-start">
                    <div>
                        <h3 class="text-md font-bold text-gray-800">{{ $lesson->title }}</h3>
                        <p class="text-sm text-gray-600 mt-1">{{ $lesson->content }}</p>
                    </div>

                    {{-- ✅ Mark as Done Button --}}
                    <div class="ml-4">
                        @php
                        $completed = Auth::user()->completedLessons->contains($lesson->id);
                        @endphp

                        @if ($completed)
                        <span class="inline-block text-green-700 font-semibold bg-green-100 px-3 py-1 rounded-md">
                            ✅ Completed
                        </span>
                        @else
                        <form method="POST" action="{{ route('lessons.markDone', $lesson->id) }}">
                            @csrf
                            <button type="submit" class="px-4 py-2 text-black rounded hover:bg-blue-700">
                                Mark as Done
                            </button>
                        </form>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p class="text-gray-500 italic">No lessons added for this course yet.</p>
            @endif
        </main>
    </div>
</x-app-layout>