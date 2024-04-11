@extends('layouts.app1')
@section('content')

 <link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />


<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

/* Basic CSS styles for the alert */
.alert {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 5px;
}

/* Styles for the reviewed status */
.reviewed {
    background-color: #ffeeba; /* Yellow background color */
    color: #856404; /* Dark text color */
    border: 1px solid #ffc107; /* Yellow border color */
}

/* Styles for the accepted status */
.accepted {
    background-color: #d4edda; /* Green background color */
    color: #155724; /* Dark text color */
    border: 1px solid #c3e6cb; /* Green border color */
}

/* Styles for the rejected status */
.rejected {
    background-color: #f8d7da; /* Red background color */
    color: #721c24; /* Dark text color */
    border: 1px solid #f5c6cb; /* Red border color */
}

/* Styles for the heading */
.alert h2 {
    margin-top: 0;
}

/* Styles for the paragraph */
.alert p {
    margin-bottom: 0;
}

    /* Basic CSS styles for the alert */
.alert {
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background-color: #f8d7da; /* Red background color for error alert */
    color: #721c24; /* Dark text color for contrast */
    border: 1px solid #f5c6cb; /* Red border color */
    border-radius: 5px;
}

/* Styles for the heading */
.alert h2 {
    margin-top: 0;
}

/* Styles for the paragraph */
.alert p {
    margin-bottom: 0;
}

.scrollable-grid {
    overflow-x: auto;
}

.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
}

.grid-item {
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 10px;
    display: flex;
    flex-direction: column;
}

.scheme-info {
    flex-grow: 1;
}

.action-btn {
    margin-top: 10px;
    text-align: center;
}

.action-btn a {
    background: none;
    color: black;
    text-decoration: none;
    padding: 8px 16px;
    border: 1px solid black;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.action-btn a:hover {
    background-color: #ddd;
}

.no-schemes-msg {
    text-align: center;
}

.highlight {
    background-color: yellow;
    /* Other styles to make the highlighted text stand out */
}


</style>
  <link rel="icon" type="image/x-icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg">

</head>
<body>

    <div class="w3-container">
        <h1><b><i class="fas fa-pencil-ruler fa-fw w3-margin-right"></i>Application History</b></h1>
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
    @if(count($histories) > 0)
        <div class="grid-container">
            @forelse($histories as $scheme)
                <div class="grid-item">
                    <div class="scheme-info">
                        <p><strong>ID:</strong> {{ $scheme->id }}</p>
                        <p><strong>Name:</strong> {{ $scheme->name }}</p>
                        <p><strong>Program:</strong> {{ $scheme->type }}</p>
                     @if ($scheme->expiry_date)
    <p><strong>Expiry Date:</strong> {{ $scheme->expiry_date->format('Y-m-d') }}</p>
@else
    <p><strong>Expiry Date:</strong> Not Set</p>
@endif

                        <p><strong>Status:</strong> {{ $scheme->status }}</p>
                    </div>
                  
                </div>
            @empty
                <p class="highlight" style="background:yellow;" >No active scholarship schemes available.</p>
            @endforelse
        </div>
    @else
        <p class="no-schemes-msg" >you have not applied for any scholarship. click <a href="/active" style="background:yellow;">Here </a> to available programs</p>
    @endif
</div>




</div>

@foreach($histories as $history)
<div class="alert" style="background-color: 
@if($history->status === 'reviewed') 
    #ffffcc; /* Yellow for reviewed */
@elseif($history->status === 'accepted') 
    #ccffcc; /* Green for accepted */
@elseif($history->status === 'rejected') 
    #ffcccc; /* Red for rejected */
@else 
    #f0f0f0; /* Default gray for not-reviewed */
@endif">
        <h2>Application Status</h2>
        <p>Your application is <strong>{{ $history->status }}</strong>. Please wait for further updates.</p>
        
        @if($history->status === 'rejected')
    <p>Click <a href="/active">here</a> to view other available programs.</p>
@endif
    </div>
@endforeach



@endsection
