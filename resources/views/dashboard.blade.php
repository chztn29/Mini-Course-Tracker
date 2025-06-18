<x-app-layout>

    <div class="flex h-screen bg-gray-100">
        <!-- Sidebar -->
        <x-sidebar-layout>
        </x-sidebar-layout>

        <!-- Main Content -->
        <main class="flex-1 p-8 overflow-y-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }} 👋</h1>
            </div>

            <h2 class="text-lg font-semibold text-gray-600 mb-4">Your Enrolled Courses</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Course Card -->
                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-blue-700 mb-1">💻 Web Development</h3>
                    <p class="text-sm text-gray-500 mb-4">10 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
                            📤 Share
                        </button>
                    </div>
                </div>

                <!-- Repeat for more courses -->
                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-green-700 mb-1">🎨 UI/UX Design</h3>
                    <p class="text-sm text-gray-500 mb-4">7 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
                            📤 Share
                        </button>
                    </div>
                </div>

                <div class="bg-white border rounded-xl shadow p-6">
                    <h3 class="text-lg font-semibold text-yellow-700 mb-1">🛠️ Backend Engineering</h3>
                    <p class="text-sm text-gray-500 mb-4">12 lessons</p>
                    <div class="flex justify-between items-center">
                        <button class="text-sm px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md">Open</button>
                        <button class="text-sm text-gray-600 hover:text-gray-900 flex items-center gap-1">
                            📤 Share
                        </button>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>