<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Course Tracker</title>
    <link type="image/png" sizes="16x16" rel="icon" href="https://img.icons8.com/3d-fluency/94/books.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-4xl w-full bg-white shadow-xl rounded-2xl p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Left Side: Content -->
            <div class="flex flex-col justify-center space-y-6">
                <h1 class="text-4xl font-bold text-indigo-600">Mini Course Tracker</h1>
                <p class="text-lg text-gray-600">
                    Track your progress, manage modules, and level up your learning experience — all in one place.
                </p>

                <div class="flex space-x-4">
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-xl hover:bg-indigo-700 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded-xl hover:bg-indigo-50 transition">
                        Register
                    </a>
                </div>
            </div>

            <!-- Right Side: Optional Illustration -->
            <div class="hidden md:flex items-center justify-center">
                <img src="{{ asset('images/PROGRESS.png') }}" alt="Tracking Illustration" class="w-full max-w-sm">
            </div>
        </div>
    </div>

</body>
</html>
