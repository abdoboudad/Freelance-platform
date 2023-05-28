@extends('welcome')
@section('content')
<div class="container-fluid">
    <div class="d-flex p-3 main-service-card">
        <div class="w-100">
            @forelse (Auth::user()->comments as $t)
                <div class="text-end"> 
                <div class="d-flex justify-content-end align-items-center">
                    <div >
                        <a class="nav-link" href="{{ route('request.show',$t->getpost->work_name) }}"><h4>{{ $t->getpost->work_name}}</h4></a> 
                        <div class="d-flex text-end justify-content-end py-2">
                            <div class="d-flex align-items-center me-2">
                                <span class="material-icons-outlined">
                                    perm_identity
                                    </span>
                                    <span class="ms-1">{{ $t->getpost->users->name }}</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="material-icons-outlined">
                                    schedule
                                    </span>
                                    <span class="ms-1">{{ $t->getpost->created_at }}</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
              </div>
            <hr>
            @empty
                
            @endforelse
            
        </div>
        
        
    </div>
    
</div>
@endsection