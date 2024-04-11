@extends('layouts.app1')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
.scrollable-grid {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr)); /* Two items per row */
    gap: 10px;
    justify-content: center; /* Center items horizontally */
}

/* Optional: Media query to adjust the grid for smaller screens */
@media screen and (max-width: 768px) {
    .scrollable-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Adjust as needed */
        padding-left:1rem;
    }
}

.grid-item {
    border: 1px solid #ccc;
    padding: 10px;
}

.scheme-info {
    margin-bottom: 5px;
}

.action-btn {
    margin-top: 5px;
}

/* Style for form buttons */
.grid-item form button[type="submit"],
.grid-item form button[type="button"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.grid-item form button[type="submit"]:hover,
.grid-item form button[type="button"]:hover {
    background-color: #0056b3;
}

/* Style for anchor links */
.action-btn a {
    text-decoration: none;
    color: gray;
    width:100%;
    padding: 5px 10px;
    border: 1px solid green;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
}


.form-row {
    display: flex;
    gap:1rem;
    padding-top:1rem;
    align-items: center; /* Align items vertically */
}

.form-row form {
    margin-right: 10px; /* Adjust spacing between forms */
}

.custom-select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    padding: 8px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    cursor: pointer;
}

.custom-select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}


</style>

</head>
<body>

    <div class="w3-container">
        <h1><b><i class="fas fa-pencil-ruler fa-fw w3-margin-right"></i>Programs</b></h1>
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
<div class="scrollable-grid">
    @foreach($schemes as $scheme)
        <div class="grid-item">
            <div class="scheme-info">{{ $scheme->id }}</div>
            <div class="scheme-info">{{ $scheme->name }}</div>
            <div class="scheme-info">{{ $scheme->type }}</div>
            <div class="form-row" >
            <div class="scheme-info">{{ $scheme->expiry_date }}</div>
            <div class="action-btn">
                <a href="/schemes/{{ $scheme->id }}">View</a>
            </div>
            </div>
            @auth
    @if(auth()->user()->level == 2)


            <div class="form-row" >
    <form action="{{ route('schemes.destroy', $scheme->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="background:green;">Delete</button>
    </form>
    <form action="{{ route('updateStatus', $scheme->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="input-group">
            <select class="custom-select" name="status" onchange="this.form.submit()">
                <option value="active" {{ $scheme->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="expired" {{ $scheme->status == 'expired' ? 'selected' : '' }}>Expired</option>
                <option value="cancelled" {{ $scheme->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
            </select>
        </div>
    </form>
</div>
@endif
@endauth
        </div>
    @endforeach
</div>


@endsection
