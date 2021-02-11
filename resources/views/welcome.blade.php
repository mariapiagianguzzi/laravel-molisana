<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    
    </head>
    <body>
       @yield('header')
       <header>
           <nav>
            @foreach($pasta as $value)
                <div class="pasta">
                    <img src="{{ $value['src'] }}" alt="">
                </div>
            @endforeach
           </nav> 
       </header>
    </body>
</html>
