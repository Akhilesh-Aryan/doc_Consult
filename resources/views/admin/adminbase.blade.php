<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="{{route('admin.dashboard') }}"><h5 class="text-white">Admin Panel</h5></a>
        <ul class="navbar-nav ml-auto mr-5">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <input type="submit" name="logout" value="Logout" class="btn btn-outline-danger text-white">
            </form>
            @endauth

            @guest
            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @endguest
        </ul>
        </div>
    </nav>
    @section('content')

    @show
</body>
</html>
