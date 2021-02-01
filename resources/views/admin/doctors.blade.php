@extends('admin.adminbase')
@section('title')

This is Registered | doctors
@endsection
@section('content')
<div class="container-fluid">
    <div class="row bg-light p-3">
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
                <th>Fees</th>
                <th>Status</th>
                <th>Patients</th>
            </tr>
            @foreach($doctors as $d)
            <tr>
                <td>{{$d->id}}</td>
                    <td>{{$d->users->name}}</td>
                     <td>{{$d->users->email}}</td>
                    <td>{{$d->contact}}</td>
                    <td>{{$d->gender}}</td>
                    <td>{{$d->hname}}</td>
                    <td>{{$d->speciality}}</td>
                    <td>{{$d->designation}}</td>
                    <td>{{$d->city}}</td>
                    <td>{{$d->state}}</td>
                    <td>{{$d->district}}</td>
                    <td>{{$d->fees}}</td>
                    <td>
                    <form action="{{route('editStatus',['user'=>$d->users->id])}}" method ="POST">
                        @csrf
                        @method('put')
                        @if($d->users->isDoctor == false)
                        <input type="submit" class="btn btn-danger" name="send" value="Pending">
                        @else
                        <a href="" class="btn btn-dark">Approved</a>
                        @endif
                    </form>
                    <td>
                        <a href="{{route('patients')}}" class="btn btn-primary btn-sm">show me</a>
                    </td>
                </tr>
            @endforeach
            </table>
    </div>
</div>
@endsection
