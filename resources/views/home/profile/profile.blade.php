@extends('welcome')
@section('content')
    <div class="container" style="height:100vh"> 
        <div class="card text-end" style="height:100%">
            <div class="d-flex justify-content-between align-items-center">
                <div class="ps-4">
                    <a class="nav-link btn btn-primary px-4 text-light py-1" href={{ route('editprofile',$name) }}>
                        <h5 class="d-flex"> <span class="me-1">تعديل</span> <span class="material-icons-outlined">
                            tune
                        </span>   </h5>
                    </a>
                    
                </div>
                <div class="d-flex justify-content-end  p-3">
                    <div class="p-4">
                        <h5>{{ $name }}</h5>
                        <div class="d-flex">
                            <span class="me-1">المغرب</span><span class="material-icons-outlined">
                                outlined_flag
                            </span>
                        </div>
                    </div>
                    <img width="130px" height="130px" style="border-radius: 50%" src={{ url('imgs', $user->details[0]->pathprofile ) }} >
                </div>
                
            </div>
            
            <div class="row d-flex justify-content-end">
                <div class="col-12 col-md-6">
                    <div class="card mx-2">
                        <div class="card-header">
                            <h3>  حول المستقل </h3>
                        </div>
                        <div class="card-body">
                                <ul>
                                    <li><span><div class="container">
                                        <span id="rateMe1"></span>
                                      </div></span><span> التقييمات </span></li>
                                    <li><span>{{ $user->created_at }}</span><span> تاريخ الانضمام </span></li>
                                </ul>   
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div >
                        <div class="card mx-2  mt-2 mt-md-0">
                            <div class="card-header">
                                <h3>من انا</h3>
                            </div>
                            <div class="card-body">
                                 {{ $user->details[0]->about }} 
                            </div>
                        </div>
                    </div>
                    <div >
                        <div class="card mx-2 mt-2">
                            <div class="card-header">
                                <h3> مهاراتي </h3>
                            </div>
                            <div class="card-body">
                                @foreach ($array as $s)
                                    <span class="skills-profile p-2">{{ $s }}</span>   
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="card mx-2 mt-2">
                            <div class="card-header">
                                <h3> اعمالي </h3>
                            </div>
                            <div class="card-body">
                                @foreach ($arr as $a)
                                <img data-toggle="modal" data-target="#myModal" class="m-2 work-imgs" src={{ url('imgs', str_replace('\\', '', $a) ) }} width="100px" height="90px" alt="" srcset="">
                                
                                <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content bg-dark w-100" style="max-width: 80%">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                              </div>
                                            <div class="modal-body d-flex justify-content-center">
                                                <img class="m-2 img-fluid" id="main-image" src={{ url('imgs', str_replace('\\', '', $a) ) }} alt="" srcset="">
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
  $('#rateMe1').mdbRate();
});
    </script>
    <script>
        const t = document.getElementsByClassName('work-imgs')
        const t1 = document.getElementById('main-image')
        for(i= 0;i<t.length;i++){
            const t2 = document.getElementsByClassName('work-imgs')[i]
            t2.addEventListener('click',()=>{
                t1.src = t2.src
            }) 

        }
    </script>
@endsection