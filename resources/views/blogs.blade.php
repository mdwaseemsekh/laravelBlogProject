@extends("layout.layout")

@section('title','Blogs')
@section("content")

<div class="container">
    <div class="top">
    <h2 class="text-center">Blogs</h2>
    <hr>
</div>
<div class="all-blog-container row">
    @if($searching)
   <div class="search-section text-center">
    <h3>Search Result for "{{$search}}"</h3>
   </div>
   @endif
    <!-- single blog container -->
     @foreach($posts as $post)
    <div class="single-blog-container col-sm-12 col-md-6 col-lg-4">
        <a href="/blog/{{$post['slug']}}">
        <div class="card">
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-text">{{ substr(strip_tags($post['title']), 0, 22) }}...</h5>
                <p>{{ substr(strip_tags($post['content']), 0, 60) }}...</p>

              <button class="btn btn-primary">Read More.</button>
            </div>
          </div>
        </a>
    </div>
    <!-- single container ends here -->
     @endforeach
     
    </div>
    
    
    
    
</div>
<div class="pagination d-flex justify-content-center mt-3">

    {{ $posts->links() }}
</div>





@endsection
