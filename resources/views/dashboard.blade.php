<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Wisuda Digital UNJ</title>

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
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
                                            src="{{ asset('front/img/mockups/img3.png') }}" alt="Image Description">
                                        <img class="img-fluid u-search-push-top__banner-img"
                                            src="{{ asset('front/img/mockups/img2.png') }}" alt="Image Description">
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
                    <a class="d-flex align-items-center mb-3" href="/admin" aria-label="Front">
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
                                <img class="img-fluid rounded-circle" src="{{ asset('img/foto_admin.png') }}"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                <h1 class="h3 text-white font-weight-medium mb-1">Halo, Admin!</h1>
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
                                            <a class="nav-link u-header__nav-link" href="/admin">Dashboard</a>
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
                        {{-- <a class="btn btn-sm btn-soft-white transition-3d-hover" href="#requestPaymentModal"
                            data-modal-target="#requestPaymentModal">
                            <span class="fas fa-plus small mr-2"></span>
                            Request a Payment
                        </a> --}}
                        <form action="{{ route('logout') }}" method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-sm btn-danger transition-3d-hover">Logout</button>
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

                <!-- Title -->
                {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="h6 mb-0">Peserta photoshoot wisuda UNJ</h3> --}}
                {{-- <a class="link-muted" href="#">View All</a> --}}
                {{-- </div> --}}
                <!-- End Title -->

                <!-- Earning Sources -->
                <div class="mb-3">
                    <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle" src="{{ asset('img/LogoFMIPA.png')}}"
                                        alt="Image Description"> --}}
                                        <i style="color: #8033E6;" class="fas fa-flask fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FMIPA</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 1)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFT.png')}}" alt="Image Description"> --}}
                                        <i style="color: #0082D9;" class="fas fa-wrench fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FT</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 2)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFIO.png')}}" alt="Image Description"> --}}
                                        <i style="color: black;" class="fas fa-volleyball-ball fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FIO</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 3)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFIS.png')}}" alt="Image Description"> --}}
                                        <i style="color: #F20000;" class="fas fa-user fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FIS</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 4)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFBS.png')}}" alt="Image Description"> --}}
                                        <i style="color: #FFB3FF;" class="fas fa-book fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FBS</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 5)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoPsikologi.png')}}" alt="Image Description"> --}}
                                        <i style="color: lightblue;" class="fas fa-brain fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">Psikologi</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 6)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->
                    </div>

                    <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFIP.png')}}" alt="Image Description"> --}}
                                        <i style="color: #99FF33;" class="fas fa-school fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FIP</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 7)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoFE.png')}}" alt="Image Description"> --}}
                                        <i style="color: #FF00FF;" class="fas fa-coins fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">FE</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 8)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->

                        <!-- Card -->
                        <div class="card card-frame mb-3">
                            <a class="card-body p-4" href="#">
                                <div class="media align-items-center">
                                    <div class="u-avatar mr-3">
                                        {{-- <img class="img-fluid rounded-circle"
                                            src="{{ asset('img/LogoPasca.png')}}" alt="Image Description"> --}}
                                        <i style="color: #E68A17;" class="fas fa-graduation-cap fa-3x"></i>
                                    </div>
                                    <div class="media-body">
                                        <span class="text-dark">Pasca</span>
                                        <small class="d-block text-secondary"> </small>
                                    </div>
                                    <div class="media-body text-right">
                                        <span class="text-primary ml-3">
                                            {{ $pendaftaran->where('fakultas_id', 9)->count() }}
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <!-- End Earning Sources -->

                {{-- tab nav --}}
                <div class="card mb-6">
                    <div class="card-header py-4 px-0 mx-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                              <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">Home</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                              <a class="nav-link active" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="true">Contact</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
                                {{-- double tab nav --}}
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item waves-effect waves-light">
                                      <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false">home2</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                      <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false">profile2</a>
                                    </li>
                                    <li class="nav-item waves-effect waves-light">
                                      <a class="nav-link active" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="true">contact2</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">Raw denim you
                                      probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master
                                      cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh
                                      dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia
                                      cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</div>
                                    <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">Food truck fixie
                                      locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog
                                      sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                      booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
                                      nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero
                                      magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean
                                      shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher
                                      vero sint qui sapiente accusamus tattooed echo park.</div>
                                    <div class="tab-pane fade active show" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">Etsy mixtape wayfarers,
                                      ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi
                                      farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore
                                      carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                                      pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk
                                      vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork
                                      sustainable tofu synth chambray yr.</div>
                                  </div>
                                {{-- selesai double tab nav --}}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                              locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog
                              sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                              booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo
                              nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero
                              magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean
                              shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher
                              vero sint qui sapiente accusamus tattooed echo park.</div>
                            <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape wayfarers,
                              ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi
                              farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore
                              carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                              pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk
                              vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork
                              sustainable tofu synth chambray yr.</div>
                          </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Content Section -->
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

    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>

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

        $('.table_admin').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });

    </script>
</body>

</html>
