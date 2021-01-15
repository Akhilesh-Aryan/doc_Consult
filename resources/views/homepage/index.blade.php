@extends('homepage.base')
@section('title')
This is | homepage
@endsection
@section('content')
<div class="container-fluid pb-5 text-white" style="background-image:url('images/cats.jpg')">
    <div class="row p-3 pb-5">
        <h4 class="display-4 text-center ">Welcome To Our Services</h4>
        <h3 class=" text-center mt-3">Find and Book</h3>
        <div class="col-lg-6 p-1 mx-auto">
            <form action="" method="GET" class="form-inline mx-auto">
                <div class="input-group">
                    <input type="search" name="search" class="form-control fw-light ms-auto"
                        placeholder="search doctors, clinic, hospital etc.">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-light py-2 me-2">
                            <svg width="1.6em" height="2em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <h3 class="text-center mt-5 fw-light">Safety of your data is our
            top priority...
        </h3>
        <p class="mt-4 lead text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, tempora at ipsa nam voluptates, veritatis modi hic necessitatibus praesentium harum a et laudantium. Ducimus laudantium illum, dolorum iste ratione maiores?</p>

    </div>
</div>
</div>
<div class="container p-5">
    <div class="row d-flex">
        @foreach($doctor as $d)
        <div class="col-lg-4">
            <div class="card shadow-lg p-2">
                <a href="" class="ms-5"><img src="{{asset('images/'.$d->image)}}" alt="image" height="165px" class="ms-5 card-img-top w-50 rounded-circle"></a>
                <div class="card-body">
                    <h4 class="text-center text-success">Dr. Gopal Chandra </h4>
                    <p class="text-center text-success">{{$d->designation}}</p>
                    <p class="text-center">{{$d->district}}</p>
                    <p class="text-center">{{$d->speciality}}</p>
                    <p class="text-center mt-3">
                        <a href="" class="btn btn-success btn text-white">FEE {{$d->fees}}/-</a>
                        <a href="{{ route('apply') }}"
                        class="btn btn-success btn text-white">Book now</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
