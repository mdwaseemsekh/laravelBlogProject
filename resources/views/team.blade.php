@extends('layout.layout')
@section('title','Team-WebQuickSolution')


@section('content')


<div class="container">
    <div class="top mt-3 pt-4">
    <h2 class="text-center">Meet Our Team</h2>
    <hr>
</div>
  
<div class="all-team-container row">
<div class="all-team-container row">
    @foreach($teamMembers as $teamMember)
        <!-- Single team container -->
        <div class="single-team-container col-sm-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="team-img">
                <img src="{{ asset('img/team/'. $teamMember['photo']) }}" class="card-img-top" alt="{{ $teamMember['name'] }}">
                </div>
                <div class="card-body">
                    <div class="name-of-team text-center">
                        <h5>{{ $teamMember['name'] }}</h5>
                    </div>
                    <hr>
                    <div class="role-of-team text-center">
                        <h6>{{ $teamMember['role'] }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single team ends here -->
    @endforeach
    
</div>

    </div>
     
</div>

</div>


  



@endsection
