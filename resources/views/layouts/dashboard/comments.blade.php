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
        @forelse ($comments as $comment)
            <div class="card my-1 p-2">
                <div class="all d-flex p-2 justify-content-between">
                    <div class="w-75"> 
                        <form action={{ route('deleteposts',$comment->id) }} method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        <button class="btn btn-primary read-comment">Read post comment</button>
                        <div class="card comment-show w-100 mt-2" style="display: none">
                            <p class="p-2">{{ $comment->comment }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="dash-post-img text-end" style="width: 60px">
                            <img width="50px" height="50px" style="border-radius: 50%;max-width:80%" src={{ url('imgs',$comment->users->details[0]->pathprofile) }} alt="">
                        </div>
                        <div class="text-end">
                            <p>{{ $comment->getpost->work_name }}</p>
                            <p>{{ $comment->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
        @empty
            
        @endforelse
    </div>
    
    <script>
        $(document).ready(()=>{
            // $('.read-comment').each((i,obj)=>{
            //     $('.read-comment').click(()=>{
            //         console.log('ok');
            //     })
            // })
            for(let i=0;i<$('.read-comment').length;i++){
                   const btn = document.getElementsByClassName('read-comment')[i]
                   const show = document.getElementsByClassName('comment-show')[i]
                   btn.onclick = ()=>{
                        if(show.style.display != 'none'){
                            show.style.display = 'none'
                            return
                        }
                        show.style.display = 'block'

                   }

                }
            }
            
        )
    </script>
@endsection
