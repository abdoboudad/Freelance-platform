@extends('welcome')
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <div class="container" style="height:100vh"> 
        <div class="card text-end" style="height:100%">
            <form class="p-3" action={{ route('saveprofile',$name) }} method="post">
                @csrf
                <label for="" class="me-2 mb-2 h6">نبدة عنك</label>
                <textarea class="form-control" name="who" id="" cols="30" rows="10"></textarea>
                <label for="" class="me-2 mt-2 h6"> المهارات </label><br>
                <input type="text" class="tm-input form-control mt-1">
                <label for="" class="me-2 mt-2 h6"> الاعمال </label>
                <input class="form-control my-2" type="file">
                <button class="btn btn-primary" type="submit">حفظ</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(".tm-input").tagsManager();
    </script>

@endsection