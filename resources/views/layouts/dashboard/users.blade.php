@extends('layouts.layout')
<link rel="stylesheet" href={{url("css/dashboard/posts.css")}}>
@section('dashcontent')

    <div>
        <div class="text-end"> 
            <form class="search-content" action="">
                <input class="input-field " placeholder="search ..." type="text">
                <button class="btn btn-secondary" type="submit">search</button>

            </form>
        </div>
        @forelse ($users as $user)
            <div class="card my-1 p-2">
                <div class="all d-flex p-2 justify-content-between">
                    <div> 
                        @if ($user->details[0]->status === 'banned')
                            <form action={{ route('unbanned',$user->id) }} method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success">Unbanned</button>
                            </form>
                        @else
                            <form action={{ route('banned',$user->id) }} method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-warning">Banne</button>
                            </form>
                        @endif
                        
                        
                        <form action={{ route('deleteusers',$user->id) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <div class="d-flex">
                        <div class="dash-post-img text-end">
                            <img width="100px" height="100px" style="border-radius: 50%;max-width:80%" src={{ url('imgs',$user->details[0]->pathprofile) }} alt="">
                        </div>
                        <div class="text-end">
                            <p>{{ $user->name }}</p>
                            <p>{{ $user->created_at }}</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        @empty
            
        @endforelse
    </div>
    

@endsection