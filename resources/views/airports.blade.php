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
      <form class="search">
      <select>
        <option>Search by country</option>
    </select>
    <input type="submit" value="Search">
</form>
<button class="greenbtn">New airport</button>

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
      <button class="greenbtn">Add airline</button>
      <button class="redbtn">Remove airline</button>
      <button class="orangebtn">Edit</button>
      <button class="redbtn">Delete</button>
    </td>
  </tr>
</table>
     </div>

    </body>

    <style>

    </style>
</html>
