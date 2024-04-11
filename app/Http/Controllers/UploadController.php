<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index()
    {
        // Retrieve all uploads
        $uploads = Upload::all();
        return view('uploads.index', compact('uploads'));
    }

    public function create()
    {
        return view('uploads.create');
    }

    public function store(Request $request)
    {

        // dd($request->all());
        // Validate the request
        $request->validate([
            'course' => 'required',
            'duration' => 'required',
            'academic_year' => 'required',
            'file1' => 'required|mimes:pdf',
            'file2' => 'required|mimes:pdf',
            'file3' => 'required|mimes:pdf',
        ]);

        // Upload files
        $file1Path = $request->file('file1')->store('uploads');
        $file2Path = $request->file('file2')->store('uploads');
        $file3Path = $request->file('file3')->store('uploads');





        $user = auth()->user();

        $existingApplication = Upload::where('user_id', auth()->id())->exists();
// $existingApplication = Upload::where('user_id', auth()->id())
// ->where('file1', $request->input('file1'))
// ->exists();


if ($existingApplication) {
    return redirect()->route('dashboard')->with('error', 'You have already submitted your documents');
}

        // Create new upload record
        $upload = new Upload([
            'user_id' => auth()->id(),
            'course' => $request->course,
            'duration' => $request->duration,
            'academic_year' => $request->academic_year,
            'file1' => $file1Path,
            'file2' => $file2Path,
            'file3' => $file3Path,
        ]);

        // Save the upload record
        $upload->save();

        return redirect()->route('thankuu')->with('success', 'Upload created successfully!');
    }
}
