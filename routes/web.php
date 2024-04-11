<?php

use App\Http\Controllers\Profilecontroller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;

use App\Models\Scheme;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/slide', function () {
    return view('welcome1');
});
Route::get('/dashboard', function () {
    $canceledSchemesCount = Scheme::where('status', 'cancelled')->count();
    $allSchemesCount = Scheme::all()->count();
    $schemes=Scheme::all();

    $activeSchemesCount = Scheme::where('status', 'active')->count();
    $expiredSchemesCount = Scheme::where('status', 'expired')->count();

    return view('dashboard',compact('activeSchemesCount','canceledSchemesCount','expiredSchemesCount','allSchemesCount','schemes'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/thanku', [Pagescontroller::class, 'thanku'])->name('thankuu');

Route::get('/pi', [Pagescontroller::class, 'pi'])->name('pi');

});


Route::get('/rules', [Pagescontroller::class, 'rule']);
Route::get('/faqs', [Pagescontroller::class, 'faqs']);
Route::get('/blogs', [Pagescontroller::class, 'careers']);




Route::get('/about/jap', [Pagescontroller::class, 'terms']);
Route::get('/contact-us', [Pagescontroller::class, 'contact']);





Route::get('/privacy', [Pagescontroller::class, 'privacy']);
Route::get('/about', [Pagescontroller::class, 'about']);
Route::get('/scheme', [Pagescontroller::class, 'scheme']);
Route::get('/partnerships', [Pagescontroller::class, 'testimonials']);
Route::get('/user-profile', [Pagescontroller::class, 'profile']);
Route::get('/usersprofile', [Pagescontroller::class, 'profile1'])->name('usersprofile');
Route::get('/profileupdate', [Pagescontroller::class, 'profileupdate'])->name('profileupdate');


// routes/web.php

Route::middleware(['auth'])->group(function () {
    // Your other routes...
    Route::get('/show/{id}', [Pagescontroller::class, 'show']);

    // Route for updating the profile
Route::post('/update-profile', [Pagescontroller::class, 'updateProfile'])->name('update.profile');
Route::get('/apply', [Pagescontroller::class, 'apply']);
Route::post('/store/apply', [Pagescontroller::class, 'application']);



Route::get('/active', [Pagescontroller::class, 'active']);
Route::get('/expired', [Pagescontroller::class, 'expired']);
Route::get('/history', [Pagescontroller::class, 'history']);


Route::get('/admin', [Pagescontroller::class, 'admin'])->name('superadmin');


    // Route::post('/update-profile', 'PagesController@updateProfile')->name('update.profile');
});



// In web.php
use App\Http\Controllers\SchemeController;

Route::resource('schemes', SchemeController::class);




// routes/web.php

use App\Http\Controllers\UserController;

Route::post('/usersdata', [Usercontroller::class, 'usersdata']);



// Route::patch('/update-status/{id}', 'PagController@updateStatus')->name('updateStatus');
Route::patch('/update-status/{id}', [Pagescontroller::class, 'updateStatus'])->name('updateStatus');
Route::patch('/update-statuss/{id}', [Pagescontroller::class, 'updateStatuss'])->name('updateStatuss');
Route::patch('/update-statusss/{id}', [Pagescontroller::class, 'updateStatusss'])->name('updateStatusss');
Route::patch('/update-statussss/{id}', [Pagescontroller::class, 'updateStatussss'])->name('updateStatussss');




//admin
Route::middleware(['auth'])->group(function () {

Route::get('/users', [DashboardController::class, 'users']);
Route::get('/mail', [DashboardController::class, 'mail']);
Route::get('/my/subscribers', [DashboardController::class, 'schemes']);
Route::get('/user/profiles', [DashboardController::class, 'profiles']);
Route::get('/user/qualified', [DashboardController::class, 'qualified']);
Route::get('/user/{id}', [DashboardController::class, 'show']);
Route::get('/create/scheme', [DashboardController::class, 'createScheme']);



});

Route::post('/subscribe', [DashboardController::class, 'subscribe'])->name('subscribe');


// routes/web.php

// use App\Http\Controllers\SubscriberController;

// Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
// Route::post('/send-emails', [SubscriberController::class, 'sendEmails'])->name('send.emails');



use App\Http\Controllers\MailController;

Route::get('/send-emails', [MailController::class, 'sendEmails'])->name('send.emails');
Route::get('/send-notice', [MailController::class, 'sendNotice'])->name('send.notice');
Route::get('/send-notice-qualified', [MailController::class, 'sendNoticeQualify'])->name('send.notice.qualify');
Route::get('/send-emails-subscribers', [MailController::class, 'sendEmailsSub'])->name('send.emails.subcribers');

// routes/web.php or routes/api.php

use App\Http\Controllers\BlogController;

// Route::get('/blogs', [BlogController::class, 'index']);
Route::post('/blogs/store', [BlogController::class, 'store']);





use App\Http\Controllers\UploadController;

Route::get('/uploads', [UploadController::class, 'index'])->name('uploads.index');
Route::get('/uploads/create', [UploadController::class, 'create'])->name('uploads.create');
Route::post('/uploads', [UploadController::class, 'store'])->name('uploads.store');




// routes/web.php

use App\Http\Controllers\EmailController;

Route::get('/send-messages', [EmailController::class, 'showForm'])->name('email.form');
Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('email.send');


Route::post('/send-email1', [EmailController::class, 'sendEmail1'])->name('email.send1');



Route::post('/send-email2', [EmailController::class, 'sendEmail2'])->name('email.send2');


require __DIR__.'/auth.php';
