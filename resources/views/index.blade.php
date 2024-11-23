@extends('layout.layout')
@section('Home','WebQuickSolution')
@section('content')
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
                        <h5 class="card-title">Website Mainatance</h5>
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
                        <h5 class="card-title">Server Image-Maintenance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 indivisual-card">
                <div class="card">
                    <img src="img/6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Server Image-Maintenance</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Know More.</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Our Team -->
    <div>
        <h4 class="text-center mt-4 pt-4 mb-4">
            Meet Out Team
        </h4>
        <hr>
    </div>

    <div class="team-main-div container">
        <div class=" indivisual-team-member">
            <div class="team-photo">
                <img src="img/img.jpg" alt="">
            </div>
            <div class="">
                <h5>Md Waseem Sekh</h5>
                PHP Developer
            </div>
        </div>

        <div class=" indivisual-team-member">
            <div class="team-photo">
                <img src="img/img.jpg" alt="">
            </div>
            <div class="">
                <h5>Md Waseem Sekh</h5>
                PHP Developer
            </div>
        </div>

        <div class=" indivisual-team-member">
            <div class="team-photo">
                <img src="img/img.jpg" alt="">
            </div>
            <div class="">
                <h5>Md Waseem Sekh</h5>
                PHP Developer
            </div>
        </div>



        <div class="view-all-team">
            <a href="#">View All</a>
        </div>

    </div>


@endsection
