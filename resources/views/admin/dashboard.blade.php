<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        {{-- Sidebar --}}
        @include('admin.sidebar')

        {{-- Main Content --}}
        <div class="flex-1 p-8 space-y-10">
            {{-- Dashboard Title --}}
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Admin Dashboard</h1>

            {{-- Metric Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <x-admin-metric-card title="Total Courses" :value="$courseCount" />
                <x-admin-metric-card title="Total Lessons" :value="$lessonCount" />
                <x-admin-metric-card title="Total Students" :value="$studentCount" />
                <x-admin-metric-card title="Completed Lessons of All Users" :value="$completedLessonsCount" />
            </div>

            {{-- Recent Signups --}}
            <div class="mt-10">
                <h2 class="text-2xl font-semibold text-gray-700 mb-4 mt-4">Recent Student Signups</h2>
                <ul class="bg-white rounded-lg shadow divide-y divide-gray-200 text-lg">
                    @foreach ($recentStudents as $student)
                    <li class="px-4 py-3 flex justify-between items-center hover:bg-gray-50">
                        <div>
                            <p class="font-semibold text-gray-800">{{ $student->name }}</p>
                            <p class="text-sm text-gray-600">{{ $student->email }}</p>
                        </div>
                        <span class="text-sm text-gray-500">{{ $student->created_at->diffForHumans() }}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>