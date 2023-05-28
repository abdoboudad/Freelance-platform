@extends('layouts.app')
<link rel="stylesheet" href={{ url('css/home/register.css') }}>

@section('content')

<div id="login-box">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="left">
            <h1>Sign up</h1>
            
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <div class="d-flex align-items-center">
                <input type="submit" name="signup_submit" value="Sign me up" />

                @if (Route::has('password.request'))
                <a class="btn btn-link nav-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
          </div>
          <div class="right-img text-end">
            <img class="img-fluid" src="https://img.freepik.com/free-vector/lying-arrow-concept-illustration_114360-8531.jpg?w=740&t=st=1682714475~exp=1682715075~hmac=14d0688a3850171ce5646f712b20a901da09fe7f4b674a72df437ee9095fc2c0" alt="" srcset="">
          </div>
         
          
    </form>
  </div>
  @endsection




