




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document Uploads</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
                               <style>
    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + .75rem + 2px);
        margin: 0;
        opacity: 0;
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        pointer-events: none;
        height: calc(1.5em + .75rem + 2px);
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }

    .custom-file-input:focus ~ .custom-file-label {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
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

      <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <div class="card bg-light">
                <div class="card-body">
                    <h2 class="text-center">Joint Africa Scholarship Programs (JAP)</h2>
                    
                    @if(session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>

                    <script>
                        setTimeout(function() {
                            document.querySelector('.alert').style.display = 'none';
                        }, 3000);
                    </script>
                    @endif

                    <div class="row pt-3 mt-2">
                        <div class="col-lg-4 d-none d-lg-block">
                            <img src="https://images.squarespace-cdn.com/content/v1/5e28b84bc3249f265a9a8ce8/006cc07f-7a4e-4656-85fc-ab7cfec6d25c/shutterstock_1310561783.jpg" class="img-fluid rounded w-100">
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <form method="post" action="/uploads" enctype="multipart/form-data">
                                @csrf
                                <h5>Upload Docs</h5>

                                <input type="text" class="form-control mb-3" placeholder="Degree/Course" name="course" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <input type="text" class="form-control mb-3" placeholder="course Duration" name="duration" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                <input type="text" class="form-control mb-3" placeholder="Academic Year" name="academic_year" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />


<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="passport" name="file1" accept="application/pdf" required>
    <label class="custom-file-label" for="passport">Choose file</label>
    <div class="invalid-feedback">Please choose a PDF file.</div>
</div>

<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="transcript" name="file2" accept="application/pdf" required>
    <label class="custom-file-label" for="transcript">Choose file</label>
    <div class="invalid-feedback">Please choose a PDF file.</div>
</div>

<div class="custom-file mb-3">
    <input type="file" class="custom-file-input" id="acceptance-letter" name="file3" accept="application/pdf" required>
    <label class="custom-file-label" for="acceptance-letter">Choose file</label>
    <div class="invalid-feedback">Please choose a PDF file.</div>
</div>

                                <!-- Add similar input fields for other documents -->

                                <input type="submit" class="btn btn-success btn-block" name="btnLogin" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
      