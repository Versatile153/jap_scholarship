<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Override Bootstrap container padding */
.container {
    padding-top: 50px;
}

/* Adjust form width */
.form-group {
    margin-bottom: 20px;
}

.form-control {
    width: 100%;
}

/* Center form on mobile devices */
@media (max-width: 576px) {
    .col-md-8 {
        max-width: 90%;
    }
}

    </style>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="/dashboard" class="navbar-brand" style="font-size:18px;">Home</a>
          <a href="/schemes" class="navbar-brand" style="font-size:18px;"> More schemes</a>
          {{-- <a href="/schemes" class="navbar-brand"> More schemes</a> --}}


        </div>
      </nav>

<div class="container pb-4 mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Update Scheme</h2>
            <form method="POST" action="/schemes/{{ $schemes->id }}">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="name">Scheme Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $schemes->name }}" placeholder="Enter Scheme Name" required>
                </div>
           <div class="form-group">
            <label for="grade">Scholarship Grade:</label>
            <input type="text" class="form-control" id="grade" name="grade" value="{{ $schemes->grade }}" placeholder="Enter Scheme Grade" required>
        </div>
        <div class="form-group">
            <label for="type">Scholarship Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $schemes->type }}" placeholder="Enter Scheme Type" required>
        </div>
        <div class="form-group">
            <label for="amount">Scholarship Amount:</label>
            <input type="text" class="form-control" id="amount" name="amount" value="{{ $schemes->amount }}" placeholder="Enter scholarship amount" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $schemes->expiry_date }}" required>
        </div>
        <div class="form-group">
            <label for="details">Scheme Details:</label>
            <textarea class="form-control" id="details" name="details" placeholder="Enter Scheme Details">{{ $schemes->details }}</textarea>
        </div>
                <button type="submit" style="background:green;color:white; border:none;" class="btn btn-primary">Update Scheme</button>
            </form>
        </div>
    </div>
</div>

<!--<div class="container">-->
<!--    <h2 class="text-center">Update Scheme</h2>-->
<!--    <form method="POST" action="/schemes/{{ $schemes->id }}" class="mx-auto">-->
<!--        @method('PUT')-->
<!--        @csrf-->
<!--        <div class="form-group">-->
<!--            <label for="name">Scheme Name:</label>-->
<!--            <input type="text" class="form-control" id="name" name="name" value="{{ $schemes->name }}" placeholder="Enter Scheme Name" required>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="grade">Scholarship Grade:</label>-->
<!--            <input type="text" class="form-control" id="grade" name="grade" value="{{ $schemes->grade }}" placeholder="Enter Scheme Grade" required>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="type">Scholarship Type:</label>-->
<!--            <input type="text" class="form-control" id="type" name="type" value="{{ $schemes->type }}" placeholder="Enter Scheme Type" required>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="amount">Scholarship Amount:</label>-->
<!--            <input type="text" class="form-control" id="amount" name="amount" value="{{ $schemes->amount }}" placeholder="Enter scholarship amount" required>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="expiry_date">Expiry Date:</label>-->
<!--            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value="{{ $schemes->expiry_date }}" required>-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="details">Scheme Details:</label>-->
<!--            <textarea class="form-control" id="details" name="details" placeholder="Enter Scheme Details">{{ $schemes->details }}</textarea>-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-primary btn-block">Update Scheme</button>-->
<!--    </form>-->
<!--</div>-->







<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
