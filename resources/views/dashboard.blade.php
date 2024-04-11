@extends('layouts.app1')
@section('content')


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-eznd/z9qzdm5GpIZ8PjOfiGgbyfwHHsTtZz0qWO6l5r5Ls3uIJLlYlEByd7Lvl5Z" crossorigin="anonymous">



@if(session('success'))
<div class="alert alert-success text-center" id="successMessage">
    <i class="fas fa-check-circle mr-2"></i> <!-- Font Awesome checkmark icon -->
    {{ session('success') }}
</div>

    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    </script>
@endif


{{--
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif --}}

@if(session('error'))
<div class="alert alert-danger text-center">
    <i class="fas fa-exclamation-triangle mr-2"></i> <!-- Font Awesome exclamation triangle icon -->
    {{ session('error') }}
</div>

@endif

<style>
   .container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 20px;
}

.child {
  border: 1px solid #ddd;
  padding: 20px;
  text-align: center;
}

.custom-btn {
  width: 100%; /* Adjust the width as needed */
}

@media (min-width: 768px) {
  /* Add a media query for larger screens */
  .container {
    grid-template-columns: repeat(2, 1fr);
  }
}
.highlight {
    background-color: yellow;
    /* Other styles to make the highlighted text stand out */
}


  </style>

<div class="w3-container">
    <h1><b><i class="fas fa-pencil-ruler fa-fw w3-margin-right"></i> Instructions</b></h1>
</div>

<div class="w3-container">

    <br/>
    <ol>
        <li>
 Read Me
 , <span class="highlight" style="font-weight:600;"> you can only apply for one scholarship program</span>, you can view available programs <a  class="highlight" href="/active">here</a></li>

        <li>For any inquiries or if you encounter any difficulties while completing and submitting the online form, please feel free to reach out to us at <em><strong><a href="mailto:support@japsholarship.org">support@japsholarship.org</a>
</strong></em> before the application deadline.</li><br/>

<li>You can preserve your application data while filling out the form by creating your profile <a href="/usersprofile" style="background:yellow;">Here</a> ‘Or updating your profile <a href="/profileupdate" style="background:yellow;">Here</a> before applying. This action allows you to log in again later and make edits to your application form. We advise you to do this  regularly as you progress through the application to prevent loss of captured information.</li><br/>

<li>To submit the application form, simply click the ‘Submit’ button. Please note that once the application form is submitted, <em>it cannot be edited.</em></li><br/>

<li>Upon successful submission of your application form, you will receive on-screen confirmation and an email confirmation within 30 minutes.</li><br/>

<li>Before proceeding with the application form, ensure that you have scanned, saved, and prepared the following documents for uploading. All documents must be in PDF format, and each attachment must not exceed <strong>2MB</strong> in size.</li><br/>

<ul>
<li>A copy of the data/bio page of your passport.</li>
<li>A stamped academic transcript/results slip for the last two years of your study.</li>
<li>A copy of the official acceptance letter/s from the university/universities. The letter(s) must:
<ul>
<li>Be addressed to you.</li>
<li>Specify the degree program to which you have been accepted to study.</li>
<li>Indicate the academic year in which the degree program will commence.</li>
<li>Specify the duration of the course (e.g., one year).</li><br/>
If any of the above information is missing from the acceptance letter, please upload copies of other official university documentation as evidence. Failure to provide supporting documentation for any missing information may result in your application not being considered.
</ul>
</li>
<li>A copy of a valid study permit or visa OR proof of application.</li>
<li>A detailed CV/Resume comprising not more than four (4) single-sided pages.</li>
<li>Two reference letters (each not exceeding 3 pages) addressing your demonstration of integrity, competency, and/or potential as a leader, as well as your commitment to the development of the African continent.</li>


</ul>

    </ol>
    <center>
      
  @php
          $existingApplication = App\Models\Apply::where('user_id', auth()->id())->exists();
      @endphp
      
      
             

      @if ($existingApplication)
         
             <p>
    congrats!, <span class="highlight"> you have already applied for a program</span>, you can check your application status <a  class="highlight" href="/history">here</a>
</p>

          
              @endif
    </center>
    <br/>

</div>

  <div class="container">
    @foreach($schemes as $scheme)

      <div class="child">
          <h3 style="margin-bottom: 1.3rem;">{{ $scheme->name }}</h3>
          <p>{{ Str::limit($scheme->details, 100) }}</p>
         @php
          $existingApplication = App\Models\Apply::where('user_id', auth()->id())->exists();
      @endphp
      

      @if ($existingApplication)
        
      @else
          <a href="/apply" style="color: white; pointer-events: auto;">
              <button id="buttonEarnMobile"
                      class="buttonStep1 buttonStepMobile"
                      style="background: #309B32;
                             margin-top: 2rem;
                             color: white;
                             width: 14rem;
                             border-radius: 6px;

                             padding: 0.5rem;
                             cursor: pointer;border:none;">
                  Start Application
              </button>
          </a>
      @endif

      </div>
      @endforeach


@endsection

