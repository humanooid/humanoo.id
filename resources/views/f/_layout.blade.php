
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $title }} - Human∞.id</title>
    <meta name="description" content="{{ $title }} - Human∞.id">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('f/images/favicon.png') }}">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="{{ asset('f/css/bootstrap.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/simple-line-icons.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/slick.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/animate.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/magnific-popup.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/plugin/fontawesome/css/all.min.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/style.css') }}" type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('f/css/custom.css?v=20220325') }}" type="text/css" media="all">

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
                    <img id="logoDark" style="display: none" src="{{ asset('f/images/logo-dark.svg') }}"
                        alt="Main Logo" />
                    <img id="logoLight" style="display: none" src="{{ asset('f/images/logo.svg') }}"
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
                <img id="logoDarkDesktop" style="display: none" src="{{ asset('f/images/logo-dark.svg') }}"
                    alt="Main Logo" />
                <img id="logoLightDesktop" style="display: none" src="{{ asset('f/images/logo.svg') }}"
                    alt="Main Logo" />
            </a>
        </div>

        <!-- main menu -->
        <nav>
            <ul class="vertical-menu scrollspy">
                <li class="active"><a href="/"><i class="fa-solid fa-house"></i>Home</a></li>
                <li><a href="/about"><i class="fa-solid fa-user-check"></i>About</a></li>
                <li><a href="/contact"><i class="fa-solid fa-comments"></i>Contact</a></li>
            </ul>
        </nav>

        <!-- site footer -->
        <div class="footer mb-5">
            <!-- copyright text -->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="colorChanger" onchange="changeColor($(this))">
                <label class="form-check-label" for="colorChanger"><i id="colorChangerMoon"
                        style="display: none; color: #FFD15C;" class="fa-solid fa-moon"></i><i id="colorChangerSun"
                        style="display: none; color: #FF4C60;" class="fa-solid fa-sun"></i></label>
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
    <script src="{{ asset('f/js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ asset('f/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('f/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('f/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('f/js/popper.min.js') }}"></script>
    <script src="{{ asset('f/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('f/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('f/js/infinite-scroll.min.js') }}"></script>
    <script src="{{ asset('f/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('f/js/slick.min.js') }}"></script>
    <script src="{{ asset('f/js/contact.js') }}"></script>
    <script src="{{ asset('f/js/validator.js') }}"></script>
    <script src="{{ asset('f/js/wow.min.js') }}"></script>
    <script src="{{ asset('f/js/morphext.min.js') }}"></script>
    <script src="{{ asset('f/js/parallax.min.js') }}"></script>
    <script src="{{ asset('f/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('f/js/custom.js') }}"></script>
    <script src="{{ asset('f/js/self.js?v=20220325') }}"></script>

</body>

</html>
