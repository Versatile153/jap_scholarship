@extends('layouts.app2')
@section('content')

       <style>
    .review-link {
        display: inline-block;
        background-color: #309B32;
        color: white;
        padding: 6px 16px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        margin-bottom:.5rem;
    }

    .review-link:hover {
        background-color: #267328;
    }
</style>

<style>
    .grid-container {
        display: flex;
        flex-wrap: wrap;
    }

    .grid-item {
        flex: 1 0 20%; /* Adjust the width of grid items */
        margin: 0 10px 20px 0; /* Adjust margin between grid items */
        border: 1px solid #ccc; /* Add border for grid items */
        padding: 10px; /* Add padding for grid items */
    }

    /* Responsive styles */
    @media screen and (max-width: 768px) {
        .grid-item {
            flex: 1 0 40%; /* Adjust the width of grid items for smaller screens */
        }
    }

    @media screen and (max-width: 576px) {
        .grid-item {
            flex: 1 0 100%; /* Adjust the width of grid items for mobile screens */
        }
    }
    
    .custom-form {
        background: none;
        margin-bottom: 10px; /* Add margin between forms */
    }

    .custom-select {
        background: none;
        width: 100%; /* Make the select element full width */
        padding: 8px; /* Add padding to the select element */
        border: 1px solid #ccc; /* Add border to the select element */
        border-radius: 5px; /* Add border radius to the select element */
        box-sizing: border-box; /* Include padding and border in element's total width and height */
    }
     .centered-div {
  
    height:10vh;
  margin-left:1rem;
  }
</style>


<div class="centered-div" style="margin-bottom:1rem;padding-top:1rem">
  <h1>List of Blogs</h1>


</div>
<div class="grid-container" style="margin:1rem;">
    @foreach($posts as $scheme)
    <div class="grid-item">
        <div class="client">
            <div class="client-img bg-img" style="background-image: url(img/3.jpeg)"></div>
            <div class="client-info">
                <h4>{{ $scheme->author }}</h4>
                <small>{{ $scheme->title }}</small>
            </div>
        </div>
        <p>Approved?:{{ $scheme->status }}</p>
        <p>{{ $scheme->created_at->format('Y-m-d') }}</p>


<a href="/show/{{ $scheme->id }}" class="review-link">Review blog</a>

       <form action="{{ route('updateStatusss', $scheme->id) }}" method="POST" class="custom-form">
    @csrf
    @method('PATCH')
    <div class="input-group">
        <select class="custom-select" name="status" onchange="this.form.submit()">
            <option value="no" {{ $scheme->status == 'no' ? 'selected' : '' }}>not approved</option>
            <option value="yes" {{ $scheme->status == 'yes' ? 'selected' : '' }}>Approved</option>
        </select>
    </div>
</form>

<form action="{{ route('updateStatussss', $scheme->id) }}" method="POST" class="custom-form">
    @csrf
    @method('PATCH')
    <div class="input-group">
        <select class="custom-select" name="status" onchange="this.form.submit()">
            <option value="no" {{ $scheme->status == 'no' ? 'selected' : '' }}>not Editor's</option>
            <option value="yes" {{ $scheme->status == 'yes' ? 'selected' : '' }}>Editor's</option>
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








@endsection
