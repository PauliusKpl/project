@extends('layout')
@section('content')

     <div class="main">

     <div class="options">
     <form style="display: inline-block" action="/countries/create"> <button class="greenbtn">New country</button> </form>
     <form style="display: inline-block" action=""> <button class="greenbtn">Countries without airlines</button> </form>
     <form style="display: inline-block" action=""> <button class="greenbtn">Countries without airlines and airports</button> </form>
     </div>

     <table>
  <tr>
    <th>Name</th>
    <th>Code</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Edit</td>
    <td>Delete</td>
    <td>
    <form style="display: inline-block" action="">  <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action="">  <button class="redbtn">Delete</button> </form>
    </td>
  </tr>
</table> 
     </div>
     @endsection