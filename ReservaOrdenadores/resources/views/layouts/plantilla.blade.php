<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    @include('layouts.partials.nav')
    <div class="container">
        @yield('contenido')
    </div>
    @include('layouts.partials.footer')
</body>
</html>
