

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

</head>
<body>



    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="/admin" class="navbar-brand" style="font-size:18px;">Home</a>
          <a href="/schemes" class="navbar-brand" style="font-size:18px;"> View Programs</a>
          {{-- <a href="/schemes" class="navbar-brand"> More schemes</a> --}}


        </div>
      </nav>

     <div class="container pb-4 mb-4 mt-4">
    
    <form method="POST" action="{{ route('schemes.store') }}" class="mx-auto" style="max-width: 600px;">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Program Name:</label>
            <input type="text" id="name" name="name" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label for="grade" class="form-label">Scholarship Grade:</label>
            <input type="text" id="grade" name="grade" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Scholarship Type:</label>
            <input type="text" id="type" name="type" class="form-control"  required>
        </div>

        <div class="mb-3">
            <label for="amount" class="form-label">Scholarship Amount:</label>
            <input type="text" id="amount" name="amount" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="expiry_date" class="form-label">Expiry Date:</label>
            <input type="date" id="expiry_date" name="expiry_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="details" class="form-label">Scheme Details:</label>
            <textarea id="details" name="details" class="form-control" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary btn-block" style="background-color:#309B32;">Add Program</button>
    </form>
</div>


<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
