@extends('layouts.app2')
@section('content')






<style>
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    justify-content: center;
    margin: 0 auto;
    max-width: 1200px;
}

.user-card {
    border: 1px solid #ddd;
    padding: 15px;
    border-radius: 8px;
    box-sizing: border-box;
}

.client {
    display: flex;
}

.client-img {
    width: 50px;
    height: 50px;
    background-size: cover;
    border-radius: 50%;
    margin-right: 15px;
}

.client-info {
    flex-grow: 1;
}

.user-details {
    text-align: center;
}

/* Additional Styles */
.type, .status, .date {
    margin: 5px 0;
}

a {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background-color: #4C87B3;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #305f8c;
}

.custom-select {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

 .centered-div {
    text-align: center; /* Center align text horizontally */
    height:20vh; margin-bottom:2rem;
  
  }

  /* Responsive styles */
  @media only screen and (max-width: 600px) {
    .centered-div {
        font-size:20px;
      width: 90%; /* Adjust width for smaller screens */
    }
  }
</style>


<div class="centered-div" style="margin-bottom:1rem;padding-top:1rem">
  <h2 style="margin:1rem;">List of JAP Applicants</h2>

  <div class="pagination">
    {{ $applies->render('custom') }}
</div>
</div>
<div class="grid-container" style="padding:1rem;">
    @foreach($applies as $scheme)
        <div class="user-card">
            <div class="client">
                <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <div class="client-info">
                    <h4>{{ $scheme->full_name }}</h4>
                    <small>{{ $scheme->email }}</small>
                </div>
            </div>
            <div class="user-details">
                <p class="type">{{ $scheme->type }}</p>
                <p class="status" style="background:yellow;">{{ $scheme->status }}</p>
                <p class="date">{{ $scheme->created_at->format('Y-m-d') }}</p>
                <a href="/user/{{ $scheme->id }}" style="background:green;color:white;text-decoration:none;">Review Application</a>
            </div>
            <form action="{{ route('updateStatuss', $scheme->id) }}" style="margin-top:.5rem;" method="POST" style="background: none;">
                @csrf
                @method('PATCH')
                <div class="input-group">
                    <select class="custom-select" name="status" onchange="this.form.submit()">
                           <option value="reviewed" {{ $scheme->status == 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                        <option value="accepted" {{ $scheme->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="rejected" {{ $scheme->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                     
                    </select>
                </div>
            </form>
        </div>
    @endforeach
    
  
</div>

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


<div class="custom-container">


@if(session('success'))
<div class="alert alert-success text-center" style="color: red;font-weight:400;" id="successMessage">
    <i class="fas fa-check-circle mr-2"></i> <!-- Font Awesome checkmark icon -->
    {{ session('success') }}
</div>

    <script>
        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 3000);
    </script>
@endif



@if(session('error'))
<div class="alert alert-danger text-center">
    <i class="fas fa-exclamation-triangle mr-2"></i> <!-- Font Awesome exclamation triangle icon -->
    {{ session('error') }}
</div>

@endif
<p>The button below sends mail to all scholarship applicants leting them <br> know that their applications have been recieved and currently reviewed</p>
<a href="/send-notice" style="background:green;color:white;text-decoration:none;">

Send Bulk Email

</a>
</div>





@endsection
