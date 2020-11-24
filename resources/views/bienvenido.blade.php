<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('main.title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html,
        body {
            background-color: black;
            color: white;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            align-items: center;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .links>a {
            color: #fff;
            padding: 5px;
            font-size: 1.8vh;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        section {
            margin-top: 10vh;
            min-height: 70vh;
        }
        /* Estilos para plantilla bienvenido */
        .conttxtimgslr {
            display: inline-block;
        }
        .ttltxtpimgslr {
            display: flex;
            align-content: space-between;
            align-items: center;
        }
        /* Estilo para texto con imagenes a cada lado */
        .imgmdlft {
            height: 15vh;
            width: auto;
            text-align: left;
        }
        .imgclgrgth {
            width: 25vw;
            height: auto;
            text-align: right;
        }
        .spmlgcenter {
            padding: 1.7vw;
            text-align: center;
            font-size: 3vh;
        }
        .titlelg {
            font-size: 5vw;
        }
        a {
            background-color: blue;
            color: aliceblue;
        }
        a:hover {
            background-color: blue;
            color: cyan;
        }
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">@lang('main.lblhome')</a>
            @else
            <a href="{{ route('login') }}">@lang('main.lblin')</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">@lang('main.lblreg')</a>
            @endif
            @endauth
            <a href="/posts">@lang('main.lblposts')</a>
        </div>
        @endif
        <section class="d-flex text-center">
            <div class="content">
                <div>
                    <div class="conttxtimgslr">
                        <div class="ttltxtpimgslr">
                            <img src="https://i.imgur.com/6kfMQFn.jpg" alt="logo de mundo developer" class="imgmdlft">
                            <spam class="spmlgcenter"><b> @lang('main.lblensociedad') </b></spam>
                            <img src="https://i.imgur.com/Ik1TAEA.png" alt="logo de compulg" class="imgclgrgth">
                        </div>
                    </div>
                </div>
                <h1>@lang('main.lblpresenta')</h1>
                <div class="titlelg">
                    @lang('main.title')
                </div>
                <p>@lang('main.lblpltfrmdscrp')</p>
                <h2><b>@lang('main.subttl')</b></h2>
            </div>
        </section>
    </div>
</body>
</html>