<?php

// In SchemeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scheme;

class SchemeController extends Controller
{
    public function index()
    {
    $activeSchemesCount = Scheme::where('status', 'active')->count();
    $canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
    $expiredSchemesCount = Scheme::where('status', 'expired')->count();
    $allSchemesCount = Scheme::all()->count();





        $schemes = Scheme::all();
        return view('layouts.schemes.all', compact('schemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount'));
    }

    public function create()
    {
        return view('schemes.create');
    }




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',

            'type' => 'required',
            'expiry_date' => 'required|date',
            'details' => 'nullable',
            'grade' => 'required|string|max:255',


        ]);

        Scheme::create($request->all());

        return redirect()->route('superadmin')->with('success', 'Scheme created successfully.');

    }

    // Add other resource methods (show, edit, update, destroy) if needed

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $schemes = Scheme::find($id);
        return view('layouts.schemes.show', compact('schemes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $schemes = Scheme::find($id);
         $activeSchemes = Scheme::where('status', 'expired')->get();

$canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
$allSchemesCount = Scheme::all()->count();

$activeSchemesCount = Scheme::where('status', 'active')->count();
$expiredSchemesCount = Scheme::where('status', 'expired')->count();
    return view('layouts.schemes.edit',compact('activeSchemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount','schemes'));
}
        //  return view('layouts.schemes.edit', compact('schemes'));


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {





        $scheme = Scheme::findOrFail($id);

    // Step 2: Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'amount' => 'required|string|max:255',

        'type' => 'required|string|max:255',
        'grade' => 'required|string|max:255',

        'expiry_date' => 'required|date',
        'details' => 'nullable|string',

    ]);

    $scheme->update($validatedData);
    $scheme->save();
    return redirect()->route('dashboard')->with('success', 'Scheme updated successfully.');



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $scheme = Scheme::findOrFail($id);
        $scheme->delete();

        return redirect()->route('dashboard')->with('success', 'Scheme deleted successfully.');

    }

}
