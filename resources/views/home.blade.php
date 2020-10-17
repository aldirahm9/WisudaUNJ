<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Home - Photoshoot Wisuda UNJ</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('logounj.png') }}">

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('front/vendor/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/custombox/dist/custombox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/hs-megamenu/src/hs.megamenu.css') }}">
    <link rel="stylesheet"
        href="{{ asset('front/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/flatpickr/dist/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
    <style>
           .text-unj {
          color: #006f45 !important;
      }
    </style>
</head>

<body class="u-custombox-no-scroll">
    <!-- ========== HEADER ========== -->
    <header id="header" class="u-header">
        <!-- Search -->
        <div id="searchPushTop" class="u-search-push-top">
            <div class="container position-relative">
                <div class="u-search-push-top__content">
                    <!-- Close Button -->
                    <button type="button" class="close u-search-push-top__close-btn" aria-haspopup="true"
                        aria-expanded="false" aria-controls="searchPushTop" data-unfold-type="jquery-slide"
                        data-unfold-target="#searchPushTop">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- End Close Button -->

                    <!-- Input -->
                    <form class="js-focus-state input-group input-group-lg">
                        <input type="search" class="form-control" placeholder="Search Front" aria-label="Search Front">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                    <!-- End Input -->

                    <!-- Content -->
                    <div class="row d-none d-md-flex mt-7">
                        <div class="col-sm-6">
                            <strong class="d-block mb-2">Quick Links</strong>

                            <div class="row">
                                <!-- List Group -->
                                <div class="col-6">
                                    <div
                                        class="list-group list-group-transparent list-group-flush list-group-borderless">
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Search Results List
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Search Results Grid
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            About
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Services
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Invoice
                                        </a>
                                    </div>
                                </div>
                                <!-- End List Group -->

                                <!-- List Group -->
                                <div class="col-6">
                                    <div
                                        class="list-group list-group-transparent list-group-flush list-group-borderless">
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Profile
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            User Contacts
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Reviews
                                        </a>
                                        <a class="list-group-item list-group-item-action" href="#">
                                            <span class="fas fa-angle-right list-group-icon"></span>
                                            Settings
                                        </a>
                                    </div>
                                </div>
                                <!-- End List Group -->
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <!-- Banner -->
                            <div class="rounded u-search-push-top__banner">
                                <div class="d-flex align-items-center">
                                    <div class="u-search-push-top__banner-container">
                                        <img class="img-fluid u-search-push-top__banner-img"
                                            src="{{ asset('front/img/mockups/img3.png" alt="Image Description') }}">
                                        <img class="img-fluid u-search-push-top__banner-img"
                                            src="{{ asset('front/img/mockups/img2.png" alt="Image Description') }}">
                                    </div>

                                    <div>
                                        <div class="mb-4">
                                            <strong class="d-block mb-2">Featured Item</strong>
                                            <p>Create astonishing web sites and pages.</p>
                                        </div>
                                        <a class="btn btn-xs btn-soft-success transition-3d-hover"
                                            href="index.html">Apply Now <span
                                                class="fas fa-angle-right ml-2"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!-- End Banner -->
                        </div>
                    </div>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!-- End Search -->

        <div class="u-header__section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space mt-5">
                    <!-- Logo -->
                    <a class="d-flex align-items-center mb-3" href="/home" aria-label="Front">
                        <img src="{{ asset('logounj.png') }}" alt="logo UNJ" style="height:36px; width:auto;">
                        <span class="text-unj ml-2">Photoshoot Wisuda UNJ</span>
                    </a>
                    <!-- End Logo -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Breadcrumb Section -->
        <div class="bg-primary">
            <div class="container space-top-1 pb-3">
                <div class="row">
                    <div class="col-lg-5 order-lg-2 text-lg-right mb-4 mb-lg-0">
                        <div
                            class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
                            <!-- Breadcrumb -->
                            <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                            <!-- End Breadcrumb -->

                            <!-- Breadcrumb Nav Toggle Button -->
                            <div class="d-lg-none">
                                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                                    aria-label="Toggle navigation" aria-expanded="false"
                                    aria-controls="breadcrumbNavBar" data-toggle="collapse"
                                    data-target="#breadcrumbNavBar">
                                    <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                                        <span class="u-hamburger__inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- End Breadcrumb Nav Toggle Button -->
                        </div>
                    </div>

                    <div class="col-lg-7 order-lg-1">
                        <!-- User Info -->
                        <div class="media d-block d-sm-flex align-items-sm-center">
                            <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                                <img class="img-fluid rounded-circle" src="{{ asset('img/foto_wisudawan.png') }}"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Halo,
                                    {{ Auth::user()->pendaftaran->nama_mahasiswa}}!</h1>
                                <span class="d-block text-white">{{ Auth::user()->nrm}}</span>
                            </div>
                        </div>
                        <!-- End User Info -->
                    </div>
                </div>
            </div>

            <div class="container space-bottom-1 space-bottom-lg-0">
                <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
                    <!-- Navbar -->
                    <div
                        class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
                        <div class="u-header__section bg-transparent">
                            <nav
                                class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                                <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                                    <ul class="navbar-nav u-header__navbar-nav">
                                        <!-- General -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="generalDropdown" class="nav-link u-header__nav-link" href="/"
                                                aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="generalDropdownMenu">
                                                Home
                                            </a>
                                        </li>
                                        <!-- General -->

                                        <!-- Others -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="/home">Dashboard</a>
                                        </li>
                                        <!-- Others -->
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <!-- End Navbar -->

                    <div class="ml-lg-auto">
                        <!-- Button -->
                        <form action="{{ route('logout') }}" method="post">
                            {{ csrf_field() }}
                            <button type="submit"
                                class="btn btn-sm btn-danger transition-3d-hover">Logout</button>
                        </form>
                        <!-- End Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->

        <!-- Content Section -->
        <div class="bg-light">
            <div class="container space-2">
                <div class="card card-frame card-frame-highlighted mb-6">
                    <div class="card-header py-4 px-0 mx-4">
                        <!-- Title -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="h4 mb-0"><i class="fa fa-user-circle text-unj" aria-hidden="true"></i> Profil</h3>
                            <h3 class="h6 mb-0">
                            <a href="{{URL::to('/pdf')}}" type="button" class="btn btn-success btn-pill transition-3d-hover">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                Print Bukti Pendaftaran
                            </a>
                            </h3>
                            {{-- <a class="link-muted" href="#">View All</a> --}}
                        </div>
                        <div class="row mb-5">
                            <div class="h6 col-3">Nama</div>
                            <div class="h6 col-0">:</div>
                            <div class="h6 col-8">{{ Auth::user()->pendaftaran->nama_mahasiswa }}</div>

                            <div class="h6 col-3">NRM</div>
                            <div class="h6 col-0">:</div>
                            <div class="h6 col-8">{{ Auth::user()->nrm }}</div>

                            <div class="h6 col-3">Fakultas</div>
                            <div class="h6 col-0">:</div>
                            <div class="h6 col-8">{{ Auth::user()->pendaftaran->fakultas->nama_fakultas }}</div>

                            <div class="h6 col-3 mb-5">Tanggal Foto</div>
                            <div class="h6 col-0">:</div>
                            <div class="h6 col-8">{{ \Carbon\Carbon::parse(Auth::user()->pendaftaran->slot->tanggal)->translatedFormat('l, d F Y') }}</div>

                            <div class="h6 col-8">
                            <form class="js-validate mt-3" action="/" method="POST" id="formRegister">
                                {{csrf_field()}}
                                <div class="row">
                                    <!-- Form Group -->
                                    <div class="h6 col-12">
                                        Ganti Tanggal:
                                    </div>
                                    <div class="js-form-message form-group col-md-6">
                                        <input type="text" class="form-control" name="tanggal_kedatangan" id="signinSrTanggal" placeholder="Tanggal kedatangan" aria-label="TANGGAL_KEDATANGAN" required
                                            data-msg="Tanggal harus diisi"
                                            data-error-class="u-has-error"
                                            data-success-class="u-has-success" disabled
                                            onkeypress="return false"
                                            autocomplete="off">
                                    </div>
                                    <div class="col-6 text-lefth-btm">
                                        <button type="submit" class="btn btn-primary transition-3d-hover">Ubah</button>
                                    </div>
                                    <!-- End Form Group -->
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Section -->
        <!-- pdf -->
        <div class="html-content"></div>
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="container space-top-2 space-top-md-3">
        <div class="border-bottom">
            <div class="row mb-7">
                <div class="col-lg-4 mb-7 mb-lg-0">
                    <div class="d-inline-flex align-self-start flex-column h-100">
                        <!-- Logo -->
                        <a class="d-flex align-items-center mb-3" href="index.html" aria-label="Front">
                            <img src="{{ asset('logounj.png') }}" alt="logo UNJ" style="height:36px; width:auto;">
                            <span class="text-unj ml-2">Photoshoot Wisuda UNJ</span>
                        </a>
                        <!-- End Logo -->

                        <!-- Country -->
                        <div class="position-relative">
                            <span id="footerCountryInvoker" class="dropdown-nav-link" aria-controls="footer-country"
                                aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                                data-unfold-event="click" data-unfold-target="#footer-country"
                                data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300"
                                data-unfold-hide-on-scroll="false" data-unfold-animation-in="slideInUp"
                                data-unfold-animation-out="fadeOut">
                                <img class="dropdown-item-icon"
                                    src="{{ asset('front/vendor/flag-icon-css/flags/4x3/id.svg') }}"
                                    alt="United States Flag">
                                <span>Indonesia</span>
                            </span>
                        </div>
                        <!-- End Country -->
                    </div>
                </div>

                <div class="col-sm-4 col-md-3 col-lg-4 mb-4 mb-md-0">
                    <h4 class="h6 font-weight-semi-bold">Website Resmi UNJ</h4>

                    <!-- List Group -->
                    <ul class="list-group list-group-flush list-group-borderless mb-0">
                        <li><a class="list-group-item list-group-item-action" href="http://www.unj.ac.id/">Beranda</a>
                        </li>
                        <li><a class="list-group-item list-group-item-action"
                                href="http://www.unj.ac.id/category/berita/">Berita</a></li>
                        <li><a class="list-group-item list-group-item-action" href="http://siakad.unj.ac.id/">Siakad</a>
                        </li>
                        <li><a class="list-group-item list-group-item-action"
                                href="http://journal.unj.ac.id/">Jurnal</a></li>
                    </ul>
                    <!-- End List Group -->
                </div>

                <div class="col-md-3 col-lg-3">
                    <h4 class="h6 font-weight-semi-bold">Kontak</h4>

                    <!-- Address -->
                    <address>
                        <ul class="list-group list-group-flush list-group-borderless mb-0">
                            <li class="list-group-item">Telp: (021) 4898486</li>
                            <li class="list-group-item">
                                Email: <a href="mailto:humas@unj.ac.id">humas@unj.ac.id</a>
                            </li>
                            <li class="list-group-item">Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun, Pulo Gadung, Kota
                                Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</li>
                        </ul>
                    </address>
                    <!-- End Address -->
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center py-7">
            <!-- Copyright -->
            <p class="small text-muted mb-0">&copy; Digiteam UNJ. {{ date('Y') }} Jakarta.</p>
            <!-- End Copyright -->

            <!-- Social Networks -->
            <ul class="list-inline mb-0">
                <li class="list-inline-item">
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent"
                        href="https://www.facebook.com/OfficialUNJ/">
                        <span class="fab fa-facebook-f btn-icon__inner"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent"
                        href="https://www.youtube.com/channel/UCEbRyX261ttaaW_6-EjTUWA">
                        <span class="fab fa-youtube btn-icon__inner"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent"
                        href="https://twitter.com/UNJ_Official">
                        <span class="fab fa-twitter btn-icon__inner"></span>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent"
                        href="https://www.instagram.com/unj_official/">
                        <span class="fab fa-instagram btn-icon__inner"></span>
                    </a>
                </li>
            </ul>
            <!-- End Social Networks -->
        </div>
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- JS Global Compulsory -->
    <script src="{{ asset('front/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('front/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('front/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap/bootstrap.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('front/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
    <script src="{{ asset('front/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
    <script src="{{ asset('front/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}">
    </script>
    <script src="{{ asset('front/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/vendor/custombox/dist/custombox.min.js') }}"></script>
    <script src="{{ asset('front/vendor/custombox/dist/custombox.legacy.min.js') }}"></script>
    <script src="{{ asset('front/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('front/vendor/appear.js') }}"></script>
    <script src="{{ asset('front/vendor/circles/circles.min.js') }}"></script>
    <script src="{{ asset('front/vendor/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('front/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('front/js/hs.core.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.header.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.unfold.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.malihu-scrollbar.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.focus-state.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.validation.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.modal-window.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.step-form.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.show-animation.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.range-datepicker.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.chart-pie.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.progress-bar.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.svg-injector.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.go-to.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.selectpicker.js') }}"></script>
    <script src="{{ asset('front/js/components/hs.datatables.js') }}"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(window).on('load', function () {
            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 767.98,
                hideTimeOut: 0
            });

            // initialization of HSMegaMenu component
            $('.js-breadcrumb-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991.98,
                hideTimeOut: 0
            });

            // initialization of svg injector module
            $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
        });

        $(document).on('ready', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#header'));

            // initialization of unfold component
            $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                afterOpen: function () {
                    $(this).find('input[type="search"]').focus();
                }
            });

            // initialization of malihu scrollbar
            $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

            // initialization of forms
            $.HSCore.components.HSFocusState.init();

            // initialization of form validation
            $.HSCore.components.HSValidation.init('.js-validate');

            // initialization of autonomous popups
            $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-modal-window', {
                autonomous: true
            });

            // initialization of step form
            $.HSCore.components.HSStepForm.init('.js-step-form');

            // initialization of show animations
            $.HSCore.components.HSShowAnimation.init('.js-animation-link');

            // initialization of range datepicker
            $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

            // initialization of chart pies
            var items = $.HSCore.components.HSChartPie.init('.js-pie');

            // initialization of horizontal progress bars
            var horizontalProgressBars = $.HSCore.components.HSProgressBar.init('.js-hr-progress', {
                direction: 'horizontal',
                indicatorSelector: '.js-hr-progress-bar'
            });

            var verticalProgressBars = $.HSCore.components.HSProgressBar.init('.js-vr-progress', {
                direction: 'vertical',
                indicatorSelector: '.js-vr-progress-bar'
            });

            // initialization of datatables
            $.HSCore.components.HSDatatables.init('.js-datatable');

            // initialization of select picker
            $.HSCore.components.HSSelectPicker.init('.js-select');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

    </script>
    @include('sweetalert::alert')
</body>

</html>
