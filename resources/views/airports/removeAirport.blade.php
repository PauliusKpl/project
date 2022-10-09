@extends('layout')
@section('content')

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete {{$airport->title}} airport?</h1>
  <p>This action will remove all associations with other airlines and countries</p>
     </div>
     <div style="margin: auto; text-align: center">
     <form style="display: inline-block" method="post" action="{{ route('airports/remove', $id) }}">
     @csrf
      <button class="greenbtn">Yes</button> </form>
     <form style="display: inline-block" action="{{ route('airports') }}">   <button class="redbtn">No</button> </form>
     </div>
@endsection