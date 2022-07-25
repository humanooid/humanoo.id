<!DOCTYPE html>
<html lang="en-US">

<head>
    {{-- <link rel="preload" as="font"> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $title }} - Human∞.id</title>
    @yield('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('humanooid-fav-head.svg') }}">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ mix('/f/css/fstyle.css') }}" type="text/css" media="all">

    @yield('css')

    <link rel="stylesheet" href="{{ mix('f/css/fcustomstyle.css') }}" type="text/css" media="all">
    <link rel="stylesheet" id="scrollbar" href="" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <div id="preloader" class="light">
        <div class="outer">
            <!-- Google Chrome -->
            <div class="infinityChrome">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- Safari and others -->
            <div class="infinity">
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
                <div>
                    <span></span>
                </div>
            </div>
            <!-- Stuff -->
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="goo-outer">
                <defs>
                    <filter id="goo">
                        <feGaussianBlur in="SourceGraphic" stdDeviation="6" result="blur" />
                        <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                        <feBlend in="SourceGraphic" in2="goo" />
                    </filter>
                </defs>
            </svg>
        </div>
    </div>
    @if (Cookie::get('layout') == 'vertical')
        <!-- mobile header -->
        <header class="mobile-header-1 fixed-top light">
            <div class="container">
                <!-- menu icon -->
                <div class="menu-icon d-inline-flex me-4">
                    <button>
                        <span></span>
                    </button>
                </div>
                <!-- logo image -->
                <div class="site-logo">
                    <a href="/">
                        <img id="logoDark" style="display: none" src="{{ asset('humanooid-dark-text.svg') }}"
                            alt="Main Logo" />
                        <img id="logoLight" style="display: none" src="{{ asset('humanooid-light-text.svg') }}"
                            alt="Main Logo" />
                    </a>
                </div>
            </div>
        </header>

        <!-- desktop header -->
        <header class="desktop-header-1 d-flex align-items-start flex-column light">

            <!-- logo image -->
            <div class="site-logo">
                <a href="/">
                    <img id="logoDarkDesktop" style="display: none" src="{{ asset('humanooid-dark-text.svg') }}"
                        alt="Main Logo" />
                    <img id="logoLightDesktop" style="display: none" src="{{ asset('humanooid-light-text.svg') }}"
                        alt="Main Logo" />
                </a>
            </div>

            <!-- main menu -->
            <nav>
                <ul class="vertical-menu scrollspy">
                    @foreach ($bar as $k => $v)
                        <li class="{{ $v['active'] ? 'active' : '' }}"><a href="{{ $v['url'] }}"><i
                                    class="{{ $v['icon'] }}"></i>{{ $k }}</a></li>
                    @endforeach
                </ul>
            </nav>

            <!-- site footer -->
            <div class="footer mb-5">
                <!-- copyright text -->
                <div class="form-check form-switch colorChanger">
                    <input class="form-check-input" type="checkbox" id="colorChanger" onchange="changeColor($(this))">
                    <label class="form-check-label" for="colorChanger"><i id="colorChangerMoon"
                            style="display: none; color: #FFD15C;" class="fa-solid fa-moon"></i><i id="colorChangerSun"
                            style="display: none; color: #FF4C60;" class="fa-solid fa-sun"></i></label>
                </div>
                <div class="form-check form-switch" title="Switch to horizontal layout">
                    <input class="form-check-input" type="checkbox" id="layoutChanger"
                        onchange="changeLayout('horizontal')" checked>
                    <label class="form-check-label" for="layoutChanger"><i id="changeLayoutIcon"
                            class="fa-solid fa-left-right"></i></label>
                </div>
            </div>

        </header>
    @else
        <!-- desktop header -->
        <header class="desktop-header-3 fixed-top light">

            <div class="container-fluid px-4">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="navbar-brand" href="/">
                        <img id="horizontalLogoDark" style="display: none" width="200px"
                            src="{{ asset('humanooid-dark-text.svg') }}" alt="Main Logo" />
                        <img id="horizontalLogoLight" style="display: none" width="200px"
                            src="{{ asset('humanooid-light-text.svg') }}" alt="Main Logo" />
                    </a> <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                        class="navbar-toggler" data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse"
                        type="button"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto scrollspy">
                            @foreach ($bar as $k => $v)
                                <li class="nav-item {{ $v['active'] ? 'active' : '' }}"><a class="nav-link"
                                        href="{{ $v['url'] }}">{{ $k }}</a></li>
                            @endforeach
                            <li class="nav-item pe-2">
                                <div class="form-check form-switch colorChanger">
                                    <input class="form-check-input" type="checkbox" id="colorChanger"
                                        onchange="changeColor($(this))">
                                    <label class="form-check-label" for="colorChanger"><i id="colorChangerMoon"
                                            style="display: none; color: #FFD15C;" class="fa-solid fa-moon"></i><i
                                            id="colorChangerSun" style="display: none; color: #FF4C60;"
                                            class="fa-solid fa-sun"></i></label>
                                </div>
                            </li>
                            <li class="nav-item">
                                <div class="form-check form-switch" title="Switch to horizontal layout">
                                    <input class="form-check-input" type="checkbox" id="layoutChanger"
                                        onchange="changeLayout('vertical')">
                                    <label class="form-check-label" for="layoutChanger"><i id="changeLayoutIcon"
                                            class="fa-solid fa-up-down"></i></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

            </div>

        </header>
    @endif

    <!-- main layout -->
    <main class="{{ Cookie::get('layout') == 'vertical' ? 'content' : 'content-3' }}">

        @yield('content')

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="{{ mix('f/js/fscript.js') }}"></script>
    @yield('js')
    <script src="{{ mix('f/js/fcustomscript.js') }}"></script>
    @yield('script')

</body>

</html>
