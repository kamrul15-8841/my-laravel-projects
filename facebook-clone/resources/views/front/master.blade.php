<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook Clone</title>
    <link rel="stylesheet" href="{{asset('/')}}style.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>
<!-- header starts -->
@include('front.includes.header')
<!-- header ends -->

<!-- main body starts -->
<div class="main__body">
    <!-- sidebar starts -->
  @include('front.includes.sidebar')
    <!-- sidebar ends -->

    <!-- feed starts -->
    <div class="feed">
        @yield('content')
    </div>
    <!-- feed ends -->

    @include('front.includes.right-side')
</div>
<!-- main body ends -->

<div id="fb-root"></div>
<script
    async
    defer
    crossorigin="anonymous"
    src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v10.0"
    nonce="zUxEq08J"
></script>
</body>
</html>

