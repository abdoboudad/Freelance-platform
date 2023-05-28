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
        @forelse ($posts as $post)
            <div class="card my-1 p-2">
                <div class="all d-flex p-2 justify-content-between">
                    <div> 
                        <form action={{ route('accepte',$post->id) }} method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Accepte</button>
                        </form>
                        <form action={{ route('refuse',$post->id) }} method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Refuse</button>
                        </form>
                    </div>
                    <div class="d-flex">
                        <div class="dash-post-img text-end">
                            <img width="100px" height="100px" style="border-radius: 50%;max-width:80%" src={{ url('imgs',$post->users->details[0]->pathprofile) }} alt="">
                        </div>
                        <div class="text-end">
                            <p>{{ $post->work_name }}</p>
                            <p>{{ $post->created_at }}</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        @empty
            
        @endforelse
    </div>
    

@endsection