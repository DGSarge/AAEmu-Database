<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/export.png') }}" alt="AAWeb">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dLabel" role="button" data-toggle="dropdown" class="nav-link dropdown-toggle"
                       href="">
                        Database
                    </a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li>
                            <a class="dropdown-item" tabindex="-1" href="{{route('all_items')}}">
                                Items
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="https://boards.aaemu.pw" class="nav-link">Community forum</a>
                </li>
                <li class="nav-item">
                    <a href="https://github.com/atel0/AAEmu" class="nav-link"><i class="fab fa-github"></i> Github</a>
                </li>
                <li class="nav-item">
                    <a href="https://discord.gg/7pJZpqb" class="nav-link"><i class="fab fa-discord"></i> Discord</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('guide') }}" class="nav-link"><i class="fas fa-book"></i> Guide</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nightmode') }}" class="nav-link @if (session('isDark')) active @endif"> DARK ZONE</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->username }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
