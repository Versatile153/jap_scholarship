@extends('layouts.app2')
@section('content')

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

    .client {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .client-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-size: cover;
        background-position: center;
        margin-right: 15px;
    }

    .client-info h4 {
        margin: 0;
        font-size: 18px;
    }

    .client-info small {
        color: #777;
    }

    .user-details {
        margin-top: 15px;
    }

    .scholarship-type,
    .register-date {
        margin: 0;
        color: #555;
    }

    .no-data {
        text-align: center;
    }
</style>

<div class="grid-container">
    @forelse($qualified as $scheme)
        <div class="user-card">
            <div class="client">
                <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
                <div class="client-info">
                    <h4>{{ $scheme->full_name }}</h4>
                    <small>{{ $scheme->email }}</small>
                </div>
            </div>
            <div class="user-details">
                <p class="scholarship-type">{{ $scheme->type }}</p>
                <p class="register-date">{{ $scheme->created_at->format('Y-m-d') }}</p>
            </div>
        </div>
    @empty
        <div class="user-card no-data">
            <p>No data available</p>
        </div>
    @endforelse
</div>

<div class="pagination">
    {{ $qualified->render('custom') }}
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



    <style>
        /* Style to make the form look like Bootstrap */
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .input-group {
            margin-bottom: 15px;
        }

        .custom-select {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">

        <form action="{{ route('send.notice.qualify') }}" method="GET">
            @csrf
            <div class="input-group">
                <select class="custom-select" name="type">
                    <option value="">Select Scholarship Type</option>
                    @foreach ($types as $user)
                    <option value="{{ $user }}">{{ $user }}</option>
                @endforeach

                </select>



@if(session('error'))
<div class="alert alert-danger text-center">
    <i class="fas fa-exclamation-triangle mr-2"></i> <!-- Font Awesome exclamation triangle icon -->
    {{ session('error') }}
</div>

@endif
<p style="margin-top: 2rem;">The button below sends a scholarship alert email to all accepted scholarship applicants based on the selected scholarship  <span style="background:yellow;">click <a href="/send-messages">here</a> to send customised mails instead</span></p>
<a href="/send-notice-qualified">
<button class="custom-btn"  style="background-color:#309B32; color:white;">Send Bulk Email</button>

</a>


</div>
            </div>
        </form>

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





@endsection
