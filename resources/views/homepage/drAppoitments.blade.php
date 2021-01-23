@extends('homepage.base')

@section('content')

<div class="container">
    <div class="row mt-3">
        <table class="table table-bordered">
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Problems</th>
                <th>Action</th>
            </tr>

            @foreach($doctors->getPatients as $pts)       
            <tr>
                <td>{{ $pts->id }}</td>
                <td>{{ $pts->users->name }}</td>
                <td>{{ $pts->users->email }}</td>
                <td>{{ $pts->contact }}</td>
                <td>{{ $pts->age }}</td>
                <td>{{ $pts->gender }}</td>
                <td>{{ $pts->address}}</td>
                <td>{{ $pts->desc}}</td>
                <td>
                    <a href="" class="btn btn-success btn-sm">Active</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection