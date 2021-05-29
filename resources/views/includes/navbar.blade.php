<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            Tom & Jerry
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
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="/about" id="dropdownAbout" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">關於湯姆與傑利</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAbout">
                            <a class="dropdown-item" href="#">理念願景</a>
                            <a class="dropdown-item" href="#">營運據點</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="/api/animals" id="dropdownAnimal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">毛小孩專區</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAnimal">
                            <a class="dropdown-item" href="#">走失協尋</a>
                            <a class="dropdown-item" href="#">領　　養</a>
                            <a class="dropdown-item" href="#">認　　養</a>
                            <a class="dropdown-item" href="#">寵物送養</a>
                            <a class="dropdown-item" href="#">寵物送別</a>
                            <a class="dropdown-item" href="#">動物醫院</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="/csr" id="dropdownCsr" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">企業社會責任</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownCsr">
                            <a class="dropdown-item" href="#">永續策略</a>
                            <a class="dropdown-item" href="#">動物友善社會</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <div class="dropdown">
                        <a class="nav-link font-weight-bold text-dark dropdown-toggle" href="/investors" id="dropdownInvestors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">投資人專區</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownInvestors">
                            <a class="dropdown-item" href="#">財務資訊</a>
                            <a class="dropdown-item" href="#">公司治理</a>
                            <a class="dropdown-item" href="#">投資人聯絡窗口</a>
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
                            <a class="nav-link font-weight-bold text-dark" href="{{ route('login') }}">{{ __('登入') }}</a>
                        </li>
                    @endif
                            
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link font-weight-bold text-dark" href="{{ route('register') }}">{{ __('註冊') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} 您好!
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                會員中心
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('登　　出') }}
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