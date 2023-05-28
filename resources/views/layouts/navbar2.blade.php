
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mb-2 mb-lg-0">
            @if (Auth::check())
                <li class="px-3 py-2 nav-item">
                    <div class="dropdown">
                        <span type='button' class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="40px" height="40px"  src={{ url('imgs', auth()->user()->details[0]->pathprofile ) }} style="border-radius: 50%;" alt="">
                        </span>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <li><a class="dropdown-item d-flex" href={{ route('profile',auth()->user()->name) }}><span class="material-icons-outlined me-2">
                            person
                            </span>{{ Auth::user()->name }}</a></li>
                          <li><a class="dropdown-item d-flex" href="#"><span class="material-icons-outlined me-2">
                            account_balance_wallet
                            </span>  رصيدي  </a></li>
                            <hr>
                          <li>
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item d-flex"><span class="material-icons-outlined">
                                logout
                                </span> تسجيل الخروج     </button>
                          </form>
                         </li>
                        </ul>
                      </div>
                     
                </li>
                

                <a href="{{ route('chatrom') }}"><li class="material-icons-outlined text-dark nav-item px-4 py-3">
                    inbox
                </li></a>
               
                @include('layouts.notification')
           @else
            <a class="nav-link" href={{ route('register') }}>
                <li class="py-3 d-flex align-items-center px-3">
                    <span class="me-1">انشاء حساب</span>
                    <span class="material-icons-outlined">
                        person_add
                    </span>
                </li>
            </a>
            <a class="nav-link" href={{ route('login') }}>
                <li class="py-3 d-flex align-items-center px-3">
                    <span class="me-1">تسجيل الدخول</span>
                    <span class="material-icons-outlined">
                        logout
                    </span>
                </li>
            </a>
        @endif 
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @if (Auth::check())
            <a class="nav-link" href={{ route('myrequests') }}>
                <li class="py-3 d-flex align-items-center px-3">
                    <span class="me-1">طلباتي</span>
                    <span class="material-icons-outlined">
                    post_add
                </span>
            </li>
            </a>
            
            <a class="nav-link" href={{ route('request.create') }}>
                <li class="py-3 d-flex align-items-center px-3">
                    <span class="me-1">اضافة عرض</span>
                    <span class="material-icons-outlined">
                    post_add
                </span>
                </li>
            </a>
            @endif
            <a class="nav-link" href="{{ route('service') }}">
                <li class="py-3 d-flex align-items-center px-3">
                    <span class="me-1">الخدمات</span>
                    <span class="material-icons-outlined">
                        apartment
                    </span>
                </li>
            </a>
            <a class="nav-link d-flex align-items-center" href="/">
                <li class="nav-item"><h2> صغير </h2></li>
            </a>
        </ul>
        
      </div>
    </div>
  </nav>









