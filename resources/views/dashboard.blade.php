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
                    <h2 class="text-sm text-gray-500">Total Courses Enrolled</h2>
                    <p class="text-2xl font-bold text-indigo-600">3</p> {{-- Replace with dynamic count --}}
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h2 class="text-sm text-gray-500">Courses Completed</h2>
                    <p class="text-2xl font-bold text-green-600">1</p> {{-- Replace with dynamic count --}}
                </div>
                <div class="bg-white p-6 rounded-xl shadow text-center">
                    <h2 class="text-sm text-gray-500">In Progress</h2>
                    <p class="text-2xl font-bold text-yellow-500">2</p> {{-- Replace with dynamic count --}}
                </div>
            </div>

            <!-- Overall Progress -->
            <div class="bg-white p-6 rounded-xl shadow mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-4">Overall Progress</h2>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-indigo-600 h-4 rounded-full" style="width: 65%;"></div> {{-- Dynamic percentage --}}
                </div>
                <p class="text-sm text-gray-500 mt-2">65% Complete</p> {{-- Dynamic percentage --}}
            </div>

            <!-- Continue Learning Section -->
            <div class="bg-white p-6 rounded-xl shadow mb-4">
                <h2 class="text-lg font-semibold text-gray-700 mb-2">Continue Learning</h2>
                <p class="text-sm text-gray-600 mb-3">Pick up where you left off:</p>
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="text-md font-bold text-blue-600">Web Development</h3>
                        <p class="text-sm text-gray-500">Next Lesson: HTML Forms</p>
                    </div>
                    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 text-sm">Resume</a>
                </div>
            </div>

            <!-- Enrolled Courses -->
            <h2 class="text-lg font-semibold text-gray-600 mb-4">Your Enrolled Courses</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Course Cards (Repeat as needed) -->
                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-blue-700 mb-1">💻 Web Development</h3>
                    <p class="text-sm text-gray-500 mb-4">10 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">📤 Share</button>
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-green-700 mb-1">🎨 UI/UX Design</h3>
                    <p class="text-sm text-gray-500 mb-4">7 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">📤 Share</button>
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-1">🛠️ Backend Engineering</h3>
                    <p class="text-sm text-gray-500 mb-4">12 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">📤 Share</button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
