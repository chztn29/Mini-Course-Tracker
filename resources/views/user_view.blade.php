@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-xl mt-10 p-6 bg-white rounded shadow">

    <h2 class="text-2xl font-semibold mb-6">Edit Your Profile</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-700 border border-green-400 rounded p-3 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex items-center gap-4 mb-6">
        @if(auth()->user()->avatar)
            <img src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="Avatar" class="w-16 h-16 rounded-full object-cover border">
        @else
            <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 text-sm">
                No Avatar
            </div>
        @endif
        <div>
            <p class="font-medium text-lg">{{ auth()->user()->profile->username ?? 'No username' }}</p>
            <p class="text-sm text-gray-500">{{ auth()->user()->email }}</p>
        </div>
    </div>

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="username" class="block font-medium mb-1">Username</label>
            <input
                type="text"
                id="username"
                name="username"
                value="{{ old('username', auth()->user()->profile->username ?? '') }}"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                placeholder="Enter a unique username"
            >
            @error('username')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="bio" class="block font-medium mb-1">Bio</label>
            <textarea
                id="bio"
                name="bio"
                rows="4"
                class="w-full border rounded px-3 py-2 focus:outline-none focus:ring focus:border-blue-500"
                placeholder="Tell us a little about yourself..."
            >{{ old('bio', auth()->user()->profile->bio ?? '') }}</textarea>
            @error('bio')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="avatar" class="block font-medium mb-1">Avatar</label>
            <input
                type="file"
                id="avatar"
                name="avatar"
                class="w-full border rounded px-3 py-2 file:mr-4 file:py-2 file:px-4 file:border-0 file:bg-blue-600 file:text-white hover:file:bg-blue-700"
            >
            @error('avatar')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <button
            type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition"
        >
            Save Changes
        </button>
    </form>
</div>
@endsection
