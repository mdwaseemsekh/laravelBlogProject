
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Home Page')</title>
    <link rel="shortcut icon" href="{{asset('img/logo-2.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <!-- navbar Start here -->

    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img id="logo-img" src="{{asset('img/logo-2.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('blogs') ? 'active' : '' }}" href="{{route('blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('about-us') ? 'active' : '' }}" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" href="{{route('services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('team') ? 'active' : '' }}" href="{{route('team')}}">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact-us') ? 'active' : '' }}" href="{{route('contact')}}">Contact Us</a>
                    </li>


                </ul>
                <form class="d-flex" role="search" method="post" action="{{route('search_blog')}}">
                    @csrf
                    <input class="form-control me-2" name="search_blog" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>