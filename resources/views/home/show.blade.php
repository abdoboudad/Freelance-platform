@extends('welcome')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-5">
            </div>
            <div class="col-12 col-md-7 text-end">
                <div class="py-4">
                    <h2>{{ $post->work_name }}</h2>
                </div>
                <div class="card text-end p-2" style="box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;">
                    {{ $post->description }}
                </div> 
                    <livewire:comment :post='$post' :postid='$post->id'/>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(()=>{
            $('textarea').change(()=>{
                console.log($('textarea').val());
            })
        })
    </script>
@endsection