@extends('layout')
@section('content')
     <div class="main">
    <h1>Let's remove airline from {{$airport->title}} airport</h1>
    <form method="post" action="{{ route('airports/removeAirline', $id) }}">
        @csrf
   <label for="airline"></label> <select name="airline">
        <option>{{$airlines}}</option>
    </select>
    <br>
    <br>
     <button class="redbtn" style="margin:0">Unink</button>
     </form>
     </div>
@endsection