@extends('layout.layout')
@section('Home','WebQuickSolution')
@section('content')

<style>
  
    </style>
    <!-- carousel starts here -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/about.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Servies Cards -->
    <h2 class="text-center mt-4 pt-4 pb-3">Our Servies</h2>
    <hr>

    <!-- card 1 -->
    <div class="container services-card">
        <div class="row container">

            <!-- extra cards -->
            <div class="col-sm-6 col-md-4 col-lg-3 indivisual-card">
                <div class="card">
                    <img src="img/Image-Maintenance.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 indivisual-card">
                <div class="card">
                    <img src="img/Image-Maintenance.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Website Mainatance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 indivisual-card">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Server Maintenance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 indivisual-card">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">App Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
<br> 
<br>
    
    <div class="container">
    <div class="index-recent-blog row">
       <h2 class="text-center">Our Latest Blogs</h2>
       <hr>
       <!-- single blog container -->
        @foreach($blogs as $blog)
        <div class="col-sm-6 col-md-4 col-lg-3 index-single-blog">
        <a href="/blog/{{$blog['slug']}}">
           <div class="card index-single-blog">
               <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="...">
               <div class="card-body">
               <h5 class="card-text">{{ substr(strip_tags($blog['title']), 0, 20) }}...</h5>
                <p>{{ substr(strip_tags($blog['content']), 0, 55) }}...</p>

                 <button class="btn btn-primary">Read More.</button>
               </div>
             </div>
           </a>
            </div>
<!-- single container ends here -->
        @endforeach
       
      <a href="/blogs">View All</a>

    </div>

    <!-- Our Team -->
    <div>
        <h4 class="text-center mt-4 pt-4 mb-4">
            Meet Out Team
        </h4>
        <hr>
    </div>
    <div class="team-main-div container">
        @foreach($teamMembers as $team)
        <div class=" indivisual-team-member">
            <div class="team-photo text-center">
                <img src="img/team/{{$team['photo']}}" alt="">
            </div>
            <div>
                <h5 class="text-center" >{{$team['name']}}</h5>
                <h6 class="text-center">{{$team['role']}} </h6>
            </div>
        </div>
        @endforeach



        <div class="view-all-team text-center">
            <a href="#">View All</a>
        </div>

    </div>

@endsection
