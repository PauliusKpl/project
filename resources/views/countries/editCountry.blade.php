@extends('layout')
@section('content')
  
     <div class="main">
    <h1>Let's edit {{$country->title}} country!</h1>
    <form method="post" action="{{route('countries/update', $id)}}">
     @csrf
    <label for="title">Name</label>
    <input style="margin-bottom: 2px" type="text" name="title" placeholder="Country name" value="{{$country->title}}">
    @include('partials._error-name')
    <label for="iso_code">ISO Code</label>
    <input style="margin-bottom: 2px" type="text" name="iso_code" placeholder="1234" value="{{$country->iso_code}}">
    @include('partials._error-iso')
    <br>
    <button class="greenbtn">Save</button>
</form>
     </div>
     @endsection
