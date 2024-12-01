<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo-2.png')}}" type="image/x-icon">
</head>
<body>

<nav class="navbar bg-dark  navbar-expand-lg con" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/admin">
    <img id="logo-img" src="{{asset('img/logo-2.png')}}" alt="">    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/admin">Admin Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('add_blog')}}">Add Blog</a>
        </li>
        
      </ul>
      
      <div>
   
    <form action="{{route('admin.logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
    </div>
  </div>
</nav>



@yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>