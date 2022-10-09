@extends('layout')
@section('content')
 
     <div class="main">
     @if($countries->count() == 0)
        <h1>Error! No countries was found. Please create country first.</h1>
        <form action="{{ route('countries/create') }}"> <button class="greenbtn">New country</button> </form>
        @else
    <h1>Let's create a new airport!</h1>
    <form method="post" action="{{ route('airports/store') }}">
    @csrf
    <label for="title">Name</label>
    <input type="text" name="title" placeholder="Airport name">
    @include('partials._error-name')
    <label for="country">Country</label>
    <select name="country">
        @foreach($countries as $country)
        <option>{{$country->title}}</option>
        @endforeach
    </select>
    @include('partials._error-country')
    <label for="location" class="form-label">Location</label>
    <input name="location">
    @include('partials._error-location')
    <br>
    <button class="greenbtn">Create</button>
    </form>
    @endif
     </div>

@endsection