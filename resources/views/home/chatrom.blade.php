@extends('welcome')
<style>
    body{
      overflow-y:hidden;
    }
</style>
@section('content')
<div>
  <livewire:chat :msgs='$msgs'/>

</div>
@endsection