<!DOCTYPE html>
<html>
    <head>
        <title>Luis Gabriel Hernández Valderrama</title>
        <link href="http://www.iconj.com/icon.php?pid=sz8zcy10pc" rel="shortcut icon" />
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta http-equiv="content-language" content="es" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/mystyleii.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
        @section('header')
        <div class="hdlg"><center>Luis Gabriel Hernández Valderrama</center></div>
        @show
        @include('navlgii')
            <br>
        @yield('content')
        </div><br>
        @section('foot')
            <div class="text-center" style="margin-bottom:0"><p><a href="https://sites.google.com/view/presentacin-compulg/inicio" style="color: white">www.compulg.site</a></p></div>
        @show
    </body>
</html>