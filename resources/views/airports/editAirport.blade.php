@extends('layout')
@section('content')
 
     <div class="main">
    <h1>Let's edit {{$airport->title}} airport!</h1>
    <form method="post" action="{{ route('airports/update', $id) }}">
    @csrf
    <label for="title">Name</label>
    <input type="text" name="title" placeholder="Airport name" value="{{$airport->title}}">
    @include('partials._error-name')
    <label for="country">Country</label>
    <select name="country">
        <option value="{{$airport->country}}"></option>
        @foreach($countries as $country)
        <option>{{$country->title}}</option>
        @endforeach
    </select>
    @include('partials._error-country')
    <label for="location" class="form-label">Location</label>
    <input name="location" value="{{$airport->location}}">
    @include('partials._error-location')
    <br>
    <button class="greenbtn">Save</button>
    </form>
     </div>

@endsection