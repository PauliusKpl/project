@extends('layout')
@section('content')
 
     <div class="main">
    <h1>Let's create a new airport!</h1>
    <form action="">
    <label for="airportname">Name</label>
    <input style="margin-bottom: 2px" type="text" name="airportname" placeholder="Airport name">
    <br>
    <label>Country</label>
    <select name="country">
        <option>Select country</option>
    </select>
    <br>
    <label for="location" class="form-label">Location</label>
    <input name="location">
    <br>
    <button class="greenbtn">Create</button>
    </form>
     </div>

@endsection