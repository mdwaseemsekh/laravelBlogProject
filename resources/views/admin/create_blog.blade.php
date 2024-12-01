@extends('admin.layouts.layout')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">
                Add New Blog
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

    @if(session('status'))
    <div class="alert alert-dismissible alert-success">
        {{session('status')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <form action="{{route('blog.save')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label">Blog Title : </label>
  <input type="text" class="form-control" value="{{ old('title') }}" id="exampleFormControlInput1" name="title" placeholder="Title of Blog" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Category : </label>
  <input type="text" class="form-control" id="exampleFormControlInput1"  value="{{ old('category') }}" name="category" placeholder="Category of Blog" required>
</div>

<div class="mb-3">
  <label for="formFile" class="form-label">Default file input example</label>
  <input class="form-control" name="image" type="file" id="formFile" required>
</div>

                
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Blog Content :</label>
  <textarea class="form-control" name="content" id="editor" rows="5" required>{{ old('content') }} </textarea>
</div>
<input type="submit" class="btn btn-primary mb-3" name="submit" value="Submit">
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