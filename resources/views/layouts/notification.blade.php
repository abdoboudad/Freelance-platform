<link rel="stylesheet" href={{ url('css/home/notification.css') }}>
{{-- <div class="not-card">
    <div class="d-flex p-2">
        <img width="50px" height="50px" style="border-radius: 50%" src='dsfasdf' >
        <div class="px-2"> 
            <p>dsfasdfadsfsdf</p>
        </div>
    </div>
</div>
<script>
    $('.notification').click(()=>{
        $('.not-card').toggle();
    })
</script> --}}
<li class="nav-item px-2 py-3">
    <div class="dropdown">
        <span type='button' class="dropdown" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img  style="width:24px" src="https://pixlok.com/wp-content/uploads/2021/12/Notification-Icon-SVG-03cde-300x300.png" alt="" srcset="">
        </span>
        <ul id="tested" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li class="m-0 p-2" style="border-bottom: 1px solid rgb(160, 160, 160);">
                <span class="p-2">Notifications ({{ Auth::user()->unreadNotifications->count() }})</span>
            </li>
            @forelse (Auth::user()->unreadNotifications as $notification)
            @if ($notification->type === 'App\Notifications\CreatePost')
                <a class="nav-link my-1 p-0" href={{ route('request.show',$notification->data['title']) }}>
                    <li class="d-flex p-2 align-items-center w-100 notifica">
                        <div class="w-100 px-2 text-end">
                            <span class="d-block">{{ $notification->data['title'] }}</span>
                            <span class="d-block">{{ $notification->created_at }}</span>
                        </div>
                        <div>
                            <img width="50px" height="50px"  src={{ $notification->data['image'] }} style="border-radius: 50%;" alt="">
                        </div>
                    </li>
                </a>
            @else
                <a class="nav-link my-1 p-0" href={{ route('request.show',$notification->data['title']) }}>
                    <li class="d-flex p-2 align-items-center w-100 notifica">
                        <div class="w-100 px-2 text-end">
                            <span class="d-block">{{ $notification->data['title'] }}</span>
                            <span class="d-block">{{ $notification->created_at }}</span>
                        </div>
                        <div>
                            <img width="50px" height="50px"  src={{ url('imgs', str_replace('\\', '', $notification->data['img'] ) ) }} style="border-radius: 50%;" alt="">
                        </div>
                    </li>
                </a>
            @endif
            
            @empty
                
            @endforelse

        </ul>
      </div>
     
</li>