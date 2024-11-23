@extends('layout.layout')

@section('content')



    <!-- content start here -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 main">
                <div class="title">
                    <h2>{{$blog['title']}}</h2>
                    <p>by <b>{{$blog['auther']}}</b> on <b>{{$blog['created_at']}}</b></p>
                </div>
                <div class="content">
                {{$blog['content']}}
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
               <div class="popular-posts">
                <h3>Popular Posts From Us</h3>
                <hr>
               <div class="single-post">
                   <div class="post-title"><h5>Why PHP Best Programming For Fresher?
                   </h5></div>
                <div class="post-img"><img src="{{asset('img//1.jpg')}}" alt=""></div>
               </div>
               <div class="single-post">
                   <div class="post-title"><h5>Why PHP Best Programming For Fresher?
                   </h5></div>
                <div class="post-img"><img src="{{asset('img//2.jpg')}}" alt=""></div>
               </div>
               
               </div>
            
               <div class="popular-posts">
                <h3>You May Also Like</h3>
                <hr>
               <div class="single-post">
                   <div class="post-title"><h5>Why PHP Best Programming For Fresher?
                   </h5></div>
                <div class="post-img"><img src="{{asset('img//1.jpg')}}" alt=""></div>
               </div>
               <div class="single-post">
                   <div class="post-title"><h5>Why PHP Best Programming For Fresher?
                   </h5></div>
                <div class="post-img"><img src="{{asset('img//2.jpg')}}" alt=""></div>
                </div>
               </div>
            </div>
            </div>
        </div>
    </div>


@endsection
