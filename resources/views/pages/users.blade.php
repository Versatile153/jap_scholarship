

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
 <link rel="icon" href="https://d67gbjf2ukphr.cloudfront.net/wp-content/uploads/2019/04/cropped-iconlarge-02-1-192x192.png" sizes="192x192" />


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
          <a href="/dashboard" class="navbar-brand" style="font-size:18px;">Home</a>
          <a href="/schemes" class="navbar-brand" style="font-size:18px;"> View Programs</a>
          {{-- <a href="/schemes" class="navbar-brand"> More schemes</a> --}}


        </div>
      </nav>


   <div class="container pb-4">
    <form class="mt-4" method="POST" action="/usersdata">
        @csrf
        <h2 class="mb-4 text-center">Profile Details Form</h2>

        <!-- Personal Information -->
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name:</label>
            <input type="text" class="form-control" id="fullName" name="full_name" value="{{ $user->name }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>

        <!-- Academic Information -->
        <div class="mb-3">
            <label for="school" class="form-label">Current School/Institution:</label>
            <input type="text" class="form-control" id="school" name="current_school" required>
        </div>

        <div class="mb-3">
            <label for="gpa" class="form-label">GPA:</label>
            <input type="number" class="form-control" id="gpa" name="gpa" step="0.01" required>
        </div>

        <!-- Financial Information -->
        <div class="mb-3">
            <label for="income" class="form-label">Family Income:</label>
            <input type="number" class="form-control" id="income" name="family_income" required>
        </div>

        <!-- Extracurricular Activities -->
        <div class="mb-3">
            <label for="activities" class="form-label">Extracurricular Activities:</label>
            <textarea class="form-control" id="activities" name="extracurricular_activities" rows="4"></textarea>
        </div>

        <!-- Essay or Personal Statement -->
        <div class="mb-3">
            <label for="essay" class="form-label">Essay or Personal Statement:</label>
            <textarea class="form-control" id="essay" name="personal_statement" rows="4"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" style="margin-top:2rem;background: #309B32; border-radius: 6px;
 id='button100' class='buttonStep2Mobile buttonStepMobile' style="background: #309B32;">Create Profile</button>
    </form>
</div>





<!-- Bootstrap JS and Popper.js (Optional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
