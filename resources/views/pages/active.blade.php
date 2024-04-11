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

</style>

</head>
<body>
    <div class="w3-container">
        <h1><b><i class="fas fa-pencil-ruler fa-fw w3-margin-right"></i>Active Programs</b></h1>
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
    @if(count($activeSchemes) > 0)
        <div class="grid-container">
            @forelse($activeSchemes as $scheme)
                <div class="grid-item">
                    <div class="scheme-info">
                        <p><strong>ID:</strong> {{ $scheme->id }}</p>
                        <p><strong>Name:</strong> {{ $scheme->name }}</p>
                        <p><strong>Type:</strong> {{ $scheme->type }}</p>
                        <p><strong>Expiry Date:</strong> {{ $scheme->expiry_date }}</p>
                        <p style="background:yellow;"><strong>Status:</strong> {{ $scheme->status }}</p>
                    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    @php
          $existingApplication = App\Models\Apply::where('user_id', auth()->id())->exists();
      @endphp
      

      @if ($existingApplication)
        
      @else
          <a href="/apply" style="color: white; pointer-events: auto;">
              <button id="buttonEarnMobile"
                      class="buttonStep1 buttonStepMobile"
                      style="background: #309B32;
                             margin-top: 2rem;
                             color: white;
                             width: 14rem;
                             border-radius: 6px;

                             padding: 0.5rem;
                             cursor: pointer;border:none;">
                  Start Application
              </button>
          </a>
      @endif
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <div class="action-btn">
  @php
    $application = App\Models\Apply::where('user_id', auth()->id())->first();
@endphp

@if ($application && $application->status === 'rejected')
    <a href="/schemes/{{ $scheme->id }}">View</a>
    @php
        // Delete the application if its status is rejected
        $application->delete();
    @endphp
@endif


                    </div>
                    
                    
                       <div class="action-btn">
  @php
    $application = App\Models\Apply::where('user_id', auth()->id())->first();
@endphp

@if ($application && $application->status === 'rejected')
    <a href="/schemes/{{ $scheme->id }}">View</a>
    @php
        // Delete the application if its status is rejected
        $application->delete();
    @endphp
@endif


                    </div>
                    
                    
                    
                    
                    
                </div>
            @empty
                <p class="no-schemes-msg">No active scholarship schemes available.</p>
            @endforelse
        </div>
    @else
        <p class="no-schemes-msg">No active scholarship schemes available.</p>
    @endif
</div>


</div>



@endsection
