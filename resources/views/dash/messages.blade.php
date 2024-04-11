@extends('layouts.app2')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

  
 <link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />
<script src="https://cdn.tiny.cloud/1/zrpqkacn4e3vsa7nzl9zbu3g5pm6q8z2v5xlrnsvkcgusfyl/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<!--<div class="container">-->
<!--    <div class="row justify-content-center mt-3">-->
<!--        <div class="col-md-8">-->
<!--            <div class="card">-->
<!--                <div class="card-header">Send Email</div>-->

<!--                <div class="card-body">-->
<!--                    @if(session('message'))-->
<!--                        <div class="alert alert-info">-->
<!--                            {{ session('message') }}-->
<!--                        </div>-->
<!--                    @endif-->

<!--                    <form action="{{ route('email.send') }}" method="post">-->
<!--                        @csrf-->

                        
<!--                        <div class="form-group">-->
<!--                            <label for="subject">Subject:</label>-->
<!--                            <input type="text" name="subject" class="form-control" required>-->
<!--                        </div>-->

<!--                        <div class="form-group">-->
<!--                            <label for="message">Message:</label>-->
<!--                            <textarea name="message" class="form-control" rows="5" required></textarea>-->
<!--                        </div>-->

<!--                        <button type="submit" class="btn btn-primary">Send Email</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->




    <style>
    .section-container {
        display: flex;
        flex-wrap: wrap;
        margin:2rem;
    }

    .left-div {
        flex: 1;
        padding: 10px;
        box-sizing: border-box;
    }

    .right-div {
        flex: 1;
        padding: 10px;
        box-sizing: border-box;
    }

    /* Styles for Swiper slider */
    .swiper-container {
        width: 100%;
        height: 100%;
    }

    .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Content div styles */
    .content-div {
        margin-bottom: 20px;
        background-color: #f0f0f0;
        padding: 10px;
        box-sizing: border-box;
        border-left:4px solid gray;
    }

    /* Responsive Styles */
    @media (max-width: 768px) {
        .section-container {
            flex-direction: column;
        }
        .left-div,
        .right-div {
            width: 100%;
        }
    }
    /* Default border for h3 */
    .changing-header {
        border-left: 4px solid green;
        padding-left: 10px; /* Add padding to separate text from border */
    }

    /* Red border */
    .changing-header.red-border {
        border-left-color: red;
    }




    </style>





    <div class="custom-section">
        <h2 style="text-align:center;margin-top:3rem;padding:1rem;padding-bottom:4rem;font-weight:600;">JAP Scholarship Programs</h2>

       

    </div>
@if(session('error'))
<div id="errorAlert" class="alert alert-danger text-center">
    <i class="fas fa-exclamation-triangle mr-2"></i>
    {{ session('error') }}
</div>
@endif

@if(Session::has('success'))
<div id="successAlert" class="alert alert-success text-center">
    {{ Session::get('success') }}
</div>
@endif

<script>
    // Function to hide the error and success messages after 3 seconds
    setTimeout(function() {
        document.getElementById("errorAlert").style.display = "none";
        document.getElementById("successAlert").style.display = "none";
    }, 3000); // 3000 milliseconds = 3 seconds
</script>


@php
    $undergradCount = App\Models\Apply::where('type', 'Undergraduate Overseas Scholarship Program')->count();
@endphp

@php
    $undergradCounts = App\Models\Apply::where('type', 'Undergraduate Overseas Scholarship Program')
                                        ->where('status', 'accepted')
                                        ->count();
@endphp

@php
    $undergradCountss = App\Models\Apply::where('type', 'Undergraduate Overseas Scholarship Program')
                                        ->where('status', 'rejected')
                                        ->count();
@endphp



@php
    $undergradCountype2 = App\Models\Apply::where('type', 'Undergraduate Continental Scholarship Program')->count();
                                        
                                        
$undergradCountype22 = App\Models\Apply::where('type', 'Undergraduate Continental Scholarship Program')
                                        ->where('status', 'accepted')
                                        ->count();
                                       
$undergradCountype222 = App\Models\Apply::where('type', 'Undergraduate Continental Scholarship Program')
                                        ->where('status', 'rejected')
                                        ->count();
                                        
                                        
                                        
       $undergradCount1 = App\Models\Apply::where('type', 'Postgraduate Overseas Scholarship Program')->count();

$undergradCount11 = App\Models\Apply::where('type', 'Postgraduate Overseas Scholarship Program')
                                     ->where('status', 'accepted')
                                     ->count();

$undergradCount111 = App\Models\Apply::where('type', 'Postgraduate Overseas Scholarship Program')
                                      ->where('status', 'accepted')
                                      ->where('status', 'rejected')
                                      ->count();




  $undergradCount3 = App\Models\Apply::where('type', '
Postgraduate Continental Scholarship Program')->count();

$undergradCount33 = App\Models\Apply::where('type', '
Postgraduate Continental Scholarship Program')
                                     ->where('status', 'accepted')
                                     ->count();

$undergradCount333 = App\Models\Apply::where('type', '
Postgraduate Continental Scholarship Program')
                                      ->where('status', 'accepted')
                                      ->where('status', 'rejected')
                                      ->count();


@endphp




    <div class="section-container" style="padding-bottom:3rem;">
       <div class="left-div">
             <h3 class="changing-header">Screening Process</h3>
                <p>After submitting your application, you can expect to receive a confirmation message to acknowledge its successful submission. This confirmation serves as a reassurance that your application has been received and is being processed.</p>     
                
                <p style="background:yellow;">Total Undergraduate Overseas Scholarship Program applicants: {{ $undergradCount }}</p>

                <p>Total rejected Undergraduate Overseas Scholarship Program applicant: {{ $undergradCountss }}</p>
        <p>Total accepted Undergraduate Overseas Scholarship Program applicant: {{ $undergradCounts }}</p>

                <hr>
                
                <p>In our application page, you'll find a curated selection of programs tailored to meet a diverse range of interests and aspirations. From scholarships and internships to training programs and mentorship opportunities, there's something for everyone.</p>
                
                  <p style="background:yellow;">Total Undergraduate Continental Scholarship Program applicants: {{ $undergradCountype2 }}</p>

                <p>Total accepted Undergraduate Continental Scholarship Program applicant: {{ $undergradCountype22 }}</p>
        <p>Total rejected Undergraduate Continental Scholarship Program applicant: {{ $undergradCountype222}}</p>
        
        <hr>
          <p>Crafting your profile is the key to streamlining your application process and enhancing your overall experience. By taking the time to create a comprehensive profile, you pave the way for smoother interactions with our platform and increase your chances of success.</p>
          
              <p style="background:yellow;">Total Postgraduate Overseas Scholarship Program applicants: {{ $undergradCount1 }}</p>
              
              
              <p>Total accepted Postgraduate Overseas Scholarship Program applicants: {{ $undergradCount11 }}</p>
              <p >Total rejected Postgraduate Overseas Scholarship Program applicants: {{ $undergradCount111 }}</p>

          

          

          
          
                
                 <hr>
          <p>Crafting your profile is the key to streamlining your application process and enhancing your overall experience. By taking the time to create a comprehensive profile, you pave the way for smoother interactions with our platform and increase your chances of success.</p>
          
              <p style="background:yellow;">Total Postgraduate Continental Scholarship Program applicants: {{ $undergradCount3 }}</p>
              
              
              <p>Total accepted Postgraduate Continental Scholarship Program applicants: {{ $undergradCount33 }}</p>
              <p >Total rejected Postgraduate Continental Scholarship Program applicants: {{ $undergradCount333 }}</p>

          
           
          
          
                </div>



        <div class="right-div">
            <!-- Content on the right side -->
             @foreach($schemes as $scheme)
            <div class="content-div">
                <h3 class="changing-header" style="color:red;">{{ $scheme->name }}</h3>
                
                
         <p id="schemeDetails">{{ \Illuminate\Support\Str::limit($scheme->details, 100) }}</p>
<a href="#" id="showMoreLink">Show More</a>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var schemeDetails = document.getElementById('schemeDetails');
        var showMoreLink = document.getElementById('showMoreLink');
        var originalText = schemeDetails.textContent;

        showMoreLink.addEventListener('click', function(event) {
            event.preventDefault();
            schemeDetails.textContent = originalText;
            showMoreLink.style.display = 'none';
        });
    });
</script>

                <p>Type:{{ $scheme->type }}</p>
                <p>Ex d:{{ $scheme->expiry_date }}</p>
            </div>
              @endforeach
            
    </div





<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .input-group {
            margin-bottom: 20px;
        }

        .custom-select {
            display: block;
            width: 100%;
            padding: 0.5rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.375rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            display: block;
            width: 100%;
            padding: 0.75rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            border: 1px solid transparent;
            border-radius: 0.375rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        .alert {
            margin-top: 20px;
            padding: 1rem;
            border-radius: 0.375rem;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .alert-danger .fas {
            margin-right: 8px;
            color: #721c24;
        }
    </style>

    <div class="container">
        
        

  <form action="{{ route('email.send') }}" method="post">
                        @csrf
<h5>Customize messages sent to awarded scholarships based on programs</h5>
 <div class="input-group">
                <select class="custom-select" name="type" required>
                    <option value="">Select Scholarship Type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type }}">{{ $type }}</option>
                    @endforeach
                </select>
            </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
    forced_root_block: '', // Prevents TinyMCE from adding <p> tags
  });
</script>

<textarea name="message">
  Welcome to JAP Scholarship!
</textarea>
                        </div>

                        <button type="submit" class="btn btn" style="background: #309B32;color:white;margin-top:1rem;margin-bottom:1rem;">Send Email</button>
                    </form>

            <p>The button above sends a scholarship alert email to all accepted scholarship applicants based on the selected scholarship</p>
            <!--<a href="/send-notice-qualified" class="btn btn-primary">Send Bulk Email</a>-->
    <a href="/user/qualified">
        <button type="submit" class="btn btn" style="background: #309B32;color:white;margin-top:1rem;margin-bottom:1rem;">View Lists</button>
    </a>
    </div>








  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
@endsection
