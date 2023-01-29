@extends('locals.master')
@section('content')


<div class="container">
  <div class="container">
          <h2 style="font-family:verdana;font-weight: bold;">Event List</h2><br>

          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <center>
            @foreach($mydata as $evt)  
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <div class="container">
                            <div class="row-cols-1 row-cols-xl-4 g-6">
                                  <div class="shadow p-3 mb-3 bg-body rounded card mb-3">
                                            <img src="{{asset($evt->image)}}" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <h5 class="card-title">{{$evt -> eventName}}</h5>
                                                <p class="card-text">{{$evt -> eventLocation}}</p>
                                                <p class="card-text">{{$evt -> eventDate}}</p>
                                                <a href="/locals/{{$evt->id}}/eventdetail" class="btn btn-primary"></a>
                                        </div>
                                  </div>
                            </div>
                        </div>
                  </div>         
            </div>
            @endforeach
          </center>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

  </div>
</div>

@endsection