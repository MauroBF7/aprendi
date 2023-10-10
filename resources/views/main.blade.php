@extends('laravel-usp-theme::master')
<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title') exemplo @show
        </title>
    </head>
    <body>
        @yield('content')
    </body>
</html>