@extends('homepage.base')
@section('title')
This is my | Docprofile
@endsection

@section('content')
<div class="container mb-3 mt-5">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card shadow-sm p-3">
                <div class="row d-flex">
                <div class="col-lg-4">
                    {{-- <a href="" class="ms-5"><img src="{{asset('images/' .$patient->image)}}" alt="profile picture" height="130px" class=" w-50 card-img-top rounded-circle"></a> --}}
                    <p class="text-dark text-center mt-2 lead">Hello!</p>
                    <p class="text-dark ms-3 lead"></p>
                    <div class="list-group">
                        <span class="list-group-item list-group-item-action bg-success text-white lead">My Profile</span>
                        <a href="" class="list-group-item list-group-item-action">My Appoitments</a>
                        <a href="" class="list-group-item list-group-item-action">Lab Appoitments</a>
                        <a href="" class="list-group-item list-group-item-action">Change Password</a>
                        <a href="" class="list-group-item list-group-item-action">Logout</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <h4 class="text-success ms-2">As A Doctor!</h4>
                    <form method="POST" action="{{route('docStore')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3 d-flex">
                            <div class="col-sm-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" disabled value="" placeholder="your name is registered already">
                            </div>
                            <div class="col-sm-6">
                                <label for="contact" class="text-danger mt-2">Mobile no *</label>
                                <input type="text" class="form-control" name="contact" value="">
                                @error('contact')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="Email" class="">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email is Registered" disabled value="">
                            </div>
                            <div class="col-sm-6">
                                <label for="gender" class="text-danger">Gender *</label>
                                <select class="form-control" name="gender">
                                    <option disabled selected >---Select---</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="others">Others</option>
                                </select>
                                 @error('gender')
                                 <span class="text-danger small">{{$message}}</span>
                             @enderror
                            </div>
                        </div>
                            <div class="row">
                            <div class="col-sm-12">
                                <label for="hname" class="text-danger">Clinic/Hospital Name*</label>
                                <input type="text" class="form-control" name="hname"value="">
                                @error('hname')
                                <span class="text-danger small">{{$message}}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="speciality" class="text-danger">Speciality *</label>
                                    <input type="text" class="form-control" name="speciality" value="">
                                    @error('speciality')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="designation" class="text-danger">Designation *</label>
                                    <input type="text" class="form-control" name="designation"value="">
                                    @error('designation')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <h5 class="text-danger mt-3 mb-3 bg-white">Clinic/Hospital Address</h5>
                                <div class="col-sm-6">
                                    <label for="city" class="text-danger">City/Village *</label>
                                    <input type="text" class="form-control" name="city" value="">
                                    @error('city')
                                    <span class="text-danger small">{{$message}}</span>
                                   @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="state" class="text-danger">State *</label>
                                    <input type="text" class="form-control" name="state"value="">
                                    @error('state')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="district" class="text-danger">District *</label>
                                    <input type="text" class="form-control" name="district" value="">
                                    @error('district')
                                    <span class="text-danger small">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="pin" class="text-danger">Zip/Pin *</label>
                                    <input type="text" class="form-control" name="pin"value="">
                                    @error('pin')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="image" class="text-danger">upload Your Profile picture *</label>
                                    <input type="file" class="form-control" name="image"value="">
                                    @error('image')
                                    <span class="text-danger small">{{$message}}</span>
                                @enderror
                                </div>
                                <div class="col-lg-6">
                                    <label for="fees" class="text-danger">Consultant Fees *</label>
                                    <input type="text" class="form-control" name="fees" value="">
                                    @error('fees')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                </div>
                        <div class="btn-group float-end mt-3">
                            <a href=""class="me-3 btn btn-danger rounded-0">Cancel</a>
                            <input type="submit" class="btn btn-success rounded-0">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
