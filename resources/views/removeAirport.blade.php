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

     <div class="main" style="text-align: center;">
  <h1>Are you sure you want to delete this airport?</h1>
  <p>This action will remove all associations with other airlines and countries</p>
     </div>
     <div style="margin: auto; width: 100px">
     <button class="greenbtn">Yes</button>
       <button class="redbtn">No</button>
     </div>
    </body>

</html>
