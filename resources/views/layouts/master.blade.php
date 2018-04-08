<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Agency - Start Bootstrap Theme</title>
        <link rel="stylesheet" href="{{ asset('plugins/css/bootstrap.css') }}">
    </head>
    <body id="page-top" class="index">
    
        @include('layouts.partials._navigation')
    
        @include('layouts.partials._header')
    
        @yield('content')
    
        @include('layouts.partials._footer')
    
    </body>
</html>