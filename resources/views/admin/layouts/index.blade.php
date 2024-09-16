<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Việc làm tại năm châu</title>
        @include('layouts.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        @include('admin.layouts.navigation')
        @include('admin.layouts.sidebar')

    </body>
</html>