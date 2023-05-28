@extends('layouts.app')

@section('content')
           <div class="container" style="height:100vh"> 
            <div class="card text-end p-2" style="height:100%">
                <form class="p-3" action={{ route('saveskills') }} method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="" class="me-2 mb-2 h6"> صورة شخصية </label>
                    <input class="form-control my-2" name="img_profile" type="file">
                    <label for="" class="me-2 mb-2 h6">نبدة عنك</label>
                    <textarea class="form-control text-end" name="about" id="" cols="30" rows="10"></textarea>
                    <label for="" class="me-2 mt-2 h6"> المهارات </label><br>
                    <input type="text" class="ts-input form-control mt-1" id="skills">
                    <label for="" class="me-2 mt-2 h6"> الاعمال </label>
                    <input class="form-control my-2" name="works[]" type="file" multiple>
    
                    <button class="btn btn-primary" type="submit">حفظ</button>
                </form>
            </div>
        </div>
        <script type="text/javascript">
            $(".ts-input").tagsManager();
        </script>
    <script>
        const t = document.getElementById('skills').nextElementSibling
        t.setAttribute('name','skills')
    </script>
                               
@endsection
