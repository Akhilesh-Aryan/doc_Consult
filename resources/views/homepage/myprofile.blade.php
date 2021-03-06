@extends('homepage.base')
@section('title')
This is my | profile
@endsection

@section('content')
<div class="container mb-3 mt-5">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card shadow-lg p-3">
                <div class="row d-flex">
                <div class="col-lg-4">
                    <a href="" class="ms-5"><img src="{{asset('images/' .$patient->image)}}" alt="dp not available" height="160px" class=" w-50 card-img-top rounded-circle"></a>
                    <p class="text-dark text-center mt-2 lead">{{ $patient->users->name }}</p>
                    <p class="text-dark ms-3 lead">{{$patient->contact}}</p>
                    <div class="list-group">
                        <span class="list-group-item list-group-item-action bg-success text-white lead">My Profile</span>
                        <a href="{{route('myprofile')}}" class="list-group-item list-group-item-action">My Appoitments</a>
                        <a href="" class="list-group-item list-group-item-action">Lab Appoitments</a>
                        <a href="" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h4 class="text-danger ms-2 lead">My Profile!</h4>
                    <form method="POST" action="" >
                        <div class="row mt-5 d-flex">
                            <div class="col-sm-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="" value="{{$patient->users->name}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="contact" class="contact">Mobile no</label>
                                <input type="text" class="form-control" id="contact" value="{{$patient->contact}}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="Email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="update email" value="{{$patient->users->email}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="gender" class="contact">Gender</label>
                                <input type="text" class="form-control" id="contact" value="{{$patient->gender}}" disabled value="">
                            </div>
                        </div>
                        <div class="btn-group float-end mt-3">
                            <a href="/" class="me-3 btn btn-danger rounded-0">cancel</a>
                            <input type="submit" class="btn btn-success rounded-0" value="save changes">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
