@extends('admin.layouts.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">
                Update Your Blog
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{route('blog.update',$blog->slug)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Blog Title : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" required value="{{$blog->title}}">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Category : </label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="category" value="{{$blog->category}}" placeholder="Category of Blog" required>
                </div>

                <!-- Old Image Preview -->
                <div class="form-group mt-3">
                    <label for="currentImage">Current Image:</label><br>
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Current Image" style="max-width: 200px; max-height: 200px;">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Your New Image</label>
                    <input class="form-control" name="image" type="file" id="formFile" required>
                </div>


                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Blog Content :</label>
                    <textarea class="form-control" name="content" id="editor" rows="5" required>{{  $blog->content }}</textarea>
                </div>

                <div class="mb-3">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/38.1.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>


@endsection