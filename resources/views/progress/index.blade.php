<x-app-layout>
  <div class="flex h-screen bg-gray-100">
    <x-sidebar-layout> </x-sidebar-layout>
    <main class="flex-1 p-8 overflow-y-auto">
      <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800">My Progress</h1>
      </div>

      <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-xl font-semibold">Intro to Laravel</h2>
        <div class="w-full bg-gray-200 rounded-full h-4 mt-2">
          <div class="bg-indigo-600 h-4 rounded-full" style="width: 60%"></div>
        </div>
        <p class="text-sm text-gray-600 mt-1">60% completed</p>
      </div>
    </main>
  </div>
</x-app-layout>