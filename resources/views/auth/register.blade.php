
<!DOCTYPE html>
<html>


<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 400; /* Regular */

        }

        </style>

 <link rel="icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" sizes="192x192" />



<div class="header-section">
  <div id="logoAndNav" class="container-fluid">
    <!-- Nav -->
       <nav class="navbar navbar-expand header-navbar justify-content-between container">
    <!-- White Logo -->
    <a class="navbar-brand" href="/" aria-label="Front">
        <img style="width: 60px;" src="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg" alt="Image">
    </a>

    <!-- Navigation links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="btn-sm text-sm" style="color:green;font-weight:600;text-decoration:none;" href="{{url()->previous()}}">
                <i class="fas fa-angle-left fa-sm mr-1"></i> Go back
            </a>
        </li>
    </ul>
    <!-- End Navigation links -->
</nav>
    <!-- End Nav -->
  </div>
</div>
<x-guest-layout>


 <link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />


     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg">
    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 400; /* Regular */

        }

        </style>

<style>
    /* Styles for the preloader */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .preloader-icon {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>


<div id="preloader">
<div class="preloader-icon"></div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
setTimeout(function() {
    // Hide the preloader after 3 seconds
    document.getElementById("preloader").style.display = "none";
}, 2000); // Adjust the duration in milliseconds
});
</script>



  <div class="container text-center mt-4" style="padding-top:2rem;padding-bottom:1rem;border-raidus:6px; margin-bottom:2rem;">
    <a href="/" style="text-decoration:none;color:black;">
    
   <h3>Joint Africa Project Scholarship Programs (JAP)</h3>


 </a>
  <h5>Create JAP Free Account To Kickstart Your Application</h5>
 </div>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" style="margin-top: 1rem;padding-bottom:1rem;margin-bottom:3rem;">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>



        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>






        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}" style="text-decoration:none;">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4"  style="background-color:#309B32;">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


