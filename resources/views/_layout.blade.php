<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bolby - Portfolio/CV/Resume HTML Template</title>
    <meta name="description" content="Bolby - Portfolio/CV/Resume HTML Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css" media="all">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
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

    <!-- mobile header -->
    <header class="mobile-header-1">
        <div class="container">
            <!-- menu icon -->
            <div class="menu-icon d-inline-flex me-4">
                <button>
                    <span></span>
                </button>
            </div>
            <!-- logo image -->
            <div class="site-logo">
                <a href="index.html">
                    <img id="logoDark" style="display: none" src="images/logo-dark.svg" alt="Bolby" />
                    <img id="logoLight" style="display: none" src="images/logo.svg" alt="Bolby" />
                </a>
            </div>
        </div>
    </header>

    <!-- desktop header -->
    <header class="desktop-header-1 d-flex align-items-start flex-column">

        <!-- logo image -->
        <div class="site-logo">
            <a href="index.html">
                <img id="logoDarkDesktop" style="display: none" src="images/logo-dark.svg" alt="Bolby" />
                <img id="logoLightDesktop" style="display: none" src="images/logo.svg" alt="Bolby" />
            </a>
        </div>

        <!-- main menu -->
        <nav>
            <ul class="vertical-menu scrollspy">
                <li class="active"><a href="#home"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="#about"><i class="fa-solid fa-user-check"></i>About</a></li>
                <li><a href="#services"><i class="fa-solid fa-briefcase"></i>Services</a></li>
                <li><a href="#experience"><i class="fa-solid fa-graduation-cap"></i>Experience</a></li>
                <li><a href="#works"><i class="fa-solid fa-layer-group"></i>Works</a></li>
                <li><a href="#blog"><i class="fa-solid fa-pen-to-square"></i>Blog</a></li>
                <li><a href="#contact"><i class="fa-solid fa-comments"></i>Contact</a></li>
            </ul>
        </nav>

        <!-- site footer -->
        <div class="footer">
            <!-- copyright text -->
            {{-- <span class="copyright">© 2020 Bolby Template.</span> --}}
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="colorChanger" onchange="changeColor($(this))">
                <label class="form-check-label" for="colorChanger"><i id="colorChangerMoon"
                        style="display: none; color: #FFD15C;" class="fa-solid fa-moon"></i><i id="colorChangerSun" style="display: none; color: #FF4C60;"
                        class="fa-solid fa-sun"></i></label>
            </div>
        </div>

    </header>

    <!-- main layout -->
    <main class="content">

        @yield('content')

    </main>

    <!-- Go to top button -->
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- SCRIPTS -->
    <script src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/infinite-scroll.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/validator.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/morphext.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/self.js') }}"></script>

</body>

</html>
