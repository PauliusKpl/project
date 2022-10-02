@extends('layout')
@section('content')
     
     <div class="main">
    <h1>Let's create a new airline!</h1>
    <form action="">
    <label for="title">Name</label>
    <input style="margin-bottom: 2px" type="text" name="title" placeholder="Airline name">
    <br>
    <label>Country</label>
    <select name="country">
        <option>Select country</option>
    </select>
    <br>
    <button class="greenbtn">Create</button>
    </form>
     </div>

@endsection