
@extends('layouts.app1')
@section('content')





<style>


    .btn-group {
        display: flex;
        margin-top: 20px;
    }

    .btn {
        flex: 1;
        margin-right: 10px;
    }

    .btn-primary {
        background-color: #007bff;
        color: white;
    }

    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }



    .confirm-button {
        background-color: #dc3545;
        color: white;
    }
</style>

</head>
<body>


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

<style>


    .container {
        display: flex;
        max-width: 600px; /* Adjust the max-width as needed */
        width: 100%;
        border: 2px solid #333;
    }

    .left, .right {
        flex: 1;
        padding: 20px;
        text-align: center;
    }

    .divider {
        border-left: 2px solid #333;
        height: 100%;
    }

    .card {
    width: 100%; /* Updated width to span the entire space */
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    margin: 10px;
}

.card img {
    width: 100%;
    height: auto;
}

.card-body {
    padding: 16px;
}

.card-title {
    font-size: 18px;
    font-weight: bold;
}

.card-text {
    color: #555;
}

</style>
</head>
<body>

    <div class="w3-container">
        <h1><b><i class="fas fa-pencil-ruler fa-fw w3-margin-right"></i>Users Profile</b></h1>
    </div>
    <div class="card">
   
        <div class="card-body">
            @if(isset($profile))
            <h5 class="card-title">User Name:{{ $profile->full_name }}</h5>
            <p class="card-text">Email: {{ $profile->email }}</p>
            <p class="card-text">Phone: {{ $profile->phone }}</p>
            <p class="card-text">School: {{ $profile->current_school }}</p>
            <p class="card-text">Hobby: {{ $profile->extracurricular_activities }}</p>
        @else
            <p>Hey {{ auth()->user()->name}}, Create a profile to stand a better chance<a href="/users">here</a>.</p>
        @endif



            @if(auth()->user()->profile)
            {{-- User has a profile, display update link --}}
            <li class="mb-1 group active" style="list-style-type: none;" style="background: rgb(64, 2, 103);">
                <a style="background-color:#309B32;" href="/profileupdate" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100"  style="background: rgb(64, 2, 103);">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <button id='buttonEarnMobile'
                    class='buttonStep1 buttonStepMobile'style="background:#309B32;maargin-top:2rem; color:white; width:14rem; padding:0.5rem;cursor:pointer; border:none;">Update Profile
                </button>
                </a>
            </li>
        @else
            {{-- User doesn't have a profile, display create link --}}
            <li class="mb-1 group active" style="list-style-type: none;">
                <a style="background-color:#309B32;" href="/usersprofile" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <button id='buttonEarnMobile'
                    class='buttonStep1 buttonStepMobile'style="background:#309B32;maargin-top:2rem; color:white; width:14rem; padding:0.5rem;cursor:pointer;border:none;">Create Profile
                </button>
                </a>
            </li>
        @endif

        </div>
    </div>


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

@endsection

