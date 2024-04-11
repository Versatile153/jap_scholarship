<?php


namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Apply;
use App\Models\Subscriber;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail; // Import your custom mail class
use App\Mail\SendNoticeMail; // Import your custom mail class
use App\Mail\QualifyMail; // Import your custom mail class
use App\Mail\SubscriberMail; // Import your custom mail class
use App\Mail\ApplicationEmail; // Import your custom mail class





class MailController extends Controller
{
    public function sendEmails()
    {
        $users = User::all();

        foreach ($users as $user) {
            // Customize this with your mail logic
            $mailData = [
                'user' => $user,
                'subject' => 'Your Subject Here',
                'customMessage' => 'Hello, ' . $user->name . '! This is a custom message for you.',
                // Add any other data you need in your email template
            ];


            Mail::to($user->email)->send(new SendMail($mailData));
        }
        return redirect()->route('superadmin')->with('success', 'Mails sent successfully.');

    }








    public function sendNotice()
    {
        $users = Apply::all();

        foreach ($users as $user) {
            // Customize this with your mail logic
            $mailData = [
                'user' => $user,
                'subject' => 'Your Subject Here',
                'customMessage' => 'Hello, ' . $user->name . '! This is a custom message for you.',
                // Add any other data you need in your email template
            ];


            Mail::to($user->email)->send(new SendNoticeMail($mailData));
        }
        return redirect()->route('superadmin')->with('success', 'Mails sent successfully.');

    }



    public function sendNoticeQualify(Request $request)
    {
        // $users = Apply::where('status','accepted')->get();
        $type = $request->input('type');

        // Fetch users based on the selected type
        $users = Apply::where('status', 'accepted')->where('type', $type)->get();
        // dd($users);


        foreach ($users as $user) {
            // Customize this with your mail logic
            $mailData = [
                'user' => $user,
                'subject' => 'Your Subject Here',
                'customMessage' => 'Hello, ' . $user->name . '! This is a custom message for you.',
                // Add any other data you need in your email template
            ];


            Mail::to($user->email)->send(new QualifyMail($mailData));
        }
        return redirect()->route('superadmin')->with('success', 'Mails sent successfully.');



    }









    public function sendEmailsSub(Request $request)
    {
        // $users = Apply::where('status','accepted')->get();
        $users = Subscriber::all();



        foreach ($users as $user) {
            // Customize this with your mail logic
            $mailData = [
                'user' => $user,
                'subject' => 'Your Subject Here',
                'customMessage' => 'Hello, ' . $user->name . '! This is a custom message for you.',
                // Add any other data you need in your email template
            ];


            Mail::to($user->email)->send(new SubscriberMail($mailData));
        }
        return redirect()->route('superadmin')->with('success', 'Mails sent successfully.');



    }










    public function ApplicationEmail(Request $request)
    {
        // $users = Apply::where('status','accepted')->get();
        $users = Apply::all();



        foreach ($users as $user) {
            // Customize this with your mail logic
            $mailData = [
                'user' => $user,
                'subject' => 'Your Subject Here',
                'customMessage' => 'Hello, ' . $user->name . '! This is a custom message for you.',
                // Add any other data you need in your email template
            ];


            Mail::to($user->email)->send(new ApplicationEmail($mailData));
        }
        return redirect()->route('superadmin')->with('success', 'Mails sent successfully.');


}
}

