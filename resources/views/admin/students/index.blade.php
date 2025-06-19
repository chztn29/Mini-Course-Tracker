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
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="p-2">1</td>
                        <td class="p-2">Juan Dela Cruz</td>
                        <td class="p-2">juan@example.com</td>
                        <td class="p-2">Laravel, CSS</td>
                        <td class="p-2">
                            <button class="text-blue-600 hover:underline">View</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-2">2</td>
                        <td class="p-2">Maria Santos</td>
                        <td class="p-2">maria@example.com</td>
                        <td class="p-2">HTML</td>
                        <td class="p-2">
                            <button class="text-blue-600 hover:underline">View</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>