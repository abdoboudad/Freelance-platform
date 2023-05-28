@extends('welcome')
@section('content')
<div class="container-fluid">
    <div class="d-flex p-3 main-service-card">
        <div class="w-100">
            @forelse ($posts as $post)
            @if ($post->status === 'accepte')

            <div class="row">
                <div class="col-6">
                    @if ($post->comments->last())
                        <div class="row">
                            <div class="col-7 text-end">
                                <span class="d-block">{{ $post->comments->last()->users->name }}</span>
                                <span>{{ $post->comments->last()->users->created_at }} اخر تفاعل قبل </span>
                            </div>
                            <div class="col-4">
                                <img width="100px" height="100px" style="border-radius: 50%;max-width:80%" src={{ url('imgs',$post->comments->last()->users->details[0]->pathprofile) }} alt="">
                            </div>
                        </div>
                    @else
                        
                    @endif
                </div>
                <div class="col-6"> 
                    <div class="row">
                        <div class="col-9 text-end ">
                            <a class="nav-link" href="{{ route('request.show',$post->work_name) }}"><h5>{{ $post->work_name}}</h5></a> 
                            <div class="d-flex text-end justify-content-end py-2">
                                <div class="d-flex align-items-center me-2">
                                    <span class="material-icons-outlined">
                                        perm_identity
                                        </span>
                                        <span class="ms-1">{{ $post->users->name }}</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="material-icons-outlined">
                                        schedule
                                        </span>
                                        <span class="ms-1">{{ $post->created_at }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 " >
                            <img width="100px" height="100px" style="border-radius: 50%;max-width:80%" src={{ url('imgs',$post->users->details[0]->pathprofile) }} alt="">
                        </div>
                    </div>
                    
                </div>
              
            </div>
            <br class="text-secondary"> 

            @endif
            @empty
                
            @endforelse
        </div>
        
        
    </div>
    
</div>
@endsection