@extends('layout')
@section('content')
     
     <div class="main">
    <h1>Let's create a new country!</h1>
    <form action="">
    <label for="country">Name</label>
    <input style="margin-bottom: 2px" type="text" name="country" placeholder="Country name">
    <br>
    <label for="iso_code">ISO Code</label>
    <input style="margin-bottom: 2px" type="text" name="iso_code" placeholder="1234">
    <br>
    <button class="greenbtn">Create</button>
</form>
     </div>
     @endsection

