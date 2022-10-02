@extends('layout')
@section('content')

     <div class="main">
      <form class="search" action="">
      <select name="country">
        <option>Search by country</option>
    </select>
    <input type="submit" value="Search">
</form>
<form action="/airports/create"> <button class="greenbtn">New airport</button> </form>

     <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Location</th>
    <th>Airlines</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Add airline</td>
    <td>Remove airline</td>
    <td>Edit</td>
    <td>Delete</td>
    <td>
    <form style="display: inline-block" action="">  <button class="greenbtn">Add airline</button> </form>
    <form style="display: inline-block" action="">  <button class="redbtn">Remove airline</button> </form>
    <form style="display: inline-block" action="">  <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action="">  <button class="redbtn">Delete</button> </form>
    </td>
  </tr>
</table>
     </div>

@endsection