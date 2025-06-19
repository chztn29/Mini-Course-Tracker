<x-app-layout>
    <div class="flex min-h-screen bg-gray-100">
        @include('admin.sidebar')
        <div class="flex-1 p-6">
            <h1 class="text-4xl font-extrabold text-gray-800 mb-6">Manage Courses</h1>
            {{-- Create Button --}}
            <button onclick="openModal('createModal')" class="bg-blue-600 text-white px-4 py-2 rounded mb-4">
                + Create New Course
            </button>
            {{-- Table --}}
            <table class="bg-white rounded-lg shadow divide-y divide-gray-200 text-lg w-full table-auto border-collapse">
                <thead class="bg-gray-200 text-gray-700">
                    <tr>
                        <th class="p-3 text-left w-10">#</th>
                        <th class="p-3 text-left">Title</th>
                        <th class="p-3 text-left">Descriptions</th>
                        <th class="p-3 text-center w-32">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr class="border-t">
                        <td class="p-3">{{ $loop->iteration }}</td>
                        <td class="p-3">{{ $course->title }}</td>
                        <td class="p-3">{{ $course->description }}</td>
                        <td class="p-3 text-center space-x-2">
                            <button onclick="openEditModal({{ $course }})" class="text-blue-600">✎</button>
                            <form action="{{ route('admin.courses.destroy', $course) }}" method="POST" class="inline" onsubmit="return confirm('Delete this course?')">
                                @csrf @method('DELETE')
                                <button class="text-red-600">🗑</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    {{-- CREATE MODAL --}}
    <div id="createModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Create Course</h2>
            <form method="POST" action="{{ route('admin.courses.store') }}">
                @csrf
                <input type="text" name="title" placeholder="Title" class="w-full border p-2 mb-3" required>
                <input type="text" name="description" placeholder="Description" class="w-full border p-2 mb-3" required>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal('createModal')" class="bg-gray-300 px-3 py-1 rounded">Cancel</button>
                    <button class="bg-green-600 text-black px-3 py-1 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

    {{-- EDIT MODAL --}}
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-50">
        <div class="bg-white p-6 rounded shadow-lg w-96">
            <h2 class="text-xl font-bold mb-4">Edit Course</h2>
            <form id="editForm" method="POST">
                @csrf @method('PUT')
                <input type="text" id="editTitle" name="title" class="w-full border p-2 mb-3" required>
                <input type="text" id="editDescription" name="description" class="w-full border p-2 mb-3" required>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeModal('editModal')" class="bg-gray-300 px-3 py-1 rounded">Cancel</button>
                    <button class="bg-green-600 text-white px-3 py-1 rounded">Update</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Scripts --}}
    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        function closeModal(id) {
            document.getElementById(id).classList.add('hidden');
        }

        function openEditModal(course) {
            const form = document.getElementById('editForm');
            form.action = `/admin/courses/${course.id}`;
            document.getElementById('editTitle').value = course.title;
            document.getElementById('editDescription').value = course.description;
            openModal('editModal');
        }
    </script>
</x-app-layout>
