<?php

// app/Http/Controllers/EmailController.php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apply;
use App\Models\Scheme;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function showForm()
    {
        $users = User::all(); 
        $applies = Apply::all(); 
        $schemes = Scheme::all(); 
        $subscribers = Subscriber::all(); 
        $types = Apply::where('status', 'accepted')->distinct('type')->pluck('type')->all();
        return view('dash.messages', compact('users','types','subscribers','schemes'));
    }

  public function sendEmail(Request $request)
{
    $validatedData = $request->validate([
        'type' => 'required|string',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    $type = $request->input('type');

    // Fetch users based on the selected type
    $users = Apply::where('status', 'accepted')->where('type', $type)->get();

    foreach ($users as $user) {
        Mail::to($user->email)->send(new \App\Mail\BulkEmail($validatedData['subject'], $validatedData['message']));
    }

    return redirect()->back()->with('success', 'Emails sent successfully!');
}










  public function sendEmail1(Request $request)
{
    $validatedData = $request->validate([
       
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    

    // Fetch users based on the selected type
    $users = User::all();

    foreach ($users as $user) {
        Mail::to($user->email)->send(new \App\Mail\BulkEmail($validatedData['subject'], $validatedData['message']));
    }

    return redirect()->back()->with('success', 'Emails sent successfully!');
}


  public function sendEmail2(Request $request)
{
    $validatedData = $request->validate([
       
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    

    // Fetch users based on the selected type
    $users = Subscriber::all();

    foreach ($users as $user) {
        Mail::to($user->email)->send(new \App\Mail\BulkEmail($validatedData['subject'], $validatedData['message']));
    }

    return redirect()->back()->with('success', 'Emails sent successfully!');
}










}

