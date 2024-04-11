<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="icon" type="image/x-icon" href="https://imgs.search.brave.com/SXC53TiLHQpbaH9mjCTLVuigd2s6Ofesg7OyXjY-rOA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93d3cu/c2Nob2xhcnNoaXBw/b2ludHMuY29tL0Nv/bnRlbnQvU2Nob2xh/cnNoaXBQb2ludHMv/aW1hZ2VzL2dyYWR1/YXRpb24tY2FwLWNv/aW4uc3Zn.svg">
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="/dashboard" class="navbar-brand" style="font-size:18px;">Home</a>
          <a href="/schemes" class="navbar-brand" style="font-size:18px;"> More schemes</a>
          {{-- <a href="/schemes" class="navbar-brand"> More schemes</a> --}}


        </div>
      </nav>



<div class="container mt-5">

    <div class="table-responsive mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Expiry Date</th>
                    <th>Details</th>
                    <th>Scholarship Status</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $schemes->id }}</td>
                    <td>{{ $schemes->name }}</td>
                    <td>{{ $schemes->type }}</td>
                    <td>{{ $schemes->expiry_date }}</td>
                    <td>{{ $schemes->details }}</td>
                    <td>{{ $schemes->status }}</td>

                </tr>
            </tbody>

            @auth
            @if(auth()->user()->level == 2)
            <div class="d-flex flex-wrap">

                <a href="/schemes/{{ $schemes->id }}/edit">

                <button type="button" class="btn btn-secondary mr-2 mb-2">Update</button>

                </a>
            </div>
            @endif
            @endauth

        </table>

    </div>

    <div class="card text-center" id="schemes">
        <div class="card-header">
            You are applying for {{ $schemes->name }} type scholarship
        </div>
        <div class="card-body">

            @if($schemes->status === 'expired')
          <button class="btn btn-secondary" disabled>Application Closed</button>
      @elseif($schemes->status === 'cancelled')
      <button class="btn btn-secondary" style="background-color:#309B32;"> Application Cancelled</button>
     @else
    @php
        $loggedInUserId = auth()->id();
        $userApplied = App\Models\Apply::where('user_id', $loggedInUserId)->exists();
    @endphp

    @if ($userApplied)
        <!-- Display this anchor if the user has already applied -->
        <a href="/history" class="btn" style="background-color: yellow; color: b lack;">Already Applied,click to check application status</a>
    @else
        <!-- Display this anchor if the user has not applied -->
        <a href="/apply" class="btn" style="background-color: #309B32; color: white;">Apply now</a>
    @endif
@endif



        </div>

      </div>
</div>





<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
