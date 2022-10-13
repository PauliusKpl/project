@extends('layout')
@section('content')
     <div class="main">
    <h1>Let's remove airline from {{$airport->title}} airport</h1>
    <form method="post" action="{{ route('airports/storeAirline', $id) }}">
        @csrf
   <label for="airline"></label> <select name="airline">
        @foreach($airlines as $airline)
        <option>{{$airline}}</option>
        @endforeach
    </select>
    <br>
    <br>
     <button class="redbtn" style="margin:0">Unink</button>
     </form>
     </div>
@endsection