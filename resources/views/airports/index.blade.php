@extends('layout')
@section('content')

     <div class="index">
     @if($countries->count() == 0)
     <p>If you want to create airport you have to create <a href="{{ route('countries') }}">country</a> first</p>
        <form action="{{ route('countries/create') }}"> <button class="greenbtn">New country</button> </form>
     @else
      <form class="search" action="">
      <p style="color: darkred">{{$noresults}}</p>
      <select name="country">
     <option>Search by country</option>
      @foreach($countries as $country)
        <option>{{$country->title}}</option>
      @endforeach
    </select>
    <button class="greenbtn">Search</button>
</form>

<form action="{{ route('airports/create') }}"> <button class="greenbtn">New airport</button> </form>
@endif
     <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Location</th>
    <th>Airlines</th>
    <th>Action</th>
  </tr>
  <tr>
  @foreach($airports as $airport)
    <td>{{$airport->title}}</td>
    <td>{{$airport->country}}</td>
    <td>{{$airport->location}}</td>
    <td>{{$airport->airline}}</td>
    <td>
    <form style="display: inline-block" action="{{ route('airports/addAirline', $id = $airport->id) }}">  <button class="greenbtn">Add airline</button> </form>
    <form style="display: inline-block" action="{{ route('airports/addAirline', $id = $airport->id) }}">  <button class="redbtn">Remove airline</button> </form>
    <form style="display: inline-block" action="{{ route('airports/edit', $id = $airport->id) }}">  <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action="{{ route('airports/delete', $id = $airport->id) }}">  <button class="redbtn">Delete</button> </form>
    </td>
  </tr>
  @endforeach
</table>
     </div>

@endsection