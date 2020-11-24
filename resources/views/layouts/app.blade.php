<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <link href="http://www.iconj.com/icon.php?pid=sz8zcy10pc" rel="shortcut icon" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="es" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <meta name="name" content="{{ config('app.name', 'Laravel') }}" />
    <meta itemprop="image" content="https://i.imgur.com/d7dL3sY.jpg" />
    <meta itemprop="name" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="author" content="Luis Gabriel Hernandez Valderrama" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/compulg.css') }}" rel="stylesheet">
</head>
<body>        
    @include('_navclg')
    <div class="container">
    <br>    
    @yield('content')
    </div><br>
</body>
