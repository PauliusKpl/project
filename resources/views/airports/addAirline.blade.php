@extends('layout')
@section('content')
     <div class="main">
     @if($airlines->count() == 0)
        <h1>Error! No airlines was found. Please create airline first.</h1>
        <form action="{{ route('airlines/create') }}"> <button class="greenbtn">New airline</button> </form>
        @else
    <h1>Let's add airline to {{$airport->title}} airport</h1>
    <form method="post" action="{{ route('airports/storeAirline', $id) }}">
        @csrf
   <label for="airline"></label> <select name="airline">
        @foreach($airlines as $airline)
        <option>{{$airline->title}}</option>
        @endforeach
    </select>
    <br>
    <br>
     <button class="greenbtn" style="margin:0">Link</button>
     </form>
     @endif
     </div>
@endsection