@extends('layout.layout')
@section('title','Blog-WebQuickSolution')
@section('content')



    <!-- content start here -->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-8 main">
                <div class="title">
                    <h2>{{$blog['title']}}</h2>
                    <p>by <b>{{$blog['auther']}}</b> on <b>{{$blog['created_at']}}</b></p>
                </div>
                <div class="blog-img">
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="">
                </div>
                <div class="content">
                {!! $blog['content'] !!}
                </div>
            </div>

            <!-- recent blogs section -->
            <div class="col-sm-12 col-md-12 col-lg-4 text-center">
               <div class="recent-posts">
                <h3>Recent Posts From Us</h3>
                <hr>
                
                @foreach($recent_posts as $recent_post)
                <div class="card mb-3">
                <a href="/blog/{{$recent_post['slug']}}">
               <div class="single-post mt-3">
                 <div class="post-img"><img src="{{ asset('storage/' .$recent_post['image'])}}" alt="">
                </div>
                <div class="post-title"><h5>{{$recent_post['title']}}
                </h5></div> </div>
               </a>
               </div>
               @endforeach

              
               
               </div>
            
               <h3 class="text-center my-4">You May Also Like</h3>
               <hr>
               <div class="category-posts">
                @foreach($same_category_posts as $category_post)
                <a  href="/blog/{{$category_post['slug']}}">
               <div class="single-post card my-3">
                   <div class="post-img mt-3"><img src="{{ asset('storage/'.$category_post['image'])}}" alt=""></div>
                   <div class="post-title"><h5>{{$category_post['title']}}
                   </h5></div>
               </div>

               </a>
               @endforeach
               
               </div>
            </div>
            </div>
        </div>
    </div>


@endsection
