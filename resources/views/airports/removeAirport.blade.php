@extends('layout')
@section('content')

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete this airport?</h1>
  <p>This action will remove all associations with other airlines and countries</p>
     </div>
     <div style="margin: auto; width: 100px">
     <form style="display: inline-block" action=""> <button class="greenbtn">Yes</button> </form>
     <form style="display: inline-block" action="">   <button class="redbtn">No</button> </form>
     </div>
@endsection