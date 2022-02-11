<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm p-4">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <h3 style="font-family:Comic Sans MS, Comic Sans, cursive;">Tom & Jerry</h3>
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
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">關於湯姆</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAbout">
                            <a class="dropdown-item" href="/about">公司介紹</a>
                            <a class="dropdown-item" href="/locations">聯絡我們</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownAnimal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FURKIDS </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAnimal">
                            <a class="dropdown-item" href="/found">Found</a>
                            <a class="dropdown-item" href="/adopt">Adopt Animals</a>
                            <a class="dropdown-item" href="/promote">Animal Friendly Promote</a>
                            <a class="dropdown-item" href="/medical">Medical Service</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownCsr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">VOLUNTEER </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownCsr">
                            <a class="dropdown-item" href="/need">What we Need</a>
                            <a class="dropdown-item" href="/train">Volunteer Training</a>
                            <a class="dropdown-item" href="/join">Join Us</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="#" id="dropdownInvestors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INVESTORS </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownInvestors">
                            <a class="dropdown-item" href="/announcement">Announcement</a>
                            <a class="dropdown-item" href="/overview">Financial Overview</a>
                            <a class="dropdown-item" href="/results">Financial Results</a>
                            <a class="dropdown-item" href="/meeting">Shareholders Meeting</a>
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