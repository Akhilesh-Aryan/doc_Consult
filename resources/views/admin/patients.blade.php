@extends('admin.adminbase')
@section('title')
patients | Admin Panel
@endsection

@section('content')
<div class="container mt-2">
    <div class="row bg-light">
        <h2 class="text-danger text-center fw-light">Patients List</h2><hr> 
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Problems</th>
                <th>Image</th>
            </tr>
            @foreach($patients as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->users->name}}</td>
                    <td>{{$p->users->email}}</td>
                    <td>{{$p->contact}}</td>
                    <td>{{$p->age}}</td>
                    <td>{{$p->gender}}</td>
                    <td>{{$p->address}}</td>
                    <td>{{$p->desc}}</td>
                    <td>{{$p->image}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
