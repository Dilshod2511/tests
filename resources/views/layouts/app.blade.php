<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body class="bg-light">
<h1 Hello my name is site></h1>
<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/dashboard">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="{{route('products.index')}}">Product</a>
            </li>


        </ul>
        <ul class="navbar-nav">
            @auth
                <li class="nav-item mr-3">
                    <a class="nav-link" href="#">{{auth()->user()['name']}}</a>
                </li>
                <li class="nav-item mr-3">
                    <form action="/logout" method="post" enctype="multipart/form-data" class="d-inline">
                        @csrf
                        <button class="p-0 m-0 d-inline bg-white border-0 m" type="submit">Logout</button>
                    </form>
                </li>
            @endauth
            @guest
                <li class="nav-item mr-3">
                    <a class="nav-link" href="/login">Login</a>

            @endguest
        </ul>

    </div>
</nav>


@yield('content')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
<style>
    .w{
        width: 400px;
        max-height: 1000px;
    }
    .wa{
        width: 700px;
        max-height: 1000px;
    }
    .m{
        padding: 8px!important;
        color: #00000080;
    }
    .m:hover{
        color: rgba(97, 97, 97, 0.89) !important;
    }
</style>
</html>
