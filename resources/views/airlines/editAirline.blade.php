@extends('layout')
@section('content')
     
     <div class="main">
     <form action="">
    <h1>Let's edit airline!</h1>
    <label for="title">Name</label>
    <input style="margin-bottom: 2px" type="text" name="title" placeholder="Airline name">
    <br>
    <label>Country</label>
    <select name="country">
        <option>Select country</option>
    </select>
    <br>
    <button class="greenbtn">Save</button>
    </form>
     </div>
@endsection