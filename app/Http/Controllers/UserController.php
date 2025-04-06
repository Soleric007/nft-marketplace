<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


    public function updateProfile(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:51200', // 50MB limit
        ]);

        // Get the authenticated user
        $user = Auth::user();  // or $user = User::find(auth()->id());

        // Prepare data for update
        $data = [
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ];

        // Handle profile image upload if a new image is provided
        if ($request->hasFile('profile_image')) {
            // Delete old profile image if exists
            if ($user->profile_image && Storage::exists($user->profile_image)) {
                Storage::delete($user->profile_image);
            }

            // Store the new image
            $profileImagePath = $request->file('profile_image')->store('profile_images', 'public');
            $data['profile_image'] = $profileImagePath;  // Add the new image path to the data
        }

        // Update the user using the update method
        $user->update($data);  // Update the user with the provided data

        // Redirect back with success message
        return redirect()->route('dashboard')->with('success', 'Profile updated successfully');
    }


}
