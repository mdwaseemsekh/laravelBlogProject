<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login WebQuickSolution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    .login-container{
       display: flex; 
       height: 100vh;
       width: 100vw;
       justify-content: center;
       align-items: center;
       background-image: url("{{ asset('storage/admin.jpg')}}");
        background-size: cover;
    }

    .card{
        height: 50vh;
        width: 50vw;
    }

    body{
        width: 100vw;
        height: 100vh;
        background-image: url("{{ asset('storage/images/admin.jpg')}}");
        background-size: cover;
    }
  </style>
</head>
  <body>
  
  
<div class="container login-container">

    <div class="card">
        <div class="card-title">
            <h3 class="text-center mt-1 mb-3">Admin Login</h3>
        </div>
        <div class="card-body">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form action="{{route('admin.check')}}" method="post">
@csrf
<div class="form-floating mb-3">
  <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required>
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating mb-3">
  <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
  <label for="floatingPassword">Password</label>

  <div class="mb-3 mt-3">
  <button name="login-btn" class="btn btn-primary">Login</button>
  </div>
</div>
</form>
</div>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>