@extends('layout')
@section('content')

     <div class="index">

     <p style="color: darkred">{{$noresults}}</p>

     <div class="options">
     <form style="display: inline-block" action="{{ route('countries/create') }}"> <button class="greenbtn">New country</button> </form>
     <form style="display: inline-block" action=""> <button class="greenbtn" name="filter" value="withoutAirline">Countries without airlines</button> </form>
     <form style="display: inline-block" action=""> <button class="greenbtn" name="filter" value="withoutAirlineAndAirport">Countries without airlines and airports</button> </form>
     </div>

     <table>
  <tr>
    <th>Name</th>
    <th>Code</th>
    <th>Action</th>
  </tr>
 @foreach($countries as $country)
  <tr>
    <td>{{$country->title}}</td>
    <td>{{$country->iso_code}}</td>
    <td>
    <form style="display: inline-block" action="{{ route('countries/edit', $id = $country->id) }}">  <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action="{{ route('countries/delete', $id = $country->id) }}">  <button class="redbtn">Delete</button> </form>
    </td>
  </tr>
  @endforeach
</table> 
     </div>
     @endsection