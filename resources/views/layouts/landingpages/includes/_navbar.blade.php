<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu mean-container">
                <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                        style="right: 0px; left: auto; text-align: center; text-indent: 0px; font-size: 18px;"><span><span><span></span></span></span></a>
                    <nav class="mean-nav">
                        <ul class="navbar-nav" style="display: none;">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    News
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu" style="display: none;">
                                    <li class="nav-item">
                                        <a href="news.html" class="nav-link">
                                            News
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="news-details.html" class="nav-link">
                                            News Details
                                        </a>
                                    </li>
                                </ul>
                                <a class="mean-expand" href="#" style="font-size: 18px">+</a>
                            </li>
                            <li class="nav-item mean-last">
                                <a href="{{ route('landingpage') }}" class="nav-link">
                                    Home
                                </a>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="{{ route('login') }}" class="default-btn">
                                    Masuk
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="logo">
                    <a href="{{ route('landingpage') }}">
                        <img src="{{ asset('landingpage/img/logo.png') }}" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navbar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('landingpage') }}">
                    <img src="{{ asset('landingpage/img/logo.png') }}" alt="image">
                </a>
                <div class="mean-push"></div>
                @guest
                @if (Route::has('login'))
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                    style="display: none; margin-right: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('landingpage') }}" class="nav-link">
                                Home
                            </a>
                        </li>
                    </ul>
                    <div class="others-options d-flex align-items-center">
                        <div class="option-item">
                            <a href="{{ route('login') }}" class="default-btn">
                                Masuk
                            </a>
                        </div>
                    </div>
                </div>
                @endif
                @else
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent"
                    style="display: none; margin-right: 20px;">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('landingpage') }}" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{ auth()->user()->name }}
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{ route('dashboard') }}" class="nav-link">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endguest
            </nav>
        </div>
    </div>
</div>
