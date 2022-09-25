<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Airlines</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
     <div class="header">
        <a href="/"><h3 class="logo">AIRLINES</h3></a>
        <ul>
            <li><a href="/">Airports</a></li>
            <li><a href="/countries">Countries</a></li>
            <li><a href="/airlines">Airlines</a></li>
        </ul>
     </div>

     <div class="main">
     <div class="options">
      <button class="greenbtn">New airline</button>
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
      <button class="orangebtn">Edit</button>
      <button class="redbtn">Delete</button>
    </td>
  </tr>
</table> 
     </div>
     </div>

    </body>

</html>
