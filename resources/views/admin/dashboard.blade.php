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
                <a href="{{route('admin.dashboard')}}" class="list-group-item list-group-item-action">Doctors</a>
                <a href="" class="list-group-item list-group-item-action list-group-item-danger text-whute">Logout</a>
            </div>
        </div>
        <div class="col-lg-6 mx-auto rounded bg-success py-3 ">
            <h3 class="text-white text-center">Total Registered Doctors</h3>
            <h3 class="lead"></h3>
        </div>
    </div>

    <div class="row bg-light mt-4">
        <h3 class="text-center text-danger fw-light">Doctors List</h3>
        <hr>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Gender</th>
                <th>Hospital Name</th>
                <th>Speciality</th>
                <th>Designation</th>
                <th>City</th>
                <th>State</th>
                <th>District</th>
                <th>Pin Code</th>
                <th>Fees</th>
                <th>Patients</th>
            </tr>
            @foreach($doctors as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td></td>
                     <td></td>
                    <td>{{$d->contact}}</td>
                    <td>{{$d->gender}}</td>
                    <td>{{$d->hname}}</td>
                    <td>{{$d->speciality}}</td>
                    <td>{{$d->designation}}</td>
                    <td>{{$d->city}}</td>
                    <td>{{$d->state}}</td>
                    <td>{{$d->district}}</td>
                    <td>{{$d->pin}}</td>
                    <td>{{$d->fees}}</td>
                    <td>
                        <a href="{{route('patients')}}" class="btn btn-primary btn-sm ">show me</a>
                    </td>
                </tr>
            @endforeach
            </table>
    </div>
</div>
@endsection
