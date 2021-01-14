@extends('homepage.base')
@section('title')
This is | homepage
@endsection
@section('content')
<div class="container-fluid bg-primary text-white">
    <div class="row p-3">
        <h4 class="display-4 text-center ">Welcome To Our Services</h4>
        <h3 class=" text-center mt-3">Find and Book</h3>
        <div class="col-lg-6 p-1 mx-auto">
            <form action="" method="GET" class="form-inline mx-auto">
                <div class="input-group">
                    <input type="search" name="search" class="form-control fw-light ms-auto"
                        placeholder="search doctors, clinic, hospital etc.">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-light py-2 me-2">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
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
        <p class="lead my-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eum voluptate, at
            expedita voluptatum ducimus dicta consectetur quas minima repudiandae, labore distinctio aspernatur
            voluptatibus nobis ut. Laborum tempora doloremque deleniti!</p>
        <hr>
        <h3 class="text-center fw-light">Safety of your data is our
            top priority...
        </h3>

    </div>
</div>
</div>
<div class="container-fluid p-5 bg-light">
    <div class="row d-flex">
        @foreach($doctor as $d)
        <div class="col-lg-4">
            <div class="card shadow-sm p-2">
                <a href="" class="ms-5"><img src="{{asset('images/'.$d->image)}}" alt="image" height="150px" class="ms-5 card-img-top w-50 rounded-circle"></a>
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

{{--
<div class="modal fade" id="regForm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-light text-danger">To be with us please fill this form !</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-dark text-start">
            <form action="{{ route('docStore') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="contact">Contact no.</label>
                    <input type="text" name="contact" class="form-control"
                        value="{{ old('contact') }}">
                    @error('contact')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="gender">Gender</label>
                    <select class="form-control" name="gender">
                        <option disabled selected>---Select---</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="others">Others</option>
                    </select>
                    @error('gender')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="qualification">Quralifications</label>
                    <input type="text" name="qualification" placeholder="seperate by(,)"
                        class="form-control" value="{{ old('qualification') }}">
                    @error('qualification')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="location">Location</label>
                    <input type="text" name="location" class="form-control"
                        value="{{ old('location') }}">
                    @error('location')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="specialist_of">Specialist_Of</label>
                    <input type="text" name="specialist_of" class="form-control"
                        value="{{ old('specialist_of') }}">
                    @error('specialist_of')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="doc_image">Doctor's Image</label>
                    <input type="file" name="doc_image" class="form-control">
                    @error('doc_image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fees">Consultant Fee</label>
                    <input type="text" name="fees" class="form-control"
                        value="{{ old('fees') }}">
                    @error('fees')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="sitting_days">Sitting Days</label>
                    <input type="text" name="sitting_days" class="form-control"
                        value="{{ old('sitting_days') }}">
                    @error('sitting_days')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="session">Session</label>
                    <input type="text" name="session" class="form-control"
                        value="{{ old('session') }}">
                    @error('session')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="submit" name="post" class="btn btn-outline-success btn w-100"
                        value="Save Now">
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancle</button>
        </div>
    </div>
</div>
</div> --}}
