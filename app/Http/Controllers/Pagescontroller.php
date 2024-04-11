<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scheme;
use App\Models\User;

use App\Models\Profile;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;
use App\Models\Apply;
use Illuminate\Support\Facades\Route;
use App\Mail\ApplicationEmail; // Import your custom mail class




class Pagescontroller extends Controller
{
     public function rule(){
        return view('pages.rule');
     }


     public function pi(){
        return view('pages.pi');
     }

     public function admin(){

        $users=User::all();
        $applies=Apply::all();
        $schemes=Scheme::all();
        $qualified = Apply::where('status','accepted')->get();



        return view('pages.admin',compact('users','applies','schemes','qualified'));
     }


     public function apply(){
        $schemes = Scheme::all();


        $user = auth()->user();
        $profile = null;

        if ($user->profile) {
            // User has a profile, you can access it
            $profile = $user->profile;
}
        return view('pages.apply',compact('profile','schemes'));
     }




     public function application(Request $request){
// dd($request->all());



 $request->validate([
    'full_name' => 'required|string',
    'disability_type' => 'required|string',


    'email' => 'required|email',
    'phone' => 'required',
    'type' => 'required',

    'current_school' => 'required|string',
    'gpa' => 'required|numeric',
    'family_income' => 'required|numeric',
    'extracurricular_activities' => 'nullable|string',
    'personal_statement' => 'nullable|string',
    'file' => 'required|file|mimes:jpeg,png,jpg,gif,doc,docx,txt,pdf|max:4048',

]);

$user = auth()->user();


$existingApplication = Apply::where('user_id', auth()->id())
->where('type', $request->input('type'))
->exists();


if ($existingApplication) {
    return redirect()->route('dashboard')->with('error', 'You have already applied for this scholarship type.');
}

// Set default directory for documents
$directory = 'document_files';

$apply = Apply::create([
    'full_name' => $request->input('full_name'),
    'email' => $request->input('email'),
    'phone' => $request->input('phone'),
    'current_school' => $request->input('current_school'),
    'gpa' => $request->input('gpa'),
    'family_income' => $request->input('family_income'),
    'type' => $request->input('type'),
    'disability_type' => $request->input('disability_type'),


    'personal_statement' => $request->input('personal_statement'),

    'extracurricular_activities' => $request->input('extracurricular_activities'),




    'file' => $request->file('file')->storeAs($directory, uniqid().'.'.$request->file('file')->getClientOriginalExtension(), 'public'),
    'user_id' => $user->id,
    'hasBPages' => $request->input('hasBPages'),
    'hasVPassports' => $request->input('hasVPassports'),
    'isCitizen' => $request->input('isCitizen'),
    'region' => $request->input('region'),
    'eInst' => $request->input('eInst'),
    'isPresident' => $request->input('isPresident'),

]);

$name = $apply->full_name;
Mail::to($apply->email)->send(new ApplicationEmail(($apply->full_name)));
// ... additional logic ...

return redirect()->route('pi')->with('success', 'Application submitted successfully.');



     }












     public function faqs(){
        return view('pages.faqs');
     }


     public function thanku(){
        return view('pages.thankyou');
     }





     public function history(){


        $user = auth()->user();
        // Fetch applications made by the user
        $histories = $user->applies;
        // dd($history);


        $activeSchemes = Scheme::where('status', 'active')->get();

$canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
$allSchemesCount = Scheme::all()->count();

$activeSchemesCount = Scheme::where('status', 'active')->count();
$expiredSchemesCount = Scheme::where('status', 'expired')->count();
        return view('pages.history',compact('activeSchemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount','histories'));

     }














     public function careers(){
        $posts = Post::where('status', 'yes')->get();

        $latestPosts = Post::where('status', 'yes')->latest()->take(5)->get();
        $popularPosts = Post::where('status', 'yes')->latest()->limit(8)->get();

        // $popularPosts = Post::latest()->limit(8)->get();





        return view('pages.careers',compact('posts','latestPosts','popularPosts'));
     }



     public function show($id){
        $post = Post::find($id);






        return view('pages.show',compact('post'));
     }


     public function terms(){
        return view('pages.terms');
     }

     public function testimonials(){
        return view('pages.testimonials');
     }
     public function contact(){
        return view('pages.contact');
     }

     public function scheme(){
        return view('pages.schemes');
     }

     public function privacy(){
        return view('pages.privacy');
     }

     public function about(){
        return view('pages.about');
     }

     public function profile1(){
             $user = Auth::user();
    return view('pages.users', ['user' => $user]);
     
     }

     public function profileupdate(){
        $user = auth()->user();
        $profile = null;

        if ($user->profile) {
            // User has a profile, you can access it
            $profile = $user->profile;
}
        return view('pages.profileupdate',compact('profile'));
     }



    public function profile()
    {

        $user = auth()->user();
        $profile = null;
        // Check if the user has a profile
        if ($user->profile) {
            // User has a profile, you can access it
            $profile = $user->profile;
}


        $activeSchemes = Scheme::where('status', 'expired')->get();

$canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
$allSchemesCount = Scheme::all()->count();

$activeSchemesCount = Scheme::where('status', 'active')->count();
$expiredSchemesCount = Scheme::where('status', 'expired')->count();
    return view('pages.profile',compact('activeSchemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount','profile'));
}







    public function updateStatus(Request $request, $id)
{
    $scheme = Scheme::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'status' => 'required|in:active,expired,cancelled',
    ]);

    // Update the status
    $scheme->update(['status' => $validatedData['status']]);

    return redirect()->back()->with('success', 'Scheme status updated successfully.');
}


public function updateStatuss(Request $request, $id)
{
    $scheme = Apply::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'status' => 'required|in:accepted,rejected,reviewed','not reviewed',
    ]);

    // Update the status
    $scheme->update(['status' => $validatedData['status']]);

    return redirect()->back()->with('success', 'Application status updated successfully.');
}






public function updateStatusss(Request $request, $id)
{
    $scheme = Post::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'status' => 'required|in:yes,no',
    ]);

    // Update the status
    $scheme->update(['status' => $validatedData['status']]);

    return redirect()->back()->with('success', 'Application status updated successfully.');
}




public function updateStatussss(Request $request, $id)
{
    $scheme = Post::findOrFail($id);

    // Validate the incoming request data
    $validatedData = $request->validate([
        'status' => 'required|in:yes,no',
    ]);

    // Update the status
    $scheme->update(['status' => $validatedData['status']]);

    return redirect()->back()->with('success', 'Application status updated successfully.');
}






public function active()
    {
$activeSchemes = Scheme::where('status', 'active')->get();

$canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
$allSchemesCount = Scheme::all()->count();

$activeSchemesCount = Scheme::where('status', 'active')->count();
$expiredSchemesCount = Scheme::where('status', 'expired')->count();
        return view('pages.active',compact('activeSchemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount'));
    }




public function expired()
{
$activeSchemes = Scheme::where('status', 'expired')->get();

$canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
$allSchemesCount = Scheme::all()->count();

$activeSchemesCount = Scheme::where('status', 'active')->count();
$expiredSchemesCount = Scheme::where('status', 'expired')->count();
    return view('pages.expired',compact('activeSchemes','activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount'));
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

