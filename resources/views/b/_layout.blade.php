<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{ $title }} - Human∞.id</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <link href="{{ asset('b/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('b/plugins/perfectscroll/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('b/plugins/pace/pace.css') }}" rel="stylesheet">
    <link href="{{ asset('b/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    @yield('css')


    <!-- Theme Styles -->
    <link href="{{ asset('b/css/main.min.css') }}" rel="stylesheet">
    @if (Cookie::get('color') == 1)
        <link href="{{ asset('b/css/darktheme.css') }}" rel="stylesheet">
    @endif
    <link href="{{ asset('b/css/custom.css') }}" rel="stylesheet">
    @if (Cookie::get('color') == 1)
        <link href="{{ asset('b/css/custom-dark.css') }}" rel="stylesheet">
    @endif

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('humanooid-fav-head.svg') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('humanooid-fav-head.svg') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        <div class="app-sidebar">
            <div class="logo">
                <a href="/dashboard" class="logo-icon"><span class="logo-text">Human∞.id</span></a>
                <div class="sidebar-user-switcher user-activity-online">
                    <a href="#">
                        <img src="{{ asset('b/images/avatars/avatar.png') }}">
                        <span class="activity-indicator"></span>
                        <span class="user-info-text">{{ session('user')->name }}<br><span class="user-state-info">On a
                                call</span></span>
                    </a>
                </div>
            </div>
            <div class="app-menu">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Apps
                    </li>
                    <li {!! $title == 'Dashboard' ? 'class="active-page"' : '' !!}>
                        <a href="/dashboard" {!! $title == 'Dashboard' ? 'class="active"' : '' !!}><i
                                class="material-icons-two-tone">dashboard</i>Dashboard</a>
                    </li>
                    <?php
                    $blogList = ['Posts'];
                    ?>
                    <li {!! in_array($title, $blogList) ? 'class="active-page"' : '' !!}>
                        <a href=""><i class="material-icons-two-tone">article</i>Blog<i
                                class="material-icons has-sub-menu">keyboard_arrow_right</i></a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/posts" {!! $title == 'Posts' ? 'class="active"' : '' !!}>Posts</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="app-container">
            <div class="search">
                <form>
                    <input class="form-control" type="text" name="search" placeholder="Type here..."
                        aria-label="Search" value="{{ request('search') }}">
                </form>
                <a href="#" class="toggle-search"><i class="material-icons">close</i></a>
            </div>
            <div class="app-header">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <div class="container-fluid">
                        <div class="navbar-nav" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link hide-sidebar-toggle-button" href="#"><i
                                            class="material-icons">first_page</i></a>
                                </li>
                            </ul>

                        </div>
                        <div class="d-flex">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link toggle-search" href="#"><i class="material-icons">search</i></a>
                                </li>
                                <li class="nav-item">
                                    <form action="/colorize" method="post" id="colorize">
                                        @csrf
                                        <input type="hidden" name="color"
                                            value="{{ Cookie::get('color') == 1 ? 0 : 1 }}">
                                    </form>
                                    <a class="nav-link dropdown-toggle" role="button" onclick="$('#colorize').submit()">
                                        <i
                                            class="material-icons-outlined">{{ Cookie::get('color') == 0 ? 'dark_mode' : 'light_mode' }}</i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link nav-notifications-toggle" id="notificationsDropDown" href="#"
                                        data-bs-toggle="dropdown">4</a>
                                    <div class="dropdown-menu dropdown-menu-end notifications-dropdown"
                                        aria-labelledby="notificationsDropDown">
                                        <h6 class="dropdown-header">Notifications</h6>
                                        <div class="notifications-dropdown-list">
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-info text-white">
                                                            <i class="material-icons-outlined">campaign</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Donec tempus nisi sed erat
                                                            vestibulum, eu suscipit ex laoreet</p>
                                                        <small>19:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-danger text-white">
                                                            <i class="material-icons-outlined">bolt</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p class="bold-notifications-text">Quisque ligula dui,
                                                            tincidunt nec pharetra eu, fringilla quis mauris</p>
                                                        <small>18:00</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge bg-success text-white">
                                                            <i class="material-icons-outlined">alternate_email</i>
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Nulla id libero mattis justo euismod congue in et metus</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="{{ asset('b/images/avatars/avatar.png') }}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent sodales lobortis velit ac pellentesque</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notifications-dropdown-item">
                                                    <div class="notifications-dropdown-item-image">
                                                        <span class="notifications-badge">
                                                            <img src="{{ asset('b/images/avatars/avatar.png') }}"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <div class="notifications-dropdown-item-text">
                                                        <p>Praesent lacinia ante eget tristique mattis. Nam sollicitudin
                                                            velit sit amet auctor porta</p>
                                                        <small>yesterday</small>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            @yield('content')
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('b/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('b/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('b/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('b/plugins/perfectscroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('b/plugins/pace/pace.min.js') }}"></script>
    <script src="{{ asset('b/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('b/plugins/apexcharts/apexcharts.min.js') }}"></script>
    @yield('js')
    <script src="{{ asset('b/js/main.min.js') }}"></script>
    <script src="{{ asset('b/js/custom.js') }}"></script>
    @yield('script')
</body>

</html>
