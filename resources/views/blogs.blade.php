@extends("layout.layout")

@section('title','Blogs')
@section("content")



<div class="container">
    <div class="top">
    <h2 class="text-center">See All Blogs</h2>
    <hr>
</div>
<div class="all-blog-container row">
   
    <!-- single blog container -->
     @foreach($posts as $post)
    <div class="single-blog-container col-sm-12 col-md-6 col-lg-4">
        <a href="/blog/{{$post['id']}}">
        <div class="card">
            <img src="img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-text">{{$post["title"]}}.</h5>
              <p>{{substr($post["content"],0,100)}}</p>
              <button class="btn btn-primary">Read More.</button>
            </div>
          </div>
        </a>
    </div>
    <!-- single container ends here -->
     @endforeach
   
   
    </div>
    
    
           
      
</div>

</div>



@endsection
