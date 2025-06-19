
<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        @include('admin.sidebar')
        <div class="flex-1 p-6">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Manage Lessons</h1>
            <table class="bg-white rounded-lg shadow divide-y divide-gray-200 text-lg w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-2">#</th>
                    <th class="p-2">Lesson Title</th>
                    <th class="p-2">Course</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="p-2">1</td>
                    <td class="p-2">Routing in Laravel</td>
                    <td class="p-2">Introduction to Laravel</td>
                    <td class="p-2">
                        <button class="text-blue-600 hover:underline">Edit</button> |
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td class="p-2">2</td>
                    <td class="p-2">Selectors in CSS</td>
                    <td class="p-2">Basic HTML & CSS</td>
                    <td class="p-2">
                        <button class="text-blue-600 hover:underline">Edit</button> |
                        <button class="text-red-600 hover:underline">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</x-app-layout>