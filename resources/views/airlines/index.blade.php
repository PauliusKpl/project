@extends('layout')
@section('content')

     <div class="index">
     @if($countries->count() == 0)
     <p>If you want to create airline you have to create <a href="{{ route('countries') }}">country</a> first</p>
        <form action="{{ route('countries/create') }}"> <button class="greenbtn">New country</button> </form>
     @else
     <div class="options">
     <form action="{{ route('airlines/create') }}"> <button class="greenbtn">New airline</button> </form>
     </div>
     @endif

     <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Action</th>
  </tr>
  @foreach($airlines as $airline)
  <tr>
    <td>{{$airline->title}}</td>
    <td>{{$airline->country}}</td>
    <td>
    <form style="display: inline-block" action="{{ route('airlines/edit', $id = $airline->id) }}"> <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action="{{ route('airlines/delete', $id = $airline->id) }}"> <button class="redbtn">Delete</button>  </form>
    </td>
  </tr>
  @endforeach
</table> 
     </div>
     </div>
@endsection