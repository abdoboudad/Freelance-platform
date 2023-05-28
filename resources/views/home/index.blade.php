<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
    rel="stylesheet">
    <link rel="stylesheet" href={{ url('css/home/notification.css') }}>
    <link rel="stylesheet" href={{ url('css/home/index.css') }}>
    <title>Document</title>
</head>
<body>
    <video autoplay loop class="back-video" muted plays-inline> 
        <source src={{ url('video/index.mp4') }}>
    </video>
    <nav class="test-nav">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="navbar-nav m-0 p-0">
            @if (Auth::check())
            <ul class="d-flex my-4"> 
                <a class="nav-link in-b" href={{ route('service') }}><li class="text-light px-3"> خدمات </li></a>
                <a class="nav-link   mx-2" href={{ route('request.create') }}><li class="text-light px-3"> اضف خدمة </li></a> 
            </ul>
            @else
            <ul class="d-flex">
                <a class="nav-link " href={{ route('register') }}>
                    <li class="py-3 d-flex align-items-center px-3 register mt-1">
                        <span class="me-1">انشاء حساب</span>
                        <span class="material-icons-outlined">
                            person_add
                        </span>
                    </li>
                </a>
                <a class="nav-link text-light" href={{ route('login') }}>
                    <li class="py-3 d-flex align-items-center px-3">
                        <span class="me-1">تسجيل الدخول</span>
                        <span class="material-icons-outlined">
                            logout
                        </span>
                    </li> 
                </a>
            </ul>
                
            @endif 
            </ul>
            <h1><a class="nav-link text-light" href="/">ص<span class="in-title">غ</span>ير </a></h1>
        </div>
        
    </nav>
    <div class="home-content d-flex align-items-center justify-content-center">
        <div>
            <div class="text-center">
                <h1 class="mb-5 text-light title-index">تصفح المشاريع و ابحت عن الخدمة <br> التي تناسبك</h1>
                <form class="in-form " action="" method="post">
                    <div class="input-search-button d-flex align-items-center">
                        <button type="submit" class="btn-search ms-2"><span class="material-icons-outlined">
                            search
                        </span></button>
                        <input type="text" class="search-skill px-3" placeholder="✍️ ابحت عن خدمة ">
        
                    </div>
                </form>
            </div>
            <div class="conditions d-flex align-items-end">
                <ul class="d-flex bg-danger pe-4 py-2 w-100 justify-content-between">
                    <li><a class="nav-link text-light" href=""> شروط الاستخدام </a></li>
                    <li><a class="nav-link text-light"  href=""> سياسة الخصوصية  </a></li>
                    <li><a class="nav-link text-light"  href="">  من نحن </a></li>
                </ul>
            </div>
        </div>
       
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    
    
</body>
</html>




