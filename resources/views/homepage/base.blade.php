<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-success">
        <div class="container mt-3">
            <a class="navbar-brand ms-3 me-2" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg>
                <span class="text-warning fw-bold me-4">MeeTdocs.com</span>
            </a>
            <form action="" method="GET" class="form-inline mx-auto">
                <div class="input-group">
                    <input type="search" name="search" size="64" class="form-control fw-light ms-auto"
                        placeholder="search doctors, clinic, hospital etc.">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-light py-2 me-2">
                            <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd"
                                    d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav ms-auto mr-5">
                @auth
                <a href="{{route('myprofile')}}" class="btn btn-success my-3 ms-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-person-circle me-2 " viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>My Account</a>
                @endauth
                @auth
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" name="logout" value="Logout"
                        class="btn btn-danger  ms-3 mt-3 text-white">
                </form>
                @endauth


                @guest
                <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-success me-3 nav-link">Login</a>
                </li>
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link btn btn-success">Register</a>
                </li>

                @endguest
            </ul>
        </div>
    </nav>
    <div class="container-fluid bg-success">
        <div class="row">
        <ul class="navbar-nav">
            <div class=" d-flex mx-auto text-center">
                <a href="/" class="btn btn-success my-3 ms-4 text-white">Home</a>
                <a href="" class="btn btn-success my-3 ms-4 text-white">Doctor Appoitments</a>
                <a href="" class="btn btn-success my-3 ms-4 text-white">Lab Appoitments</a>
                <a href="" class="btn btn-success my-3 ms-4 text-white">My Appoitments</a>
                <div class=" dropdown mt-3">
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
                        <li><a class="dropdown-item" href="{{route('docreg')}}">As a Doctor</a></li>
                        <li><a class="dropdown-item" href="">As Pathology</a></li>
                        <li><a class="dropdown-item " href="">As Medical Store</a></li>
                        @endauth
                    </ul>
                </div>
            </div>
        </ul>
        
      
        </div>
    </div>

    @section('content')

    @show

    <footer>
        <div class="container-fluid p-4 bg-success">
            <div class="row p-4 mt-5">
                <div class="col-lg-4">
                    <p class=" text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-bookmark-heart-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M2 15.5a.5.5 0 0 0 .74.439L8 13.069l5.26 2.87A.5.5 0 0 0 14 15.5V2a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v13.5zM8 4.41c1.387-1.425 4.854 1.07 0 4.277C3.146 5.48 6.613 2.986 8 4.412z" />
                        </svg>Your Safty is Our Priority</p>
                </div>
                <div class="col-lg-4">
                    <p class=" text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-heart-fill me-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                        </svg>Health Is Wealth</p>
                </div>
                <div class="col-lg-4">
                    <p class=" text-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                            class="bi bi-emoji-smile-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zM4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
                        </svg>Our final goal is Patients satisfaction</p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-4 bg-light ">
            <div class="row p-4">
                <div class="col-lg-3">
                    <h6 class=" fw-bold mb-3 ms-5">ABOUT US</h6>
                    <small class="ms-5">Company Information</small><br>
                    <small class="ms-5">Patients Support</small><br>
                    <small class="ms-5">Privacy Policy</small>
                    <p class="ms-5">Terms and conditions</p>
                </div>
                <div class="col-lg-3">
                    <h6 class=" fw-bold mb-3 ms-5">CATAGORIES</h6>
                    <small class="ms-5">Dr Appoitments</small><br>
                    <small class="ms-5">Lab Appoitments</small><br>
                    <small class="ms-5">My Appoitments</small>
                </div>
                <div class="col-lg-3">
                    <h6 class=" fw-bold mb-3 ms-5">BE A PARTNER</h6>
                    <small class="ms-5">As a Doctor</small><br>
                    <small class="ms-5">As a Medical Store</small><br>
                    <small class="ms-5">As a Pathology</small>
                </div>
                <div class="col-lg-3">
                    <h6 class=" fw-bold mb-3 ms-5">CONTACTS US</h6>
                    <small class="ms-5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor"
                            class="bi bi-person-lines-fill me-2" viewBox="0 0 16 16">
                            <path
                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                        </svg>+91 7808574836</small><br>
                    <small class="ms-5"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                            fill="currentColor" class="bi bi-envelope me-2" viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z" />
                          </svg>akhilesharyanindia@gmail.com</small><br>
                          <small class="ms-5"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                            fill="currentColor" class="bi bi-telephone me-2" viewBox="0 0 16 16">
                            <path
                                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>+91 743-82934</small>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <p class="small mt-2">&copy; Copyright <br>All Rights Reserved 2021 
                        <span class="float-end"><a href="" class="text-dark">Terms of uses</a></span>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

</body>

</html>
