@extends('layout')
@section('content')

     <div class="main">
     <div class="options">
     <form action="/airlines/create"> <button class="greenbtn">New airline</button> </form>
     </div>

     <table>
  <tr>
    <th>Name</th>
    <th>Country</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Edit</td>
    <td>Delete</td>
    <td>
    <form style="display: inline-block" action=""> <button class="orangebtn">Edit</button> </form>
    <form style="display: inline-block" action=""> <button class="redbtn">Delete</button>  </form>
    </td>
  </tr>
</table> 
     </div>
     </div>
@endsection