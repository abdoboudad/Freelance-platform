@extends('layouts.app')
<link rel="stylesheet" href={{ url('css/home/register.css') }}>

@section('content')

<div id="login-box">
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="left">
            <h1>Sign up</h1>
            
            <input type="text" name="name" placeholder="Username" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password_confirmation" placeholder="Retype password" />
            
            <input type="submit" name="signup_submit" value="Sign me up" />
          </div>
    </form>
    <div class="right-img text-end">
      <img class="img-fluid" src="https://img.freepik.com/free-vector/lying-arrow-concept-illustration_114360-8531.jpg?w=740&t=st=1682714475~exp=1682715075~hmac=14d0688a3850171ce5646f712b20a901da09fe7f4b674a72df437ee9095fc2c0" alt="" srcset="">
    </div>
   
  </div>

@endsection
