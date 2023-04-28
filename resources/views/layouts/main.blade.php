<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GYM</title>
    @vite('resources/css/app.css')
    
    <style>
        .gradient {
            background: linear-gradient(90deg, #403D3D 0%, #383535 100%);
        }
        
        </style>
</head>
<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
@include('layouts.header')
@yield('content')
@include('layouts.footer')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

</body>
</html>