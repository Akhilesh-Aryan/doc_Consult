<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-success shadow p-2">
        <div class="container">
            <a class="navbar-brand ml-5" href="/">
                <h4 class="text-white">DocConsult</h4>
            </a>
            <ul class="navbar-nav">
                <div class="p-3 text-center">
                    <a href="/" class="btn btn-success my-3 ms-4 text-white">Home</a>
                    <a href="" class="btn btn-success my-3 ms-4 text-white">Doctor Appoitment</a>
                    <a href="" class="btn btn-success my-3 ms-4 text-white">Your Appoitment</a>
                    @auth
                    <a href="{{route('myprofile')}}" class="btn btn-success my-3 ms-4 text-white">My Profile</a>
                    <a href="{{route('docProfile')}}" class="btn btn-success my-3 ms-4 text-white">Doc_Profile</a>
                    @endauth
                    <div class=" float-end dropdown me-5 mt-3">
                        <button class="btn btn-success dropdown-toggle ms-4" type="button" id="dropdownMenuButton"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item disabled" href="">BE A PARTNER</a></li>
                            <hr>
                            @guest
                               <li><a class="dropdown-item" href="{{ route('login') }}">As a Doctor</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">As Pathology</a></li>
                                <li><a class="dropdown-item" href="{{ route('login') }}">As Medical Store</a>
                                </li>
                            @endguest
                            @auth
                                <li><a class="dropdown-item" href="{{route('docreg')}}">As a
                                        Doctor</a></li>
                                <li><a class="dropdown-item"  href="">As
                                        Pathology</a></li>
                                <li><a class="dropdown-item "  href="">As
                                        Medical Store</a></li>
                            @endauth
                        </ul>
                    </div>
                </div>
            </ul>
            <ul class="navbar-nav ms-auto mr-5">

                @auth
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="submit" name="logout" value="Logout" class="btn btn btn-sm text-white btn-outline-dark">
                    </form>
                @endauth


                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-success me-3 nav-link">Login</a>
                    </li>
                    <li class="nav-item"><a href="{{ route('register') }}"
                            class="nav-link btn btn-success">Register</a></li>

                @endguest
            </ul>
        </div>
    </nav>

    @section('content')

    @show
     <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
