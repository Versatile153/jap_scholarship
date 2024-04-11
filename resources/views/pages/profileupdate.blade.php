

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input, select, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>



    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a href="/dashboard" class="navbar-brand"style="font-size:18px;">Home</a>
          <a href="/schemes" class="navbar-brand" style="font-size:18px;"> View schemes</a>
          {{-- <a href="/schemes" class="navbar-brand"> More schemes</a> --}}


        </div>
      </nav>



      <form method="POST" action="{{ route('update.profile') }}" class="pb-5 mb-5">
          @if(session('message'))
    <div class="alert alert-info" id="messageAlert">
        {{ session('message') }}
    </div>

    <script>
        setTimeout(function() {
            document.getElementById('messageAlert').style.display = 'none';
        }, 4000); // Hide the message after 4 seconds (4000 milliseconds)
    </script>
@endif
        @csrf
        <h2 class="mb-4">Profile Update Form</h2>

        <!-- Personal Information -->
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="full_name" value="{{ $profile->full_name }}"  required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" value="{{ $profile->email }}" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="{{ $profile->phone }}"  required>
        </div>

        <!-- Academic Information -->
        <div class="mb-3">
            <label for="school" class="form-label">Current School/Institution:</label>
            <input type="text" class="form-control" id="school" name="current_school" value="{{ $profile->current_school }}"  required>
        </div>

        <div class="mb-3">
            <label for="gpa" class="form-label">GPA:</label>
            <input type="number" class="form-control" id="gpa" name="gpa" value="{{ $profile->gpa }}"  step="0.01" required>
        </div>

        <!-- Financial Information -->
        <div class="mb-3">
            <label for="income" class="form-label">Family Income:</label>
            <input type="number" class="form-control" id="income" name="family_income" value="{{ $profile->family_income }}"  required>
        </div>

        <!-- Extracurricular Activities -->
        <div class="mb-3">
            <label for="activities" class="form-label">Extracurricular Activities:</label>
            <textarea class="form-control" id="activities" name="extracurricular_activities" rows="4" style="padding: 10px; margin: 0;">{{ $profile->extracurricular_activities }}</textarea>
        </div>


        <!-- Essay or Personal Statement -->
        <div class="mb-3">
            <label for="essay" class="form-label">Essay or Personal Statement:</label>
           <textarea class="form-control" id="essay" name="personal_statement" rows="4" style="padding: 0; margin: 0; width: 100%;">{{ trim($profile->personal_statement) }}</textarea>

        </div>


        <button id='buttonEarnMobile' type="submit"
                                class='buttonStep1 buttonStepMobile'style="background:#309B32;maargin-top:2rem; color:white; width:14rem; padding:0.5rem;cursor:pointer;">Submit Update
                            </button>

    </form>





<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
