<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h2>Tom & Jerry</h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-4" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <!-- Authentication Links -->
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COMPANY </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAbout">
                            <a class="dropdown-item" href="/about">About Us</a>
                            <a class="dropdown-item" href="#">Locations</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownAnimal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FURKIDS </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAnimal">
                            <a class="dropdown-item" href="#">Lost and found</a>
                            <a class="dropdown-item" href="#">Adopt animals</a>
                            <a class="dropdown-item" href="#">Animal friendly promote</a>
                            <a class="dropdown-item" href="#">Medical service</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownCsr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VOLUNTEER </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownCsr">
                            <a class="dropdown-item" href="#">What we Need</a>
                            <a class="dropdown-item" href="#">Volunteer training</a>
                            <a class="dropdown-item" href="#">Join us</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownInvestors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INVESTORS </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownInvestors">
                            <a class="dropdown-item" href="#">Announcement</a>
                            <a class="dropdown-item" href="#">Financial results</a>
                            <a class="dropdown-item" href="#">Shareholders meeting</a>
                            <a class="dropdown-item" href="#">Stock Quotes & Dividends</a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-dark" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                        </li>
                    @endif
                            
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-dark" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} hello!
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                會員中心
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>