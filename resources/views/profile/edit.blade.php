@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded shadow">

    <h1 class="text-2xl font-semibold mb-6">Edit Profile</h1>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-4 p-3 bg-red-100 text-red-800 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Current Avatar -->
        <div class="mb-4">
            <label class="block font-medium mb-1">Current Avatar</label>
           @if ($user->profile && $user->profile->avatar)
                <img src="{{ asset('storage/' . $user->profile->avatar) }}" alt="Avatar" class="w-12 h-12 rounded-full object-cover">
             @else
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center text-gray-400">No Avatar</div>
            @endif
        </div>

        <!-- Upload New Avatar -->
        <div class="mb-4">
            <label for="avatar" class="block font-medium mb-1">Change Avatar</label>
            <input type="file" name="avatar" id="avatar" accept="image/*" class="block w-full border rounded px-3 py-2">
        </div>

        <!-- Username -->
        <div class="mb-4">
            <label for="username" class="block font-medium mb-1">Username</label>
            <input
                type="text"
                name="username"
                id="username"
                value="{{ old('username', optional($user->profile)->username) }}"
                class="block w-full border rounded px-3 py-2"
                maxlength="255"
            >
        </div>

        <!-- Bio -->
        <div class="mb-4">
            <label for="bio" class="block font-medium mb-1">Bio</label>
            <textarea
                name="bio"
                id="bio"
                rows="4"
                class="block w-full border rounded px-3 py-2"
                maxlength="1000"
            >{{ old('bio', optional($user->profile)->bio) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded hover:bg-blue-700 transition">
            Update Profile
        </button>
        
    </form>
</div>
@endsection
