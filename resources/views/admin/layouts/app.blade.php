<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @include('admin.layouts.css')
        <!-- Scripts -->
    </head>
    <body >
        @include('admin.layouts.navigation')

        <div class="min-h-screen bg-gray-100">
        @include('admin.layouts.sidebar')
    
        </div>

    </body>
</html>
