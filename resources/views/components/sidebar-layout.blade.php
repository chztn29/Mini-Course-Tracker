<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside x-show="open" class="flex flex-col w-64 bg-gray-800 text-white min-h-screen transition-all duration-300" x-transition>
            <div class="px-6 py-4 text-2xl font-bold border-b border-gray-700">
                📚 Course Tracker
            </div>

            <nav class="flex-1 px-4 py-6 space-y-2 text-lg font-medium">
                <a href="{{ route('dashboard') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('dashboard') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
                    🏠 <span class="ml-3">Dashboard</span>
                </a>
                <a href="{{ route('courses.index') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('courses.index') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
                    📦 <span class="ml-3">My Courses</span>
                </a>
                <a href="{{ route('settings.index') }}" class="flex items-center px-3 py-3 rounded-md {{ request()->routeIs('settings.index') ? 'bg-gray-700 text-white' : 'hover:bg-gray-700' }} transition">
                    ⚙️ <span class="ml-3">Settings</span>
                </a>
            </nav>

            <div class="px-4 py-4 border-t border-gray-700 text-lg font-medium">
                <div class="mb-3 flex items-center gap-2">
                    <span class="text-xl">🧑‍🎓</span>
                    <div>
                        <p class="text-sm font-semibold">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-400 capitalize">Student</p>
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
    </div>
</body>

</html>