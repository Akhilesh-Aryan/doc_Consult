@extends('homepage.base')
@section('title')
This is | Registration Page
@endsection
@section('content')
<div class="container-fluid p-4 bg-light">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="{{route('applyStore')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Contact no.</label>
                            <input type="text" class="form-control" name="contact"value="{{old('contact')}}">
                            @error('contact')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Age</label>
                            <input type="text" class="form-control" name="age"value="{{old('age')}}">
                            @error('age')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="gender">Gender</label>
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
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" class="form-control" name="address"value="{{old('address')}}">
                            @error('address')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image">
                            @error('image')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Problem Description</label>
                           <textarea rows="5" class="form-control" name="desc">{{old('desc')}}</textarea>
                            @error('desc')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <input type="submit" class="btn btn-outline-info w-100" name="post" value="Book appoitment now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
