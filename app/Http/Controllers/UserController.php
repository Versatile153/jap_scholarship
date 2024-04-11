<?php

namespace App\Http\Controllers;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function usersdata(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'current_school' => 'required|string',
            'gpa' => 'required|numeric',
            'family_income' => 'required|numeric',
            'extracurricular_activities' => 'nullable|string',
            'personal_statement' => 'nullable|string',
            // 'recommendation' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // Add user_id to the validated data
        $validatedData['user_id'] = Auth::id(); // Assuming you're using the default User model


$existingProfile = Profile::where('user_id', auth()->id())->first();


if ($existingProfile) {
    // Redirect the user to the profile update page with a message
    return redirect()->route('profileupdate')->with('message', 'oops!!, you already have a profile,Please update your profile information.');
} 
        Profile::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'profile created successfully.');

    }



    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'current_school' => 'required|string',
            'gpa' => 'required|numeric',
            'family_income' => 'required|numeric',
            'extracurricular_activities' => 'nullable|string',
            'personal_statement' => 'nullable|string',
            // 'recommendation' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // Add user_id to the validated data
        auth()->user()->profile->update($validatedData);

        return redirect()->route('dashboard')->with('success', 'profile updated successfully.');

    }



}
