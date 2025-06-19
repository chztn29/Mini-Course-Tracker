<aside x-show="open" class="flex flex-col w-64 bg-gray-800 text-white min-h-screen transition-all duration-300" x-transition>
    <div class="px-6 py-4 text-2xl font-bold border-b border-gray-700">
        🛠️ Course Tracker
    </div>

    <nav class="flex-1 px-4 py-6 space-y-2 text-lg font-medium">
        <a href="{{ route('admin.dashboard') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
            🏠 <span class="ml-3">Dashboard</span>
        </a>
        <a href="{{ route('admin.courses.index') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('admin.courses.index') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
            📚 <span class="ml-3">Manage Courses</span>
        </a>
        <a href="{{ route('admin.lessons.index') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('admin.courses.index') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
            📚 <span class="ml-3">Manage Lessons</span>
        </a>
        <a href="{{ route('admin.students.index') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('admin.students.index') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
            👥 <span class="ml-3">Students</span>
        </a>
    </nav>

    <div class="px-4 py-4 border-t border-gray-700 text-lg font-medium">
        <div class="mb-3 flex items-center gap-2">
            <span class="text-xl">👨🏻‍💻</span>
            <div>
                <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                <p class="text-xs text-gray-400 capitalize">Admin</p>
            </div>
        </div>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full text-left px-3 py-2 rounded-md bg-red-600 hover:bg-red-500 text-white transition">
                🚪 Logout
            </button>
        </form>
    </div>
</aside>