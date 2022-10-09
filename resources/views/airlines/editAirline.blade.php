@extends('layout')
@section('content')
     
     <div class="main">
     <form method="post" action="{{route('airlines/update', $id)}}">
        @csrf
    <h1>Let's edit {{$airline->title}} airline!</h1>
    <label for="title">Name</label>
    <input style="margin-bottom: 2px" type="text" name="title" placeholder="Airline name" value="{{$airline->title}}">
    @include('partials._error-name')
    <label>Country</label>
    <select name="country">
    <option value="{{$airline->country}}"></option>
        @foreach($countries as $country)
        <option>{{$country->title}}</option>
        @endforeach
    </select>
    @include('partials._error-country')
    <br>
    <button class="greenbtn">Save</button>
    </form>
     </div>
@endsection