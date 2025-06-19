<x-app-layout>
  <div class="flex h-screen bg-gray-100">
    <x-sidebar-layout> </x-sidebar-layout>
    <main class="flex-1 p-8 overflow-y-auto">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">Completed Lessons</h1>
      </div>

      <div class="max-w-4xl mx-auto">
            @if ($completedLessons->count())
                <div class="space-y-4">
                    @foreach ($completedLessons as $lesson)
                        <div class="bg-white border-l-4 border-green-600 p-5 rounded-lg shadow">
                            <h2 class="text-xl font-semibold text-gray-800">{{ $lesson->title }}</h2>
                            <p class="text-sm text-gray-600 mt-1 mb-2">{{ $lesson->content }}</p>
                            <span class="text-xs text-gray-500">
                                Course: <strong>{{ $lesson->course->title ?? 'Unknown' }}</strong>
                            </span>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500 italic">You haven’t completed any lessons yet.</p>
            @endif

        </div>
    </main>
  </div>
</x-app-layout>