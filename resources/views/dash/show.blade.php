<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="/dashboard" class="navbar-brand" style="font-size:18px;">Home</a>
          <a href="/users" class="navbar-brand"style="font-size:18px;"> More Applications</a>
         

        </div>
      </nav>


      <div class="container-fluid mt-4 pb-5 mb-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Applicant Details
                    </div>
                    <div class="card-body">
                        <!-- Display Applicant Information -->
                        <p><strong>Name:</strong> {{ $applies->full_name }}</p>
                        <p><strong>Email:</strong> {{ $applies->email }}</p>
                        <p><strong>Phone:</strong> {{ $applies->phone }}</p>
                        <p><strong>Current School:</strong> {{ $applies->current_school }}</p>
                        <p><strong>Gpa:</strong> {{ $applies->gpa }}</p>
                        <p><strong>Family Income:</strong> {{ $applies->family_income }}</p>
                        <p><strong>Hobby:</strong> {{ $applies->extracurricular_activities }}</p>
                        <p><strong>Bio:</strong> {{ $applies->personal_statement }}</p>
                        <p><strong>Scholarship Name:</strong> {{ $applies->type }}</p>
                        <p style="color: green;font-weight:700;"><strong>Disablity:</strong> {{ $applies->disability_type }}</p>
                          <p style="background-color:yellow;"><strong>Application Status:</strong> {{ $applies->status }}</p>
                            <p style="background-color:yellow;"><strong>Are you a citizen of at least one African country (with a citizen’s passport from the country)?:</strong> {{ $applies->isCitizen ? 'Yes' : 'No' }}
</p>

 <p style=""><strong>Do you have a passport that is valid for at least nine (9) months from the application submission date?:</strong> {{ $applies->hasVPassports ? 'Yes' : 'No' }}
</p>

<p style=""><strong>Does your passport currently have at least three (3) double-sided blank pages?:</strong> {{ $applies->hasBPages ? 'Yes' : 'No' }}
</p>

<p style=""><strong>Do you currently permanently reside in an African country?:</strong> {{ $applies->isPresident ? 'Yes' : 'No' }}
</p>



<p style=""><strong>Preffered Region For Program:</strong> {{ $applies->region }}
</p>


<p style=""><strong>Preffered University:</strong> {{ $applies->eInst }}
</p>



                        <!-- Display Documents -->
                        <h5 class="mt-4">Documents:</h5>
                        @if (in_array($applies->file, ['pdf', 'doc', 'docx', 'txt']))
                        <a href="{{ asset("storage/{$applies->file}") }}" download>Download File</a>

    @elseif (strpos($applies->file, 'image') !== false)
        <img src="{{ asset("storage/{$applies->file}") }}" alt="">
    @else
        <p>Applicant file</p>
        <a href="{{ asset("storage/{$applies->file}") }}" download>Download File</a>
    @endif
             
                    </div>
                    

<p style="background:yellow; text-align:center;"><strong>Other Documents</strong>
</p>

@if ($uploads)
    @foreach ($uploads as $upload)
        <p>Course:{{ $upload->course }}</p>
        <p>Course Duration:{{ $upload->duration }}</p>
         <p>Academic Year:{{ $upload->duration }}</p>
    @endforeach
@else
    <p>No uploads found for this user.</p>
@endif

                    
                    <div class="container text-center mt-5 mb-2">
                        <a href="/users">
                        <button type="button" class="btn btn-secondary" style="background:green;color:white;">Return to applicants</button>

                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
