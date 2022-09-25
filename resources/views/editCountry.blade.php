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
    <h1>Let's edit a country!</h1>
    <label for="countryname">Name</label>
    <input style="margin-bottom: 2px" type="text" name="countryname" placeholder="Country name">
    <br>
    <label for="iso">ISO Code</label>
    <input style="margin-bottom: 2px" type="text" name="iso">
    <br>
    <button class="greenbtn">Save</button>
     </div>



    </body>

</html>
