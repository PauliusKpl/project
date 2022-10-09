@extends('layout')
@section('content')
     
     <div class="main">
    <h1>Let's create a new country!</h1>
    <form method="post" action="{{ route('countries/store') }}">
     @csrf
    <label for="title">Name</label>
    <input style="margin-bottom: 2px" type="text" name="title" placeholder="Country name">
    @include('partials._error-name')
    <label for="iso_code">ISO Code</label>
    <input style="margin-bottom: 2px" type="text" name="iso_code" placeholder="1234">
    @include('partials._error-iso')
    <br>
    <button class="greenbtn">Create</button>
</form>
     </div>
     @endsection

