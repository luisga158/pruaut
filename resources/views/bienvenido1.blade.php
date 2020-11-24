<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@lang('main.title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/compulg.css') }}" rel="stylesheet">
    <style>
        html,
        body {
            background-color: #000;
            color: #fff;
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
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 12vh;
        }
        .links>a {
            color: #fff;
            padding: 5px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
        section {
            margin-top: 30vh;
            min-height: 70vh;
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
                <div class="title m-b-sm"><div class="conttxtimgslr">
                <div class="ttltxtpimgslr">
                    <img src="https://i.imgur.com/6kfMQFn.jpg" alt="logo de mundo developer" class="imgmdlft">
                    <spam class="spmlgcenter"><b> @lang('main.lblensociedad') </b></spam>
                    <img src="https://i.imgur.com/Ik1TAEA.png" alt="logo de compulg" class="imgclgrgth">
                </div></div></div>
                <h1>@lang('main.lblpresenta')</h1>
                <div class="title m-b-sm">
                    @lang('main.title')
                </div>
                <p>@lang('main.lblpltfrmdscrp')</p>
                <h1>@lang('main.subttl')</h1>
            </div>
        </section>
    </div>
</body>
</html>