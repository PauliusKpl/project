@extends('layout')
@section('content')
     <div class="header">
        <a href="/"><h3 class="logo">AIRLINES</h3></a>
        <ul>
            <li><a href="/">Airports</a></li>
            <li><a href="/countries">Countries</a></li>
            <li><a href="/airlines">Airlines</a></li>
        </ul>
     </div>

     <div class="main">
    <h1>Let's add airline</h1>
    <form action="">
    <select name="airline">
        <option>Select airline</option>
    </select>
    <br>
    <br>
     <button class="greenbtn">Link</button>
     </form>
     </div>
@endsection