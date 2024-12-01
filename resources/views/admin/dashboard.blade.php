@extends('admin.layouts.layout')

@section('content')
<div class="text-center" >
<h3>   
Welcome, {{Auth::guard('admin')->user()->name}}
</h3>
</div>
<div class="container">
    <div class="top">
    <h2 class="text-center">Blogs</h2>
    <hr>
</div>
<div class="all-blog-container row">
@if(session('status'))
    <div class="alert alert-dismissible alert-success">
        {{session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="add-blog-btn d-flex">
       <a href="{{route('add_blog')}}"> <button class="btn btn-success">Add New blog</button> </a>
    </div>
    @if($searching)
   <div class="search-section text-center">
    <h3>Search Result for "{{$search}}"</h3>
   </div>
   @endif
    <!-- single blog container -->
     @foreach($blogs as $blog)
    <div class="single-blog-container col-sm-12 col-md-6 col-lg-4">
       
        <div class="card">
            <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-text">{{ substr(strip_tags($blog['title']), 0, 22) }}...</h5>
                <p>{{ substr(strip_tags($blog['content']), 0, 60) }}...</p>
                <div class="d-flex">
                <a href="/admin/update-blog/{{$blog['slug']}}"> 
                <div class="edit-delete-btn">
                <button class="btn btn-primary">Edit Blog</button>
                </a>
              <!-- delete form start  -->
              <form action="{{ route('blog.delete')}}" method="POST" onsubmit="return confirmDelete()">
               @csrf
               @method('DELETE')
              <input type="hidden" name="id" value="{{ $blog->id }}">
                <button type="submit" class="btn btn-danger mx-2">Delete Blog</button>
              </form>
              </div>
              </div>

            </div>
          </div>
       </div>
    <!-- single container ends here -->
     @endforeach
     
    </div>
    
    
    
    
</div>
<div class="pagination d-flex justify-content-center mt-3">

    {{ $blogs->links() }}
</div>


<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this blog? This action cannot be undone.');
    }
</script>

@endsection