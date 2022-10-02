@extends('layout')
@section('content')

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete this airline?</h1>
  <p>This action will remove all associations with airports</p>
     </div>
     <div style="margin: auto; width: 100px;">
     <form action=""> <button class="greenbtn">Yes</button> </form>
     <form action=""> <button class="redbtn">No</button> </form>
     </div>
@endsection