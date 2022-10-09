@extends('layout')
@section('content')

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete {{$airline->title}} airline?</h1>
  <p>This action will remove all associations with airports</p>
     </div>
     <div style="margin: auto; text-align: center">
     <form style="display: inline-block" method="post" action="{{route('airlines/remove', $id)}}"> 
      @csrf
      <button class="greenbtn">Yes</button> 
   </form>
     <form style="display: inline-block" action="{{ route('airlines') }}"> <button class="redbtn">No</button> </form>
     </div>
@endsection