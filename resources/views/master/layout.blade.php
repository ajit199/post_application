<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post App</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <style>
        .pb-cmnt-container {
            font-family: Lato;
            margin-top: 20px;
            float: left;
        }

        .pb-cmnt-textarea {
            resize: none;
            height: 40px;
            width: 100%;
            border-radius: 50px;
        }

        .pb-cmnt-textarea:focus {
            border: none;

        }

        #comment{
            border-bottom: 1px solid rgb(139, 135, 135);
            background:rgb(252, 249, 249);
        }

    </style>

</head>

<body>
    <div class="header">
        @section('header')
            <nav class="navbar navbar-expand-lg navbar-light bg-light color-white">

                    <a class="navbar-brand" href="/">Home</a>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        @if (!session()->has('loggedInUser'))
                            <li class="nav-item">
                                <a class="nav-link" href="/login" style="color: black;font-weight:500;">Login</a>
                            </li>
                        @endif
                        @if (!session()->has('loggedInUser'))
                            <li class="nav-item">
                                <a class="nav-link" href="/register" style="color: black;font-weight:500;">Register</a>
                            </li>
                        @endif

                     @if (session()->has('loggedInUser'))
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-top: 1rem;text-decoration:none;color:black;">
                                  {{ Session('loggedInUser')->name }}
                                   </a>
                                <ul class="dropdown-menu" style="border: none;margin-top: 15px;">
                                    <li><a href="/logout" style="text-decoration:none;color:black;" >logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>
        @show
    </div>

    <div class="body">
        @yield('content')
    </div>

</body>

</html>
