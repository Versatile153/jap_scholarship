@extends('layouts.app2')
@section('content')



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

 






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

@php
    $totalSubscribers = App\Models\Subscriber::count();
@endphp




<div class="container pt-5 mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div>
                <h4>JAP Scholarship Email Updates For Subscribers</h4>
                <p>With the form below, you can send JAP Scholarship updates to subscribers</p>
                <p style="background:yellow;">Total Subscribers: {{ $totalSubscribers }}</p>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm"> <!-- Add border and shadow to the card -->
                <div class="card-body">
                    <form action="{{ route('email.send2') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>

                        <button type="submit" class="btn btn" style="background: #309B32;color:white;margin-top:1rem;margin-bottom:1rem;">Send Email</button>
                    </form>

                    <p class="text-center">The button above sends updates email to all subscribers of JAP Scholarship Platform</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<p>The button below sends a message alert email to all JAP Scholarship subscribers</p>-->
<!--<a href="/send-emails-subscribers">-->
<!--<button class="custom-btn"  style="background-color:#309B32; color:white;">Send Bulk Email</button>-->

<!--</a>-->
<!--</div>-->




@endsection
