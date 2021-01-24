@extends('homepage.base')
@section('title')
This is | homepage
@endsection
@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
          <li data-bs-target="#slide1" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#slide2" data-bs-slide-to="1"></li>
          <li data-bs-target="#slide3" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/cc5.jpg') }}" class="d-block w-100" height="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/cc4.jpg') }}" class="d-block w-100" height="500px" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/c1.jpeg') }}" class="d-block w-100" height="500px" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </a>
      </div>


</div>
</div>
<div class="container p-5">
    <div class="row d-flex">
        @foreach($doctor as $d)
        <div class="col-lg-4 mt-3">
            <div class="card shadow-lg p-2">
                <a href="" class="ms-5"><img src="{{asset('images/'.$d->image)}}" alt="image" height="165px" class="ms-5 card-img-top w-50 rounded-circle"></a>
                <div class="card-body">
                    <h4 class="text-center text-success">{{ $d->users->name }}</h4>
                    <p class="text-center text-success">{{$d->designation}}</p>
                    <p class="text-center">{{$d->district}}</p>
                    <p class="text-center">{{$d->speciality}}</p>
                    <p class="text-center mt-3">
                        <a href="" class="btn btn-success btn text-white">FEE {{$d->fees}}</a>
                        <a href="{{ route('apply',['id'=>$d->id]) }}"
                        class="btn btn-success btn text-white">Book now</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
