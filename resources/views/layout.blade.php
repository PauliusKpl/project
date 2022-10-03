<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Airlines</title>
        <link rel="stylesheet" href="{{ asset('style.css') }}">
    </head>  
    <body>
     <div class="header">
        <a href="/"><h3 class="logo">AIRLINES</h3></a>
        <ul>
            <li><a href="{{ route('airports') }}">Airports</a></li>
            <li><a href="{{ route('countries') }}">Countries</a></li>
            <li><a href="{{ route('airlines') }}">Airlines</a></li>
        </ul>
     </div>
    @yield('content')
</body>
</html>