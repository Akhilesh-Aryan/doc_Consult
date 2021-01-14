@extends('admin.adminbase')
@section('title')
This is dashboard | Admin panel
@endsection
@section('content')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-3 rounded">
            <div class="list-group">
                <a href="/" class="list-group-item list-group-item-action">Go To Home</a>
                <a href="{{route('doctors')}}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-danger text-whute">Logout</a>
            </div>
        </div>
        <div class="col-lg-6 mx-auto rounded bg-success py-3 ">
            <h3 class="text-white text-center">Total Registered Doctors</h3>
            <h3 class="text-center text-white">{{$doctors}}</h3>
        </div>
    </div>
</div>
@endsection
