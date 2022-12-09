<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
{{--    for vertical theme--}}
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}vertical-assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}vertical-assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}vertical-assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}vertical-assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />


</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-info">
    <div class="container">
        <a href="" class="navbar-brand text-white">My Project</a>
        <ul class="navbar-nav">
            @if(auth()->check())
                <li><a href="{{route('home')}}" class="nav-link text-white">Home</a></li>

{{--                <li><a href="{{route('product')}}" class="nav-link text-white">All Products</a></li>--}}

                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Content</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('content.add')}}" class="dropdown-item">Add Content</a></li>
                        <li><a href="{{route('content.manage')}}" class="dropdown-item">Manage Content</a></li>
                    </ul>
                </li>

{{--                <li class="nav-item dropdown">--}}
{{--                    <a href="" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Brand</a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="{{route('brand.add')}}" class="dropdown-item">Add Brand</a></li>--}}
{{--                        <li><a href="{{route('brand.manage')}}" class="dropdown-item">Manage Brand</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="nav-item dropdown">--}}
{{--                    <a href="" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Product</a>--}}
{{--                    <ul class="dropdown-menu">--}}
{{--                        <li><a href="{{route('product.add')}}" class="dropdown-item">Add Product</a></li>--}}
{{--                        <li><a href="{{route('product.manage')}}" class="dropdown-item">Manage Product</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

                <li><a href="" class="nav-link text-white" onclick="event.preventDefault();document.getElementById('logoutForm').submit();confirm('Are You Sure You want to Log Out');">Logout</a></li>
                <form action="{{route('logout')}}" method="POST" id="logoutForm">
                    @csrf
                </form>

{{--                <li><a href="{{route('logout')}}" class="nav-link text-white">Logout</a></li>--}}

{{--                <form action="{{route('logout')}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <button type="submit" class="nav-link bg-transparent">Logout</button>--}}
{{--                </form>--}}
            @else
                <li><a href="{{route('login')}}" class="nav-link text-white">Login</a></li>
                <li><a href="{{route('register')}}" class="nav-link text-white">Registration</a></li>
            @endif
        </ul>
    </div>
</nav>

@yield('body')

<script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
<script src="{{asset('/')}}assets/js/jquery-3.6.1.min.js"></script>

<!-- JAVASCRIPT -->
<script src="{{asset('/')}}vertical-assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}vertical-assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}vertical-assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}vertical-assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}vertical-assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="{{asset('/')}}vertical-assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('/')}}vertical-assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="{{asset('/')}}vertical-assets/js/app.js"></script>
</body>
</html>

