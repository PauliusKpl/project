@extends('layout')
@section('content')
  
     <div class="main">
    <h1>Let's edit a country!</h1>
    <form action="">
    <label for="country">Name</label>
    <input style="margin-bottom: 2px" type="text" name="country" placeholder="Country name">
    <br>
    <label for="iso_code">ISO Code</label>
    <input style="margin-bottom: 2px" type="text" name="iso_code" placeholder="1234">
    <br>
    <button class="greenbtn">Save</button>
</form>
     </div>
     @endsection
