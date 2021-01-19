@extends('homepage.base')
@section('title')
This is | Registration Page
@endsection
@section('content')
<div class="container-fluid p-4 bg-light">
    <div class="row">
        <div class="col-lg-9 mx-auto">
            <div class="card shadow-lg">
                <div class="row">
                    <div class="col-lg-4">
                        {{-- <a href=""><img src="{{asset('images/' .$d->image)}}" alt="profile picture" height="130px" class=" w-50 card-img-top"></a> --}}
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-success  text-center lead">Apply For Appoitments now-</h3><hr>
                                <form action="{{route('applyStore',['id'=>request()->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="text-danger">Contact no *</label>
                                            <input type="text" class="form-control" name="contact"
                                            value="{{old('contact')}}">
                                            @error('contact')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="text-danger">Age *</label>
                                            <input type="text" class="form-control" name="age" value="{{old('age')}}">
                                            @error('age')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-3">
                                            <label for="gender" class="text-danger">Gender *</label>
                                            <select class="form-control" name="gender">
                                                <option disabled selected>---Select---</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="others">Others</option>
                                            </select>
                                            @error('gender')
                                            <span class="text-danger small">{{$message}}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="" class="text-danger">Image  *</label>
                                            <input type="file" class="form-control" name="image">
                                            @error('image')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="text-danger"> Full Address *</label>
                                        <input type="text" class="form-control py-2" name="address"
                                        value="{{old('address')}}">
                                        @error('address')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="text-danger">Problem Description *</label>
                                        <textarea rows="5" class="form-control" name="desc">{{old('desc')}}</textarea>
                                        @error('desc')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <input type="submit" class="btn btn-success" value="Apply Now" name="post">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
