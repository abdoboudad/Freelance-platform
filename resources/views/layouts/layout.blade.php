<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <link rel="stylesheet" href={{  url("css/dashboard/index.css")}}>
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
    <div class="content d-flex">
        <div class="sidbare"> 
            <h1 class="ps-5 pt-2 pb-5 text-light">SARIR</h1>
            <ul class="m-0 p-0">
                <a href={{ route('dashboard') }} class="nav-link"><li class="nav-items dash py-3 ps-3 d-flex align-items-center "><span class="material-icons-outlined">
                    speed
                </span><span class="ms-2">Dashboard</span></li></a>
                <a href={{ route('reviews') }} class="nav-link my-1"><li class="nav-items py-3 ps-3 d-flex align-items-center "><span class="material-icons-outlined">
                    preview
                    </span><span class="ms-2">Reviews</span></li></a>
                <a href={{ route('posts') }} class="nav-link my-1"><li class="nav-items py-3 ps-3 d-flex align-items-center "><span class="material-icons-outlined">
                    post_add
                    </span><span class="ms-2">Posts</span></li></a>
                <a href={{ route('users') }} class="nav-link my-1"><li class="nav-items py-3 ps-3 d-flex align-items-center "><span class="material-icons-outlined">
                    people
                    </span><span class="ms-2">Users</span></li></a>
                <a href={{ route('comments') }} class="nav-link"><li class="nav-items py-3 ps-3 d-flex align-items-center "><span class="material-icons-outlined">
                    chat_bubble_outline
                </span><span class="ms-2">Comments</span></li></a>
            </ul>
        </div>
        <div class="w-100">
            <div class="navbar-dash w-100 px-4">
                @include('layouts.navbar')
            </div>
            <div class="m-3">
                @yield('dashcontent')
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script></body>
</html>