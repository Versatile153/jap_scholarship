@extends('layouts.app')
@section('content')

  <style>
  


    <style>

    /* Buttons */
    .button-container {
      text-align: center;
      margin-top: 20px; /* Adjust as needed */
    }
    .button-container a {
      margin: 0 10px; /* Adjust as needed */
    }
 
  </style>
  

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif !important;
            font-weight: 400; /* Regular */

        }

        </style>

 <link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />


  <!-- Centered div with congratulatory message -->
  <div class="container center-div">
    <div class="row">
        @if(session('success'))
        <div class="alert alert-success" id="successMessage">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 3000);
        </script>
    @endif
      <div class="col-md-12">
        
      </div>
    </div>
  </div>










    <div class="full-width-container" style="padding-top:6rem;padding-bottom:3rem;margin-top:4rem;   background-color: #333333; ">
    <div class="text-container" style="padding-bottom:3rem;">
<h1 style="color:white;">Congratulations <br>  {{ auth()->user()->name }}!
<i class="fas fa-flower"></i>
,</h1>
        <p>You've achieved great success. Well done! ,Kindly watch the video below for further instructions</p>

  
    </style>

      <a href="mailto:support@japscholarship.org"  style="display: block; width: 100%;">
        <button style="margin-top: 2rem; margin-left: 0; margin-right: 0; background: #277e2a; width: 100%; font-family: 'Montserrat', sans-serif !important;border:none;" id='button100' class='buttonStep2Mobile buttonStepMobile'>Contact for details</button>
    </a>





    </div>
    <div class="video-container" style="padding-bottom:2rem;margin-right:2rem;">
      <!-- Embed your responsive video player here (e.g., YouTube embed code) -->
      <video width="100%" height="315" controls>
  <source src="https://www.example.com/your-video.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

    </div>
    </div>

<div class="container-fluid text-center mt-2 pt-3">
  <div class="row">
    <div class="col">
  
      <div class="d-flex justify-content-center">
        <a style="background: #277e2a; color:white;" href="#" class="btn mr-2">Stripe Payment</a>
        <a href="#" class="btn btn-secondary">PayStack Payment</a>
      </div>
      
          <p style="font-weight:normal;" class="mt-3 pt-4 container">Financial constraints shouldn't hinder your pursuit of education. If you're unable to cover the application fees for our scholarship program, please don't hesitate to contact us. We understand the importance of accessibility and are committed to assisting deserving candidates. Drop us an email, and we'll explore potential avenues to support your application financially.</p>
            <div class="d-flex justify-content-center">
        <a style="background: #277e2a; color:white;" href="mailto:support@japscholarship.org" class="btn mr-2">Contact JAP Support</a>
        
      </div>
    </div>
  </div>
</div>

   
 @endsection

