<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "icon" type = "image/png" href = "./images/logo_title.png">
        <title>Tìm việc làm năm châu</title>
        @include('layouts.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        @include('layouts.navigation')
        @include('layouts.menu')
        @include('layouts.slider')
        @include('layouts.content')
        @include('layouts.footer')

    </body>
</html>

