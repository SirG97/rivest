<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
{{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="favicon.png" rel="shortcut icon">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
        <link href="{{ asset('bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/dropzone/dist/dropzone.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bower_components/slick-carousel/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('css/main.css?version=4.5.0') }}" rel="stylesheet">

        <!-- Scripts -->
{{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}
    </head>

    <body class="menu-position-side menu-side-left full-screen">

    <div class="all-wrapper solid-bg-all">
        <!--------------------
        START - Top Bar
        -------------------->
        <div class="top-bar color-scheme-bright">
            <div class="logo-w menu-size">
                <a class="logo" href="/">
                    <div class="logo-element"></div>
                    <div class="logo-label">
                        RIVEST BANK
                    </div>
                </a>
            </div>
{{--            <div class="fancy-selector-w">--}}
{{--                <div class="fancy-selector-current">--}}
{{--                    <div class="fs-img">--}}
{{--                        <img alt="" src="img/card1.png">--}}
{{--                    </div>--}}
{{--                    <div class="fs-main-info">--}}
{{--                        <div class="fs-name">--}}
{{--                            American Express Platinum--}}
{{--                        </div>--}}
{{--                        <div class="fs-sub">--}}
{{--                            <span>Balance:</span><strong>$5,304</strong>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="fs-extra-info">--}}
{{--                        <strong>5476</strong><span>ending</span>--}}
{{--                    </div>--}}
{{--                    <div class="fs-selector-trigger">--}}
{{--                        <i class="os-icon os-icon-arrow-down4"></i>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--               --}}
{{--            </div>--}}
            <!--------------------
            START - Top Menu Controls
            -------------------->
{{--            <div class="top-menu-controls">--}}

          <!--------------------
          START - User avatar and menu in secondary top menu
          -------------------->
{{--                <div class="logged-user-w">--}}
{{--                    <div class="logged-user-i">--}}
{{--                        <div class="avatar-w">--}}
{{--                            <img alt="" src="img/avatar1.jpg">--}}
{{--                        </div>--}}
{{--                        <div class="logged-user-menu color-style-bright">--}}
{{--                            <div class="logged-user-avatar-info">--}}
{{--                                <div class="avatar-w">--}}
{{--                                    <img alt="" src="img/avatar1.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="logged-user-info-w">--}}
{{--                                    <div class="logged-user-name">--}}
{{--                                        Maria Gomez--}}
{{--                                    </div>--}}
{{--                                    <div class="logged-user-role">--}}
{{--                                        Administrator--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="bg-icon">--}}
{{--                                <i class="os-icon os-icon-wallet-loaded"></i>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <!--------------------
                END - User avatar and menu in secondary top menu
                -------------------->
{{--            </div>--}}
            <!--------------------
            END - Top Menu Controls
            -------------------->
        </div>
        <!--------------------
        END - Top Bar
        -------------------->
{{--        <div class="search-with-suggestions-w">--}}
{{--            <div class="search-with-suggestions-modal">--}}
{{--                <div class="element-search">--}}
{{--                    <input class="search-suggest-input" placeholder="Start typing to search..." type="text">--}}
{{--                    <div class="close-search-suggestions">--}}
{{--                        <i class="os-icon os-icon-x"></i>--}}
{{--                    </div>--}}
{{--                    </input>--}}
{{--                </div>--}}
{{--                <div class="search-suggestions-group">--}}
{{--                    <div class="ssg-header">--}}
{{--                        <div class="ssg-icon">--}}
{{--                            <div class="os-icon os-icon-box"></div>--}}
{{--                        </div>--}}
{{--                        <div class="ssg-name">--}}
{{--                            Projects--}}
{{--                        </div>--}}
{{--                        <div class="ssg-info">--}}
{{--                            24 Total--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ssg-content">--}}
{{--                        <div class="ssg-items ssg-items-boxed">--}}
{{--                            <a class="ssg-item" href="users_profile_big.html">--}}
{{--                                <div class="item-media" style="background-image: url(img/company6.png)"></div>--}}
{{--                                <div class="item-name">--}}
{{--                                    Integ<span>ration</span> with API--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="users_profile_big.html">--}}
{{--                                <div class="item-media" style="background-image: url(img/company7.png)"></div>--}}
{{--                                <div class="item-name">--}}
{{--                                    Deve<span>lopm</span>ent Project--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="search-suggestions-group">--}}
{{--                    <div class="ssg-header">--}}
{{--                        <div class="ssg-icon">--}}
{{--                            <div class="os-icon os-icon-users"></div>--}}
{{--                        </div>--}}
{{--                        <div class="ssg-name">--}}
{{--                            Customers--}}
{{--                        </div>--}}
{{--                        <div class="ssg-info">--}}
{{--                            12 Total--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ssg-content">--}}
{{--                        <div class="ssg-items ssg-items-list">--}}
{{--                            <a class="ssg-item" href="users_profile_big.html">--}}
{{--                                <div class="item-media" style="background-image: url(img/avatar1.jpg)"></div>--}}
{{--                                <div class="item-name">--}}
{{--                                    John Ma<span>yer</span>s--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="users_profile_big.html">--}}
{{--                                <div class="item-media" style="background-image: url(img/avatar2.jpg)"></div>--}}
{{--                                <div class="item-name">--}}
{{--                                    Th<span>omas</span> Mullier--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="users_profile_big.html">--}}
{{--                                <div class="item-media" style="background-image: url(img/avatar3.jpg)"></div>--}}
{{--                                <div class="item-name">--}}
{{--                                    Kim C<span>olli</span>ns--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="search-suggestions-group">--}}
{{--                    <div class="ssg-header">--}}
{{--                        <div class="ssg-icon">--}}
{{--                            <div class="os-icon os-icon-folder"></div>--}}
{{--                        </div>--}}
{{--                        <div class="ssg-name">--}}
{{--                            Files--}}
{{--                        </div>--}}
{{--                        <div class="ssg-info">--}}
{{--                            17 Total--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="ssg-content">--}}
{{--                        <div class="ssg-items ssg-items-blocks">--}}
{{--                            <a class="ssg-item" href="#">--}}
{{--                                <div class="item-icon">--}}
{{--                                    <i class="os-icon os-icon-file-text"></i>--}}
{{--                                </div>--}}
{{--                                <div class="item-name">--}}
{{--                                    Work<span>Not</span>e.txt--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="#">--}}
{{--                                <div class="item-icon">--}}
{{--                                    <i class="os-icon os-icon-film"></i>--}}
{{--                                </div>--}}
{{--                                <div class="item-name">--}}
{{--                                    V<span>ideo</span>.avi--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="#">--}}
{{--                                <div class="item-icon">--}}
{{--                                    <i class="os-icon os-icon-database"></i>--}}
{{--                                </div>--}}
{{--                                <div class="item-name">--}}
{{--                                    User<span>Tabl</span>e.sql--}}
{{--                                </div>--}}
{{--                            </a><a class="ssg-item" href="#">--}}
{{--                                <div class="item-icon">--}}
{{--                                    <i class="os-icon os-icon-image"></i>--}}
{{--                                </div>--}}
{{--                                <div class="item-name">--}}
{{--                                    wed<span>din</span>g.jpg--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="ssg-nothing-found">--}}
{{--                            <div class="icon-w">--}}
{{--                                <i class="os-icon os-icon-eye-off"></i>--}}
{{--                            </div>--}}
{{--                            <span>No files were found. Try changing your query...</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="layout-w">
            <!--------------------
            START - Mobile Menu
            -------------------->
            <div class="menu-mobile menu-activated-on-click color-scheme-dark">
                <div class="mm-logo-buttons-w">
                    <a class="mm-logo" href="/"><img src="img/logo2.png"><span>Rivest Bank</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
                        <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div>
                    </div>
                </div>
                <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w">
                            <img alt="" src="img/avatar1.jpg">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                Maria Gomez
                            </div>
                            <div class="logged-user-role">
                                Administrator
                            </div>
                        </div>
                    </div>
                    <!--------------------
                    START - Mobile Menu List
                    -------------------->
                    <ul class="main-menu">
                        <li class="">
                            <a href="/dashboard">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layout"></div>
                                </div>
                                <span>Account Summary</span></a>

                        </li>
                        <li class="">
                            <a href="/profile">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div>
                                <span>Account Details</span></a>

                        </li>
                        <li class="">
                            <a href="/statement">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-file-text"></div>
                                </div>
                                <span>Account Statement</span></a>

                        </li>
                        <li class="">
                            <a href="/fund">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-wallet-loaded"></div>
                                </div>
                                <span>Fund Transfer</span></a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="/changepassword">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-lock"></div>
                                </div>
                                <span>Change Password</span></a>

                        </li>
                        <li class="has-sub-menu">
                            <a href="/changepin">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-fingerprint"></div>
                                </div>
                                <span>Change Pin</span></a>

                        </li>

                        <li class="has-sub-menu">
                            <a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-log-out"></div>
                                </div>
                                <span>Logout</span></a>

                        </li>
                    </ul>

                </div>
            </div>
            <!--------------------
            END - Mobile Menu
            -------------------->
            <!-------------------- START - Main Menu  -------------------->

            <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-light color-style-transparent sub-menu-color-bright menu-position-side menu-side-left menu-layout-full sub-menu-style-over">
                <div class="logged-user-w avatar-inline">
                    <div class="logged-user-i">
                        <div class="avatar-w">
                            <img alt="" src="img/avatar1.jpg">
                        </div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">
                                {{ auth()->user()->first_name . ' ' . auth()->user()->last_name}}
                            </div>

                        </div>
{{--                        <div class="logged-user-toggler-arrow">--}}
{{--                            <div class="os-icon os-icon-chevron-down"></div>--}}
{{--                        </div>--}}
{{--                        <div class="logged-user-menu color-style-bright">--}}
{{--                            <div class="logged-user-avatar-info">--}}
{{--                                <div class="avatar-w">--}}
{{--                                    <img alt="" src="img/avatar1.jpg">--}}
{{--                                </div>--}}
{{--                                <div class="logged-user-info-w">--}}
{{--                                    <div class="logged-user-name">--}}
{{--                                       {{ auth()->user()->first_name . ' ' . auth()->user()->last_name}}--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="bg-icon">--}}
{{--                                <i class="os-icon os-icon-wallet-loaded"></i>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
                </div>

                <h1 class="menu-page-header">
                    Account Details
                </h1>
                <ul class="main-menu">
                    <li class="sub-header">
                        <span>Account</span>
                    </li>
                    <li class="selected">
                        <a href="/dashboard">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div>
                            <span>Account Summary</span></a>

                    </li>
                    <li class="selected">
                        <a href="/profile">
                            <div class="icon-w">
                                <div class="os-icon os-icon-user"></div>
                            </div>
                            <span>Account Details</span></a>

                    </li>
                    <li class="">
                        <a href="/statement">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div>
                            <span>Account Statement</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="/fund">
                            <div class="icon-w">
                                <div class="os-icon os-icon-wallet-loaded"></div>
                            </div>
                            <span>Transfer</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">
                                Transfers
                            </div>
                            <div class="sub-menu-icon">
                                <i class="os-icon os-icon-layout"></i>
                            </div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/transfer/local">Domestic transfer</a>
                                    </li>
                                    <li>
                                        <a href="/transfer/inter-bank">Inter bank transfer</a>
                                    </li>
                                    <li>
                                        <a href="/transfer/international">Wire Transfer</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="/fund">
                            <div class="icon-w">
                                <div class="os-icon os-icon-finance-29"></div>
                            </div>
                            <span>Loan & Mortgages</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="/fund">
                            <div class="icon-w">
                                <div class="os-icon os-icon-coins-4"></div>
                            </div>
                            <span>Fixed Deposit</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="/fund">
                            <div class="icon-w">
                                <div class="os-icon os-icon-credit-card"></div>
                            </div>
                            <span>Virtual Card</span></a>
                    </li>
                    <li class="sub-header">
                        <span>Security</span>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="changepassword">
                            <div class="icon-w">
                                <div class="os-icon os-icon-lock"></div>
                            </div>
                            <span>Change Password</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="/changepin">
                            <div class="icon-w">
                                <div class="os-icon os-icon-fingerprint"></div>
                            </div>
                            <span>Change Pin</span></a>
                    </li>
                    <li class=" has-sub-menu">
                        <a href="{{ route('logout') }}" class="nav_link nav_flex" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="icon-w">
                                <div class="os-icon os-icon-log-out"></div>
                            </div>
                            <span>Logout</span></a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>

            </div>
            <!--------------------
            END - Main Menu
            -------------------->
            <div class="content-w">
                <div class="content-i">
                    <div class="content-box">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
        <div class="display-type"></div>
    </div>
    <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('bower_components/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('bower_components/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('bower_components/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-validator/dist/validator.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('bower_components/dropzone/dist/dropzone.js') }}"></script>
    <script src="{{ asset('bower_components/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('bower_components/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ asset('bower_components/slick-carousel/slick/slick.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/alert.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/button.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/carousel.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/collapse.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/dropdown.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/modal.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/tab.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/tooltip.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/js/dist/popover.js') }}"></script>
    <script src="{{ asset('js/demo_customizer.js?version=4.5.0') }}"></script>
    <script src="{{ asset('js/main.js?version=4.5.0') }}"></script>
    <script src="{{ asset('js/validation.js') }}"></script>
    </body>
{{--    <body class="font-sans antialiased">--}}
{{--        <div class="min-h-screen bg-gray-100">--}}
{{--            @include('layouts.navigation')--}}

{{--            <!-- Page Heading -->--}}
{{--            <header class="bg-white shadow">--}}
{{--                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
{{--                    {{ $header }}--}}
{{--                </div>--}}
{{--            </header>--}}

{{--            <!-- Page Content -->--}}
{{--            <main>--}}
{{--                {{ $slot }}--}}
{{--            </main>--}}
{{--        </div>--}}
{{--    </body>--}}
</html>
