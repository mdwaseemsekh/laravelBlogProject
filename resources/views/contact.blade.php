@extends('layout.layout')
@section('title','Contact-WebQuickSolution')
@section('content')


<div class="container">

<div class="row">
    <div class="col-lg-8 col-sm-12 col-md-12 form-container">
    <h2 class="text-center">Contact Us</h2>
    <hr>
    @if($errors->any())
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif

    @if(session('message'))
    <div class="alert alert-success">
      {{session('message')}}
      We Will Contact You Within 4 Working Days

    </div>
    @endif

      <form action="{{route('queries')}}" method="post">
        @csrf
                <label for="name">Name :</label>
                <input type="text" name="name" value="{{old('name')}}" required placeholder="ex. John Doe">
                <br>
                <label for="email">Email :</label>
                <input type="email" name="email"  placeholder="ex. johndoe@example.com" value="{{old('email')}}" required >
                <br>
                <label for="mobile">Mobile :</label>
                <input type="tel" name="mobile" value="{{old('mobile')}}" placeholder="ex. 9898989898" required>
                <br>
                <label for="query">Query :</label>
               <textarea name="query" id="" rows="5" placeholder="ex. Your Query" required>{{old('name')}}</textarea>
               <br>
               <input class="btn btn-success" type="submit" value="Submit">
        </form>
        
    </div>
    <div class="col-lg-4 contact-info">

    <div class="info">
              <div class="address">
              <i class="fa-solid fa-location-dot"></i>
                <h4>Location:</h4>
                <p>J 2 B Gupta Colony Sangam Vihar New Delhi 110062</p>
              </div>

              <div class="email">
              <i class="fa-solid fa-envelope"></i>
                <h4>Email:</h4>
                <p>info@webquicksolutions.com</p>
              </div>

              <div class="phone">
              <i class="fa-solid fa-phone"></i>
                <h4>Call:</h4>
                <p>+91 8076912133</p>
              </div>

            </div>
    </div>
</div>
</div>



@endsection
