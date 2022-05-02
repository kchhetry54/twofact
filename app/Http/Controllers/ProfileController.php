<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MediaService;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('profile.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $id = $user->id;
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // 'image' => 'nullable|image|mimes:jpeg,gif,png',
        ]);

        if ($request->hasFile('image') && !empty($request->file('image'))) {
            $media_id = MediaService::upload($request->file('image'), "pictures");
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'media_id' => $media_id ?? $user->media_id,
        ]);

        return redirect()->route('profile')->with('success', 'Profile Updated Successfully!');
    }

    public function password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        auth()->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('profile')
            ->with('success', 'Password Updated Successfully!');
    }

    public function clearImage()
    {
        $user = auth()->user();
        if ($user->media_id && $user->media) {
            Storage::delete('public/' . $user->media->path);
        }

        $user->update([
            'media_id' => null,
        ]);

        return redirect()->route('profile')
            ->with('success', 'Profile picture cleared successfully!');
    }
}