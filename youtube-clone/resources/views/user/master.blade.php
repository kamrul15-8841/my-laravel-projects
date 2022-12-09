<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--        for youtube--}}
    <link rel="stylesheet" href="{{asset('/')}}youtube/css/video.css">
    <link rel="stylesheet" href="{{asset('/')}}youtube/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}youtube/css/header.css">
    <link rel="stylesheet" href="{{asset('/')}}youtube/css/sidebar.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
    <title>Youtube</title>

</head>

<body>
<header class="header">
    <div class="left-section">
        <img class="hamburger-menu" src="{{asset('/')}}youtube/icons/hamburger-menu.svg" alt="hamburger-menu">
        <a href="{{route('home')}}">
            <img class="youtube-logo" src="{{asset('/')}}youtube/icons/youtube-logo.svg" alt="Youtube-logo">
        </a>
    </div>
    <div class="middle-section">
        <input class="search-bar" type="text" placeholder="Search">
        <button class="search-button">
            <img class="search-icon" src="{{asset('/')}}youtube/icons/search.svg" alt="Search">
            <div class="tooltip">Search</div>
        </button>
        <button class="voice-search-button">
            <img class="voice-search-icon" src="{{asset('/')}}youtube/icons/voice-search-icon.svg" alt="voice-search">
            <div class="tooltip">Search with your voice</div>
        </button>
    </div>
    <div class="right-section">
        <div class="upload-icon-container">
            <img class="upload-icon" src="{{asset('/')}}youtube/icons/upload.svg" alt="upload">
            <div class="tooltip">Create</div>
        </div>
        <img class="youtube-apps-icon" src="{{asset('/')}}youtube/icons/youtube-apps.svg" alt="youtube-apps">
        <div class="notification-icon-container">
            <img class="notifications-icon" src="{{asset('/')}}youtube/icons/notifications.svg" alt="notifications">
            <div class="notification-count">3</div>
        </div>
        <img class="current-user-picture" src="{{asset('/')}}youtube/channel-picture/my-channel.jpeg" alt="profile-picture">
{{--        <form action="{{route('logout')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <button type="submit" class="dropdown-item notify-item">--}}
{{--                <i class="mdi mdi-logout me-1"></i>--}}
{{--                <span>Logout</span>--}}
{{--            </button>--}}
{{--        </form>--}}
    </div>
</header>

<nav class="sidebar">
    <div class="sidebar-link">
        <img class="home-icon" src="{{asset('/')}}youtube/icons/home.svg" alt="home">
        <div>Home</div>
    </div>
    <div class="sidebar-link">
        <img class="explore-icon" src="{{asset('/')}}youtube/icons/explore.svg" alt="explore">
        <div>Exprore</div>
    </div>
    <div class="sidebar-link">
        <img class="subscription-icon" src="{{asset('/')}}youtube/icons/subscriptions.svg" alt="subscription">
        <div>Subscription</div>
    </div>
    <div class="sidebar-link">
        <img class="originals-icon" src="{{asset('/')}}youtube/icons/originals.svg" alt="originals">
        <div>Originals</div>
    </div>
    <div class="sidebar-link">
        <img class="youtube-music-icon" src="{{asset('/')}}youtube/icons/youtube-music.svg" alt="youtube-music">
        <div>Youtube Music</div>
    </div>
    <div class="sidebar-link">
        <img class="library-icon" src="{{asset('/')}}youtube/icons/library.svg" alt="library">
        <div>Library</div>
    </div>
</nav>
@yield('body')
</body>

</html>
