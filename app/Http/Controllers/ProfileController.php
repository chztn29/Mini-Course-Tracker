<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\UserProfile;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

public function update(Request $request)
{
    $user = $request->user();

    $request->validate([
        'username' => 'nullable|string|max:255|unique:user_profiles,username,' . optional($user->profile)->id,
        'bio' => 'nullable|string|max:1000',
        'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Get or create the profile
    $profile = $user->profile ?? new UserProfile(['user_id' => $user->id]);

    // Handle avatar upload
    if ($request->hasFile('avatar')) {
        $avatarPath = $request->file('avatar')->store('avatars', 'public');
        $profile->avatar = $avatarPath; // ✅ Save to profile instead
    }

    $profile->username = $request->input('username');
    $profile->bio = $request->input('bio');
    $profile->save();

    return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}

