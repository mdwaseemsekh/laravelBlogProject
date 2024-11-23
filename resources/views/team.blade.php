@extends('layout.layout')

@section('content')


<div class="container">
    <div class="top mt-3 pt-4">
    <h2 class="text-center">Meet Our Team</h2>
    <hr>
</div>
  
<div class="all-team-container row">
   
    <!-- single team container -->
    <div class="single-team-container col-sm-12 col-md-6 col-lg-4 px-4">
        <a href="blog.html">
        <div class="card">
            <img src="img/img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="name-of-team text-center"><h5>John Doe</h5></div><hr>
              <div class="role-of-team text-center"><h6>PHP Developer</h6></div>
            </div>
          </div>
        </a>
    </div>
    <!-- single team ends here -->
   
    <!-- single team container -->
    <div class="single-team-container col-sm-12 col-md-6 col-lg-4">
        <a href="blog.html">
        <div class="card">
            <img src="img/img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="name-of-team text-center"><h5>John Doe</h5></div><hr>
              <div class="role-of-team text-center"><h6>PHP Developer</h6></div>
            </div>
          </div>
        </a>
    </div>
    <!-- single team ends here -->
   
    <!-- single team container -->
    <div class="single-team-container col-sm-12 col-md-6 col-lg-4">
        <a href="blog.html">
        <div class="card">
            <img src="img/img.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="name-of-team text-center"><h5>John Doe</h5></div><hr>
              <div class="role-of-team text-center"><h6>PHP Developer</h6></div>
            </div>
          </div>
        </a>
    </div>
    <!-- single team ends here -->

   
    </div>
     
</div>

</div>


  



@endsection
