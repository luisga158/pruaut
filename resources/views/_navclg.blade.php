<nav class="navbar navbar-expand-lg hdcont">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            <span class="hdclgttl">@lang('main.title')</span>
            <span class="hdclgltlttl">@lang('main.title')</span>
        </a>
        <img src="https://i.imgur.com/Ik1TAEA.png" alt="logo de compulg" class="hdclg">

        <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">@lang('main.lblin')</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">@lang('main.lblreg')</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            @lang('main.lblout')
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{route('post/index')}}">
                            @lang('main.lblposts')
                        </a>
                        <a class="dropdown-item" href="{{route('post/create')}}">
                            @lang('main.lblcreatepost')
                        </a>
                        <a class="dropdown-item" href="{{route('post/my')}}">@lang('main.lblbtnmyposts')</a>
                        <a class="dropdown-item" href="{{route('perfils.my')}}">@lang('main.lblperfil')</a>
                        <a class="dropdown-item" href="{{route('perfil/index')}}">@lang('main.lblperfil')<span> de todos</span></a>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>