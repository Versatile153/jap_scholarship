<?php

namespace App\Http\Controllers;
use App\Models\Scheme;
use App\Models\User;
use Illuminate\Validation\Rule;
use App\Models\Profile;
use App\Models\Apply;
use App\Models\Post;

use App\Models\Subscriber;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function users(){

        $users=User::all();
        $applies=Apply::paginate(3, ['*'], 'page'); 
        $schemes=Scheme::all();
        $qualified = Apply::where('status','accepted')->get();



        return view('dash.users',compact('users','applies','schemes','qualified'));

     }

     public function mail(){

        $posts = Post::all();

        $users=User::all();
        $applies=Apply::all();
        $schemes=Scheme::all();
        $qualified = Apply::where('status','accepted')->get();



        return view('dash.mail',compact('users','applies','schemes','qualified','posts'));

     }


     public function schemes(){

        $users=User::all();
        $subscribers=Subscriber::all();

        $applies=Apply::all();
        $schemes=Scheme::all();
        $qualified = Apply::where('status','accepted')->get();


        return view('dash.schemes',compact('users','applies','schemes','qualified','subscribers'));

     }

     public function show($id){
         $user = User::find($id); // Replace $userId with the actual user ID

// Fetch uploads belonging to the user
        $uploads = $user ? $user->uploads : null;

        $applies=Apply::find($id);



        return view('dash.show',compact('applies','uploads'));

     }


     public function profiles(){

        $users=User::all();
        $applies=Apply::all();
        $schemes=Scheme::all();
        $qualified = Apply::where('status','accepted')->get();


        return view('dash.profiles',compact('users','applies','schemes','qualified'));

     }

     public function qualified(){

        $types = Apply::where('status', 'accepted')->distinct('type')->pluck('type')->all();

        $users=User::all();
        $applies=Apply::all();
      $qualified = Apply::where('status', 'accepted')->paginate(10);

        // $qualified = Apply::where('status','accepted');


        $schemes=Scheme::all();



        return view('dash.qualified',compact('users','applies','schemes','qualified','types'));

     }




     public function subscribe(Request $request)
     {
        $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        $existingSubscriber = Subscriber::where('email', $request->email)->first();

    if ($existingSubscriber) {
        return redirect()->back()->withErrors(['email' => 'The email address is already subscribed.'])->withInput();
    }

         Subscriber::create(['email' => $request->email]);

         return redirect()->back()->with('success', 'Successfully subscribed!');
     }


     public function createScheme(){
        return view('pages.createscheme');
     }
}
