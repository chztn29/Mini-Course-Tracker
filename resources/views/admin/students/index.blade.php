<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        @include('admin.sidebar')
        <div class="flex-1 p-6">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Manage Students</h1>
            <table class="bg-white rounded-lg shadow divide-y divide-gray-200 text-lg w-full table-auto border-collapse">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-3 text-left w-10">#</th>
                        <th class="p-3 text-left">Student Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">Completed Courses</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr  class="border-t">
                            <td class="p-3">{{ $index + 1 }}</td>
                            <td class="p-3">{{ $student->name }}</td>
                            <td class="p-3">{{ $student->email }}</td>
                            <td class="p-3">
                                @if ($student->completed_courses->isNotEmpty())
                                    {{ $student->completed_courses->pluck('title')->join(', ') }}
                                @else
                                    <span class="text-gray-400 italic">None</span>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
