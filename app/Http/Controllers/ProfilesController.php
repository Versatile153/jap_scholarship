<?php

// app/Http/Controllers/ProfileController.php

use App\Models\Profile;
use Illuminate\Http\Request;
 use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        dd($request->all());
        $validatedData = $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'current_school' => 'required|string',
            'gpa' => 'required|numeric',
            'family_income' => 'required|numeric',
            'extracurricular_activities' => 'nullable|string',
            'personal_statement' => 'nullable|string',
            'recommendation' => 'nullable|file|mimes:pdf,doc,docx',
        ]);

        // Handle file upload (recommendation)
        if ($request->hasFile('recommendation')) {
            $path = $request->file('recommendation')->store('recommendations');
            $validatedData['recommendation'] = $path;
        }

$existingProfile = Profile::where('user_id', auth()->id())->first();
dd($existingProfile);
if ($existingProfile) {
    // Redirect the user to the profile update page with a message
    return redirect()->route('profileupdate')->with('message', 'oops!!, you already have a profile,Please update your profile information.');
} 
        // Create a new profile
        Profile::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'profile created successfully.');

    }
}

