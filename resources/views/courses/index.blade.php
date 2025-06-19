<x-app-layout>
    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <x-sidebar-layout></x-sidebar-layout>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Available Courses</h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($courses as $course)
                    <div class="bg-white border-l-4 border-blue-600 rounded-xl shadow p-6">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $course->title }}</h3>
                        <p class="text-sm text-gray-600 mb-4">{{ $course->description }}</p>

                        <div class="flex justify-between items-center">
                            <a href="{{ route('courses.show', $course->id) }}"
                               class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">
                                View Course
                            </a>
                            <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
                                📤 Share
                            </button>
                        </div>
                    </div>
                @empty
                    <div class="col-span-3 text-gray-500 italic">
                        No available courses at the moment.
                    </div>
                @endforelse
            </div>
        </main>
    </div>
</x-app-layout>
