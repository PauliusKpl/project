@extends('layout')
@section('content')

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete {{$country->title}} country?</h1>
  <p>This action will remove all other airlines and countries associated with this country.</p>
     </div>
     <div style="margin: auto; text-align: center">
     <form style="display: inline-block" method="post" action="{{ route('countries/remove', $id) }}">  
     @csrf
     <button class="greenbtn">Yes</button> 
     </form>
     <form style="display: inline-block" action="{{ route('countries') }}">  <button class="redbtn">No</button> </form>
     </div>
     @endsection