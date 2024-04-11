@extends('layouts.app2')
@section('content')




<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script src="https://cdn.tiny.cloud/1/zrpqkacn4e3vsa7nzl9zbu3g5pm6q8z2v5xlrnsvkcgusfyl/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
 <div>
    <style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    justify-content: center;
    margin: 0 auto; /* Center the grid container horizontally */
    max-width: 1200px; /* Set a maximum width if needed */
}

.user-card {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box; /* Include padding and border in the width */
}

.user-info {
    margin-bottom: 10px;
    text-align: center; /* Center text within user info */
}

.user-info h4 {
    margin: 0;
}

.user-details {
    color: #555;
    text-align: center; /* Center text within user details */
}

    </style>





<style>

    .custom-container {
        text-align: center;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        max-width: 100%;
        width: 100%;
    }

    .custom-btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        cursor: pointer;
        background-color: #007bff;
        color: #fff;
    }

    .custom-btn:hover {
        background-color: #0056b3;
        color: #fff;
    }
</style>
</head>
<body>




<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
    }

    .user-card {
        background-color: #f9f9f9;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
    }

    .user-info h4 {
        margin: 0;
        font-size: 18px;
    }

    .user-info small {
        color: #777;
    }

    .user-details p {
        margin: 5px 0;
        color: #555;
    }
      .centered-div {
  
    height:10vh;
  margin-left:1rem;
  }
  
  /* Hide any potential icons within pagination links */
.pagination .page-item .page-link i {
    display: none;
}

</style>


<div class="centered-div" style="margin-bottom:1rem;padding-top:1rem">
  <h1>List of Users: {{ $userscount }}</h1>


</div>
<div class="grid-container">
    @foreach($users as $scheme)
        <div class="user-card">
            <div class="user-info">
                <h4>{{ $scheme->name }}</h4>
             <div class="client-info">
    <a href="mailto:{{ $scheme->email }}"><small>{{ $scheme->email }}</small></a>
    
</div>

            </div>
            <div class="user-details">
               
                <p>{{ $scheme->created_at->format('Y-m-d') }}</p>
            </div>
        </div>
    @endforeach
   
</div>

<div class="pagination">
    {{ $users->render('custom') }}
</div>

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



<!--<p>The button below sends a scholarship alert email to all users</p>-->
<!--<a href="/send-emails">-->
<!--<button class="custom-btn" style="background-color:#309B32; color:white;">Send Bulk Email</button>-->

<!--</a>-->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div>
                <h4>JAP Scholarship Email Updates</h4>
                <p>With the form below, you can send JAP Scholarship updates to verified JAP Users</p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm"> <!-- Add border and shadow to the card -->
                <div class="card-body">
            <form action="{{ route('email.send1') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                           <!-- Place the first <script> tag in your HTML's <head> -->

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


                    <p class="text-center">The button above sends updates email to all users of JAP Scholarship Platform</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
