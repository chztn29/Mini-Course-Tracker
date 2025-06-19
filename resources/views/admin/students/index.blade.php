<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        @include('admin.sidebar')
        <div class="flex-1 p-6">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Manage Students</h1>
            <table class="bg-white rounded-lg shadow divide-y divide-gray-200 text-lg w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-2">#</th>
                        <th class="p-2">Student Name</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Enrolled Courses</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr>
                            <td class="p-2">{{ $index + 1 }}</td>
                            <td class="p-2">{{ $student->name }}</td>
                            <td class="p-2">{{ $student->email }}</td>
                            <td class="p-2">
                                {{ $student->courses->pluck('name')->join(', ') }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
