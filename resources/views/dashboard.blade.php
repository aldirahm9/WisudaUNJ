<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Photoshoot Wisuda UNJ</title>

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
            <!-- Topbar -->
            <div class="container u-header__hide-content pt-2">
                <div class="d-flex align-items-center">
                    <!-- Language -->
                    <div class="position-relative">
                        <a id="languageDropdownInvoker"
                            class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
                            role="button" aria-controls="languageDropdown" aria-haspopup="true" aria-expanded="false"
                            data-unfold-event="hover" data-unfold-target="#languageDropdown"
                            data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300"
                            data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                            data-unfold-animation-out="fadeOut">
                            <img class="dropdown-item-icon"
                                src="{{ asset('front/flag-icon-css/flags/4x3/us.svg" alt="SVG') }}">
                            <span class="d-inline-block d-sm-none">US</span>
                            <span class="d-none d-sm-inline-block">United States</span>
                        </a>

                        <div id="languageDropdown" class="dropdown-menu dropdown-unfold"
                            aria-labelledby="languageDropdownInvoker">
                            <a class="dropdown-item active" href="#">English</a>
                            <a class="dropdown-item" href="#">Deutsch</a>
                            <a class="dropdown-item" href="#">Español‎</a>
                        </div>
                    </div>
                    <!-- End Language -->

                    <div class="ml-auto">
                        <!-- Jump To -->
                        <div class="d-inline-block d-sm-none position-relative mr-2">
                            <a id="jumpToDropdownInvoker"
                                class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;"
                                role="button" aria-controls="jumpToDropdown" aria-haspopup="true" aria-expanded="false"
                                data-unfold-event="hover" data-unfold-target="#jumpToDropdown"
                                data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-delay="300"
                                data-unfold-hide-on-scroll="true" data-unfold-animation-in="slideInUp"
                                data-unfold-animation-out="fadeOut">
                                Jump to
                            </a>

                            <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold"
                                aria-labelledby="jumpToDropdownInvoker">
                                <a class="dropdown-item" href="../pages/help.html">Help</a>
                                <a class="dropdown-item" href="../pages/contacts-agency.html">Contacts</a>
                            </div>
                        </div>
                        <!-- End Jump To -->

                        <!-- Links -->
                        <div class="d-none d-sm-inline-block ml-sm-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-0">
                                    <a class="u-header__navbar-link" href="../pages/help.html">Help</a>
                                </li>
                                <li class="list-inline-item mr-0">
                                    <a class="u-header__navbar-link" href="../pages/contacts-agency.html">Contacts</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Links -->
                    </div>

                    <ul class="list-inline ml-2 mb-0">
                        <!-- Search -->
                        <li class="list-inline-item">
                            <a class="btn btn-xs btn-icon btn-text-secondary" href="javascript:;" role="button"
                                aria-haspopup="true" aria-expanded="false" aria-controls="searchPushTop"
                                data-unfold-type="jquery-slide" data-unfold-target="#searchPushTop">
                                <span class="fas fa-search btn-icon__inner"></span>
                            </a>
                        </li>
                        <!-- End Search -->

                        <!-- Shopping Cart -->
                        <li class="list-inline-item position-relative">
                            <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-secondary"
                                href="javascript:;" role="button" aria-controls="shoppingCartDropdown"
                                aria-haspopup="true" aria-expanded="false" data-unfold-event="hover"
                                data-unfold-target="#shoppingCartDropdown" data-unfold-type="css-animation"
                                data-unfold-duration="300" data-unfold-delay="300" data-unfold-hide-on-scroll="true"
                                data-unfold-animation-in="slideInUp" data-unfold-animation-out="fadeOut">
                                <span class="fas fa-shopping-cart btn-icon__inner"></span>
                            </a>

                            <div id="shoppingCartDropdown"
                                class="dropdown-menu dropdown-unfold dropdown-menu-right text-center p-7"
                                aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px;">
                                <span class="btn btn-icon btn-soft-primary rounded-circle mb-3">
                                    <span class="fas fa-shopping-basket btn-icon__inner"></span>
                                </span>
                                <span class="d-block">Your Cart is Empty</span>
                            </div>
                        </li>
                        <!-- End Shopping Cart -->

                        <!-- Account Login -->
                        <li class="list-inline-item">
                            <!-- Account Sidebar Toggle Button -->
                            <a id="sidebarNavToggler"
                                class="btn btn-xs btn-text-secondary u-sidebar--account__toggle-bg ml-1"
                                href="javascript:;" role="button" aria-controls="sidebarContent" aria-haspopup="true"
                                aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent" data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInRight" data-unfold-animation-out="fadeOutRight"
                                data-unfold-duration="500">
                                <span class="position-relative">
                                    @if (Auth() -> user() -> isAdmin())
                                    <span class="u-sidebar--account__toggle-text">Admin</span>
                                    @else
                                    <span
                                        class="u-sidebar--account__toggle-text">{{ Auth::user()->pendaftaran->nama_mahasiswa}}</span>
                                    @endif
                                    <img class="u-sidebar--account__toggle-img"
                                        src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
                                    <span class="badge badge-sm badge-success badge-pos rounded-circle">3</span>
                                </span>
                            </a>
                            <!-- End Account Sidebar Toggle Button -->
                        </li>
                        <!-- End Account Login -->
                    </ul>
                </div>
            </div>
            <!-- End Topbar -->

            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                    <!-- Logo -->
                    <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                        href="../home/index.html" aria-label="Front">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve"
                            style="margin-bottom: 0;">
                            <path fill="#3F7DE0" opacity=".65"
                                d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z" />
                            <path class="fill-info" opacity=".5"
                                d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z" />
                            <path class="fill-primary" opacity=".7"
                                d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z" />
                            <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z" />
                        </svg>
                        <span class="u-header__navbar-brand-text">Front</span>
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation"
                        aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger" class="u-hamburger__box">
                            <span class="u-hamburger__inner"></span>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                        <ul class="navbar-nav u-header__navbar-nav">
                            <!-- Home -->
                            <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut" data-position="left">
                                <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                                <!-- Home - Mega Menu -->
                                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-lg-6">
                                            <!-- Banner Image -->
                                            <div class="u-header__banner"
                                                style="background-image: url({{ asset('front/img/750x750/img1.jpg') }});">
                                                <div class="u-header__banner-content">
                                                    <div class="mb-4">
                                                        <span class="u-header__banner-title">Branding Works</span>
                                                        <p class="u-header__banner-text">Experience a level of our
                                                            quality in both design &amp; customization works.</p>
                                                    </div>
                                                    <a class="btn btn-primary btn-sm transition-3d-hover" href="#">Learn
                                                        More <span class="fas fa-angle-right ml-2"></span></a>
                                                </div>
                                            </div>
                                            <!-- End Banner Image -->
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="row u-header__mega-menu-wrapper">
                                                <div class="col-sm-6 mb-3 mb-sm-0">
                                                    <span class="u-header__sub-menu-title">Classic</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/index.html">Classic Agency</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/classic-business.html">Classic
                                                                Business</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/classic-marketing.html">Classic
                                                                Marketing</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/classic-consulting.html">Classic
                                                                Consulting</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/classic-start-up.html">Classic Start-up
                                                                <span
                                                                    class="badge badge-success badge-primary ml-1">New</span></a>
                                                        </li>
                                                    </ul>

                                                    <span class="u-header__sub-menu-title">Corporate</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/corporate-agency.html">Corporate
                                                                Agency</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/corporate-start-up.html">Corporate
                                                                Start-Up</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/corporate-business.html">Corporate
                                                                Business</a></li>
                                                    </ul>
                                                </div>

                                                <div class="col-sm-6">
                                                    <span class="u-header__sub-menu-title">Onepages</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/onepage-creative.html">Onepage Creative
                                                                <span
                                                                    class="badge badge-success badge-primary ml-1">New</span></a>
                                                        </li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/onepage-saas.html">Onepage SaaS <span
                                                                    class="badge badge-success badge-primary ml-1">New</span></a>
                                                        </li>
                                                    </ul>

                                                    <span class="u-header__sub-menu-title">Blog</span>
                                                    <ul class="u-header__sub-menu-nav-group mb-3">
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/blog-agency.html">Blog Agency</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/blog-start-up.html">Blog Start-Up</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/blog-business.html">Blog Business</a></li>
                                                    </ul>

                                                    <span class="u-header__sub-menu-title">Portfolio</span>
                                                    <ul class="u-header__sub-menu-nav-group">
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/portfolio-agency.html">Portfolio
                                                                Agency</a></li>
                                                        <li><a class="nav-link u-header__sub-menu-nav-link"
                                                                href="../home/portfolio-profile.html">Portfolio
                                                                Profile</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Home - Mega Menu -->
                            </li>
                            <!-- End Home -->

                            <!-- Pages -->
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="pagesSubMenu">Pages</a>

                                <!-- Pages - Submenu -->
                                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu"
                                    aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                                    <!-- Account -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesAccount"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesAccount">Account</a>

                                        <ul id="navSubmenuPagesAccount" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="dashboard.html">Dashboard</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="profile.html">Profile</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link" href="my-tasks.html">My
                                                    tasks</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="projects.html">Projects</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="members.html">Members</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="edit-profile.html">Edit profile</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="change-password.html">Change password</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="notifications.html">Notifications</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="activity.html">Activity</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="payment-methods.html">Payment methods</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="invite-friends.html">Invite friends</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="plans.html">Plans</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="api-token.html">API Token</a></li>
                                        </ul>
                                    </li>
                                    <!-- End Account -->

                                    <!-- Portfolio -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesPortfolio"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                                        <ul id="navSubmenuPagesPortfolio" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/boxed-classic.html">All layouts</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/case-studies-simple.html">Case Studies Simple</a>
                                            </li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/case-studies-modern.html">Case Studies Modern</a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/single-page-simple.html">Single Page Simple</a>
                                            </li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/single-page-grid.html">Single Page Grid</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../portfolio/single-page-masonry.html">Single Page Masonry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- End Portfolio -->

                                    <!-- About -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesAbout"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesAbout">About</a>

                                        <ul id="navSubmenuPagesAbout" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesAbout" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/about-agency.html">About Agency</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/about-start-up.html">About Start-Up</a></li>
                                        </ul>
                                    </li>
                                    <!-- About -->

                                    <!-- Services -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesServices"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesServices">Services</a>

                                        <ul id="navSubmenuPagesServices" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesServices" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/services-agency.html">Services Agency</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/services-start-up.html">Services Start-Up</a></li>
                                        </ul>
                                    </li>
                                    <!-- Services -->

                                    <!-- Careers -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesCareers"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesCareers">Careers</a>

                                        <ul id="navSubmenuPagesCareers" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesCareers" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/careers.html">Careers</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/careers-single.html">Careers Single</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/hire-us.html">Hire Us</a></li>
                                        </ul>
                                    </li>
                                    <!-- Careers -->

                                    <!-- Login -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesLogin"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                                        <ul id="navSubmenuPagesLogin" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/login.html">Login</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/signup.html">Signup</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/recover-account.html">Recover Account</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/login-simple.html">Login Simple</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/signup-simple.html">Signup Simple</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/recover-account-simple.html">Recover Account
                                                    Simple</a></li>
                                        </ul>
                                    </li>
                                    <!-- Signup -->

                                    <!-- Contacts -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkContactsServices"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuContactsServices">Contacts</a>

                                        <ul id="navSubmenuContactsServices" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkContactsServices" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/contacts-agency.html">Contacts Agency</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/contacts-start-up.html">Contacts Start-Up</a></li>
                                        </ul>
                                    </li>
                                    <!-- Contacts -->

                                    <!-- Utilities -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesUtilities"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesUtilities">Utilities</a>

                                        <ul id="navSubmenuPagesUtilities" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/help.html">Help</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/help-article.html">Help article</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/faq.html">FAQ</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/pricing.html">Pricing</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/invoice.html">Invoice</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/terms.html">Terms &amp; Conditions</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/privacy.html">Privacy &amp; Policy</a></li>
                                        </ul>
                                    </li>
                                    <!-- Utilities -->

                                    <!-- Specialty -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkPagesSpecialty"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                                        <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/cover-page.html">Cover Page</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/coming-soon.html">Coming Soon</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/maintenance-mode.html">Maintenance Mode</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../pages/error-404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <!-- Specialty -->
                                </ul>
                                <!-- End Pages - Submenu -->
                            </li>
                            <!-- End Pages -->

                            <!-- Blog -->
                            <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut">
                                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                    aria-labelledby="blogSubMenu">Blog</a>

                                <!-- Blog - Submenu -->
                                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu"
                                    aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                    <!-- Classic -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogClassic"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogClassic">Classic</a>

                                        <ul id="navSubmenuBlogClassic" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogClassic" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/classic-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/classic-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/classic-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <!-- Classic -->

                                    <!-- Grid -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogGrid"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogGrid">Grid</a>

                                        <ul id="navSubmenuBlogGrid" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogGrid" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/grid-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/grid-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/grid-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <!-- Grid -->

                                    <!-- List -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogList"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogList">List</a>

                                        <ul id="navSubmenuBlogList" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogList" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/list-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/list-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/list-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <!-- List -->

                                    <!-- Modern -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogCard"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogCard">Modern</a>

                                        <ul id="navSubmenuBlogCard" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogCard" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/modern-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/modern-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/modern-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <!-- Grid Modern -->

                                    <!-- Masonry -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogGridMinimal"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogGridMinimal">Masonry</a>

                                        <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogGridMinimal" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/masonry-left-sidebar.html">Left Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/masonry-right-sidebar.html">Right Sidebar</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/masonry-full-width.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                    <!-- Masonry -->

                                    <!-- Single Article -->
                                    <li class="hs-has-sub-menu">
                                        <a id="navLinkBlogGridMasonry"
                                            class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle"
                                            href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                            aria-controls="navSubmenuBlogGridMasonry">Single Article</a>

                                        <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu u-header__sub-menu"
                                            aria-labelledby="navLinkBlogGridMasonry" style="min-width: 230px;">
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/single-article-classic.html">Classic</a></li>
                                            <li><a class="nav-link u-header__sub-menu-nav-link"
                                                    href="../blog/single-article-simple.html">Simple</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Article -->
                                </ul>
                                <!-- End Submenu -->
                            </li>
                            <!-- End Blog -->

                            <!-- Shop -->
                            <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="440px"
                                data-position="right">
                                <a id="shopMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                                <!-- Shop - Mega Menu -->
                                <div class="hs-mega-menu u-header__sub-menu u-header__mega-menu-position-right-fix--md"
                                    aria-labelledby="shopMegaMenu">
                                    <div class="u-header__mega-menu-wrapper">
                                        <span class="u-header__sub-menu-title">Shop Elements</span>

                                        <div class="row">
                                            <div class="col-sm-6">
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link"
                                                            href="../shop/classic.html">Classic</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link"
                                                            href="../shop/masonry.html">Masonry</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link"
                                                            href="../shop/single-product.html">Single Product</a></li>
                                                </ul>
                                            </div>

                                            <div class="col-sm-6">
                                                <ul class="u-header__sub-menu-nav-group">
                                                    <li><a class="nav-link u-header__sub-menu-nav-link"
                                                            href="../shop/cart.html">Cart</a></li>
                                                    <li><a class="nav-link u-header__sub-menu-nav-link"
                                                            href="../shop/checkout.html">Checkout</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Mega Menu Banner -->
                                    <div class="u-header__product-banner">
                                        <div class="d-flex align-items-end">
                                            <img class="img-fluid mr-4" src="{{ asset('front/img/mockups/img4.png') }}"
                                                alt="Image Description">
                                            <div class="u-header__product-banner-content">
                                                <div class="mb-4">
                                                    <span class="u-header__product-banner-title">Win T-shirt</span>
                                                    <p class="u-header__product-banner-text">Win one of our Front brand
                                                        T-shirts.</p>
                                                </div>
                                                <a class="btn btn-sm btn-soft-primary transition-3d-hover"
                                                    href="../shop/classic.html">Learn More <span
                                                        class="fas fa-angle-right ml-2"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Mega Menu Banner -->
                                </div>
                                <!-- End Shop - Mega Menu -->
                            </li>
                            <!-- End Shop -->

                            <!-- Demos -->
                            <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="600px"
                                data-position="right">
                                <a id="demosMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                                <!-- Demos - Mega Menu -->
                                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="demosMegaMenu">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <!-- Promo Item -->
                                            <div class="u-header__promo-item">
                                                <a class="u-header__promo-link" href="../house/index.html">
                                                    <div class="media align-items-center">
                                                        <img class="js-svg-injector u-header__promo-icon"
                                                            src="{{ asset('front/svg/icons/icon-13.svg') }}" alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">House</span>
                                                            <small class="u-header__promo-text">Real estate
                                                                demo.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Promo Item -->

                                            <!-- Promo Item -->
                                            <div class="u-header__promo-item">
                                                <a class="u-header__promo-link" href="../job/index.html">
                                                    <div class="media align-items-center">
                                                        <img class="js-svg-injector u-header__promo-icon"
                                                            src="{{ asset('front/svg/icons/icon-19.svg') }}" alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Job</span>
                                                            <small class="u-header__promo-text">Job vacancy
                                                                demo.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Promo Item -->

                                            <!-- Promo Item -->
                                            <div class="u-header__promo-item">
                                                <a class="u-header__promo-link" href="../crypto/index.html">
                                                    <div class="media align-items-center">
                                                        <img class="js-svg-injector u-header__promo-icon"
                                                            src="{{ asset('front/svg/icons/icon-5.svg') }}" alt="SVG">
                                                        <div class="media-body">
                                                            <span class="u-header__promo-title">Crypto landing</span>
                                                            <small class="u-header__promo-text">Cryptocurrency
                                                                demo.</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <!-- End Promo Item -->
                                        </div>

                                        <!-- Promo -->
                                        <div class="col-md-6 u-header__promo">
                                            <a class="d-block u-header__promo-inner" href="#">
                                                <div class="position-relative">
                                                    <img class="img-fluid rounded mb-3"
                                                        src="{{ asset('front/img/380x227/img6.jpg') }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="badge badge-success badge-pill badge-pos shadow-sm mt-3">New</span>
                                                </div>
                                                <span class="text-secondary font-size-1">Front makes you look at things
                                                    from a different perspectives.</span>
                                            </a>
                                        </div>
                                        <!-- End Promo -->
                                    </div>
                                </div>
                                <!-- End Demos - Mega Menu -->
                            </li>
                            <!-- End Demos -->

                            <!-- Docs -->
                            <li class="nav-item hs-has-mega-menu u-header__nav-item" data-event="hover"
                                data-animation-in="slideInUp" data-animation-out="fadeOut" data-max-width="260px"
                                data-position="right">
                                <a id="docsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                    href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                                <!-- Docs - Submenu -->
                                <div class="hs-mega-menu u-header__sub-menu" aria-labelledby="docsMegaMenu"
                                    style="min-width: 330px;">
                                    <!-- Promo Item -->
                                    <div class="u-header__promo-item">
                                        <a class="u-header__promo-link" href="../../documentation/index.html">
                                            <div class="media align-items-center">
                                                <img class="js-svg-injector u-header__promo-icon"
                                                    src="{{ asset('front/svg/icons/icon-2.svg') }}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">
                                                        Documentation
                                                        <span class="badge badge-primary badge-pill ml-1">v2.0</span>
                                                    </span>
                                                    <small class="u-header__promo-text">Development guides</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Promo Item -->

                                    <!-- Promo Item -->
                                    <div class="u-header__promo-item">
                                        <a class="u-header__promo-link" href="../../starter/index.html">
                                            <div class="media align-items-center">
                                                <img class="js-svg-injector u-header__promo-icon"
                                                    src="{{ asset('front/svg/icons/icon-1.svg') }}" alt="SVG">
                                                <div class="media-body">
                                                    <span class="u-header__promo-title">Get started</span>
                                                    <small class="u-header__promo-text">Components and snippets</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- End Promo Item -->

                                    <div class="u-header__promo-footer">
                                        <!-- List -->
                                        <div class="row no-gutters">
                                            <div class="col-6">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Check what's new</small>
                                                    <a class="small"
                                                        href="../../documentation/getting-started/changelog.html">
                                                        Changelog
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-6 u-header__promo-footer-ver-divider">
                                                <div class="u-header__promo-footer-item">
                                                    <small class="text-muted d-block">Have a question?</small>
                                                    <a class="small" href="http://htmlstream.com/contact-us">
                                                        Contact us
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End List -->
                                    </div>
                                </div>
                                <!-- End Docs - Submenu -->
                            </li>
                            <!-- End Docs -->

                            <!-- Button -->
                            <li class="nav-item u-header__nav-last-item">
                                <form action="{{ route('logout') }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit"
                                        class="btn btn-sm btn-primary transition-3d-hover">Logout</button>
                                </form>
                            </li>
                            <!-- End Button -->
                        </ul>
                    </div>
                    <!-- End Navigation -->
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
                                <li class="breadcrumb-item"><a class="breadcrumb-link"
                                        href="../home/index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="breadcrumb-link" href="dashboard.html">Account</a>
                                </li>
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
                                <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img2.jpg') }}"
                                    alt="Image Description">
                                <span
                                    class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                                    <span class="fas fa-check"></span>
                                </span>
                            </div>
                            <div class="media-body">
                                @if (Auth() -> user() -> isAdmin())
                                <h1 class="h3 text-white font-weight-medium mb-1">Halo, Admin!</h1>
                                @else
                                <h1 class="h3 text-white font-weight-medium mb-1">Halo,
                                    {{ Auth::user()->pendaftaran->nama_mahasiswa}}!</h1>
                                @endif
                                @if (Auth() -> user() -> isAdmin())
                                <span class="font-weight-semi-bold"> </span>
                                @else
                                <span class="d-block text-white">{{ Auth::user()->nrm}}</span>
                                @endif
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
                                            <a id="generalDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="generalDropdownMenu">
                                                General
                                            </a>

                                            <ul id="generalDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="generalDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="dashboard.html">Dashboard</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="profile.html">Profile</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="my-tasks.html">My tasks</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="projects.html">Projects</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="members.html">Members</a></li>
                                            </ul>
                                        </li>
                                        <!-- General -->

                                        <!-- Account Settings -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accountSettingsDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accountSettingsDropdownMenu">
                                                Account settings
                                            </a>

                                            <ul id="accountSettingsDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="edit-profile.html">Edit profile</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="change-password.html">Change password</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="notifications.html">Notifications</a></li>
                                            </ul>
                                        </li>
                                        <!-- Account Settings -->

                                        <!-- Billing -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="billingDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="billingDropdownMenu">
                                                Billing
                                            </a>

                                            <ul id="billingDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="billingDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="activity.html">Activity</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="payment-methods.html">Payment methods</a></li>
                                            </ul>
                                        </li>
                                        <!-- Billing -->

                                        <!-- Accessibility -->
                                        <li class="nav-item hs-has-sub-menu u-header__nav-item" data-event="hover"
                                            data-animation-in="slideInUp" data-animation-out="fadeOut">
                                            <a id="accessibilityDropdown"
                                                class="nav-link u-header__nav-link u-header__nav-link-toggle"
                                                href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                                aria-labelledby="accessibilityDropdownMenu">
                                                Accessibility
                                            </a>

                                            <ul id="accessibilityDropdownMenu"
                                                class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer"
                                                style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="invite-friends.html">Invite friends</a></li>
                                                <li><a class="nav-link u-header__sub-menu-nav-link"
                                                        href="api-token.html">API Token</a></li>
                                            </ul>
                                        </li>
                                        <!-- Accessibility -->

                                        <!-- Others -->
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link" href="plans.html">Plans</a>
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
                        <a class="btn btn-sm btn-soft-white transition-3d-hover" href="#requestPaymentModal"
                            data-modal-target="#requestPaymentModal">
                            <span class="fas fa-plus small mr-2"></span>
                            Request a Payment
                        </a>
                        <!-- End Button -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb Section -->

        <!-- Content Section -->
        <div class="bg-light">
            <div class="container space-2">

                {{-- tab nav --}}
                <div class="card mb-6">
                    <div class="card-header py-4 px-0 mx-4">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach($fakultas as $key => $item)
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link {{$key==0 ? 'active' : '' }}" id="{{ $item->nama_fakultas }}-tab" data-toggle="tab" href="#{{ $item->nama_fakultas }}" role="tab"
                                    aria-controls="{{ $item->nama_fakultas }}" aria-selected="false">{{ $item->nama_fakultas }}</a>
                            </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            @foreach($fakultas as $key => $item2)
                            <div class="tab-pane fade {{$key==0 ? 'active show' : '' }}" id="{{ $item2->nama_fakultas }}" role="tabpanel" aria-labelledby="{{ $item2->nama_fakultas }}-tab">
                                {{-- search --}}
                                <div class="js-focus-state input-group input-group-sm mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <span class="fas fa-search"></span>
                                        </span>
                                    </div>
                                    <input id="datatableSearch" class="form-control" type="email"
                                        placeholder="Search. . ." aria-label="Search activities">
                                </div>
                                {{-- end search --}}
                                {{-- table --}}
                                <div class="table-responsive-md u-datatable">
                                <table id="example{{$key+1}}"
                                        class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                                        data-dt-info="#datatableInfo" data-dt-search="#datatableSearch"
                                        data-dt-entries="#datatableEntries" data-dt-page-length="7"
                                        data-dt-is-responsive="false" data-dt-is-show-paging="true"
                                        data-dt-details-invoker=".js-datatabale-details"
                                        data-dt-select-all-control="#invoiceToggleAllCheckbox"'>
                                        <thead>
                                            <tr class="text-uppercase font-size-1">
                                            <th>no</th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                Nama
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                NRM
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                                </div>
                                            </th>
                                            <th scope="col" class="font-weight-medium">
                                                <div class="d-flex justify-content-between align-items-center">
                                                Kode Unik
                                                <div class="ml-2">
                                                    <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                                    <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                                                </div>
                                                </div>
                                            </th>
                                            </tr>
                                        </thead>
                                        <tbody class="font-size-1">
                                            @foreach($pendaftaran->where('fakultas_id', $item2->id) as $mahasiswa) <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td class="align-middle">{{ $mahasiswa->nama_mahasiswa }}</td>
                                                <td class="align-middle">{{ $mahasiswa->user->nrm }}</td>
                                                <td class="align-middle">{{ $mahasiswa->kode_unik }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                            @endforeach
                          </div>

                        {{-- KONTEN TABLE
                        <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="fio" role="tabpanel" aria-labelledby="fio-tab">
                            <div class="js-focus-state input-group input-group-sm mb-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <span class="fas fa-search"></span>
                                    </span>
                                </div>
                                <input id="datatableSearch" class="form-control" type="email"
                                    placeholder="Search. . ." aria-label="Search activities">
                            </div>

                            <div class="table-responsive-md u-datatable">
                                <table
                                    class="js-datatable table table-borderless u-datatable__striped u-datatable__content u-datatable__trigger mb-5"
                                    data-dt-info="#datatableInfo" data-dt-search="#datatableSearch"
                                    data-dt-entries="#datatableEntries" data-dt-page-length="7"
                                    data-dt-is-responsive="false" data-dt-is-show-paging="true"
                                    data-dt-details-invoker=".js-datatabale-details"
                                    data-dt-select-all-control="#invoiceToggleAllCheckbox"'>
                    <thead>
                        <tr class="text-uppercase font-size-1">
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                            Nama
                            <div class="ml-2">
                                <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                            NRM
                            <div class="ml-2">
                                <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                            Kode Unik
                            <div class="ml-2">
                                <span class="fas fa-angle-up u-datatable__thead-icon"></span>
                                <span class="fas fa-angle-down u-datatable__thead-icon"></span>
                            </div>
                            </div>
                        </th>
                        </tr>
                    </thead>
                    <tbody class="font-size-1">
                        @foreach($pendaftaran->where('fakultas_id', 1) as $mahasiswa) <tr>
                                    <td class="align-middle">{{ $mahasiswa->nama_mahasiswa }}</td>
                                    <td class="align-middle">{{ $mahasiswa->user->nrm }}</td>
                                    <td class="align-middle">{{ $mahasiswa->kode_unik }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> --}}
                        {{-- @endforeach --}}
                        {{-- end ulang --}}
                        {{-- kelar tab fio --}}
                    {{-- </div> --}}
                </div>
            </div>

            {{-- <!-- Stats -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
                  <span class="fas fa-dollar-sign btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$45.99</span>
                  <h2 class="h6 text-secondary font-weight-normal mb-0">Available balance</h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                  <span class="fas fa-coins btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$1.32</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Reward balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->

          <!-- Card -->
          <div class="card">
            <div class="card-body p-5">
              <div class="media align-items-center">
                <span class="btn btn-lg btn-icon btn-soft-warning rounded-circle mr-4">
                  <span class="fas fa-exchange-alt btn-icon__inner"></span>
                </span>
                <div class="media-body">
                  <span class="d-block font-size-3">$0.00</span>
                  <h3 class="h6 text-secondary font-weight-normal mb-0">Pending balance</h3>
                </div>
              </div>
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Stats --> --}}

            <!-- Title -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="h6 mb-0">Your earning sources</h3>
                <a class="link-muted" href="#">View All</a>
            </div>
            <!-- End Title -->

            <!-- Earning Sources -->
            <div class="mb-7">
                <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
                    <!-- Card -->
                    <div class="card card-frame mb-3">
                        <a class="card-body p-4" href="#">
                            <div class="media align-items-center">
                                <div class="u-avatar mr-3">
                                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img5.jpg')}}"
                                        alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">Spotify</span>
                                    <small class="d-block text-secondary">Logo redesign</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $1,903
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
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front/img/160x160/img3.jpg') }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">Slack</span>
                                    <small class="d-block text-secondary">Page redesign</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $3,500
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
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front/img/160x160/img6.jpg') }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">Dropbox</span>
                                    <small class="d-block text-secondary">Branding</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $7,250
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
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front/img/160x160/img8.jpg') }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">PayPal</span>
                                    <small class="d-block text-secondary">Logo redesign</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $2,125
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
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front/img/160x160/img9.jpg') }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">Dribbble</span>
                                    <small class="d-block text-secondary">UI/UX</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $9,000
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
                                    <img class="img-fluid rounded-circle"
                                        src="{{ asset('front/img/160x160/img4.jpg') }}" alt="Image Description">
                                </div>
                                <div class="media-body">
                                    <span class="text-dark">Mapbox</span>
                                    <small class="d-block text-secondary">Branding</small>
                                </div>
                                <div class="media-body text-right">
                                    <span class="text-primary ml-3">
                                        $250
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
            <!-- End Earning Sources -->

            {{-- <!-- Card -->
        <div class="card-deck d-block d-lg-flex card-lg-gutters-3">
          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Deposits</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="depositSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="depositSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#depositSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="depositSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="depositSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Deposit Info -->
              <div class="row mb-5">
                <div class="col-sm-6 mb-4 mb-sm-0">
                  <span class="align-top">$</span>
                  <span class="font-size-3 font-weight-medium text-lh-sm">50,102</span>
                  <div class="mb-1">
                    <span class="text-secondary font-size-1">Deposit:</span>
                    <span class="font-weight-medium font-size-1">$1,050</span>
                  </div>
                  <div>
                    <span class="text-primary font-weight-medium text-lh-sm">
                      <span class="fas fa-arrow-up text-success small"></span>
                      +2.1% ($122)
                    </span>
                  </div>
                </div>

                <div class="col-sm-6 align-self-end">
                  <!-- Pie Circle -->
                  <div class="js-pie text-center"
                     data-circles-text-class="content-centered-y"
                     data-circles-value="54"
                     data-circles-max-value="100"
                     data-circles-bg-color="rgba(0, 201, 167, 0.1)"
                     data-circles-fg-color="#00c9a7"
                     data-circles-radius="50"
                     data-circles-stroke-width="4"
                     data-circles-additional-text="%"
                     data-circles-duration="2000"
                     data-circles-scroll-animate="true"
                     data-circles-color="#00c9a7"
                     data-circles-font-size="24"></div>
                  <!-- End Pie Circle -->
                </div>
              </div>

              <button type="button" class="btn btn-block btn-sm btn-primary transition-3d-hover">Add Funds</button>
              <!-- End Deposit Info -->
            </div>

            <div class="card-footer p-5">
              <!-- Progress Info -->
              <div class="row align-items-center">
                <div class="col-6 u-ver-divider">
                  <label class="small text-muted">Goal:</label>
                  <small class="font-weight-medium">$100k</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                <div class="col-6">
                  <label class="small text-muted">Duration:</label>
                  <small class="font-weight-medium">6 months</small>
                  <div class="js-hr-progress progress" style="height: 4px;">
                    <div class="js-hr-progress-bar progress-bar bg-success" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
              <!-- End Progress Info -->
            </div>
          </div>
          <!-- End Stats -->

          <!-- Stats -->
          <div class="card mb-7 mb-lg-0">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Balance</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="balanceSettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="balanceSettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#balanceSettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="balanceSettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="balanceSettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cogs dropdown-item-icon"></small>
                      Settings
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-cloud-download-alt dropdown-item-icon"></small>
                      Download
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <!-- Balance Info -->
              <div class="row align-items-center mb-4">
                <div class="col-6 u-ver-divider">
                  <label class="d-block small text-muted mb-0">Available:</label>
                  <span class="font-weight-medium">$45.99</span>
                </div>

                <div class="col-6">
                  <label class="d-block small text-muted mb-0">Pending:</label>
                  <span class="font-weight-medium">$0.00</span>
                </div>
              </div>

              <div class="row">
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">May</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jun</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 23%;" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Jul</h4>
                  </div>
                </div>
                <div class="col-3">
                  <div class="js-vr-progress progress-vertical rounded mb-2">
                    <div class="js-vr-progress-bar bg-primary rounded-bottom" role="progressbar" style="height: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center">
                    <h4 class="small mb-0">Aug</h4>
                  </div>
                </div>
              </div>
              <!-- End Balance Info -->
            </div>
          </div>
          <!-- End Stats -->

          <!-- Indicator -->
          <div class="card">
            <div class="card-body pt-4 pb-5 px-5 mb-3 mb-md-0">
              <!-- Title & Settings -->
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="h6 mb-0">Activity</h4>

                <!-- Settings Dropdown -->
                <div class="position-relative">
                  <a id="activitySettingsDropdownInvoker" class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="javascript:;" role="button"
                     aria-controls="activitySettingsDropdown"
                     aria-haspopup="true"
                     aria-expanded="false"
                     data-unfold-event="click"
                     data-unfold-target="#activitySettingsDropdown"
                     data-unfold-type="css-animation"
                     data-unfold-duration="300"
                     data-unfold-delay="300"
                     data-unfold-hide-on-scroll="true"
                     data-unfold-animation-in="slideInUp"
                     data-unfold-animation-out="fadeOut">
                    <span class="fas fa-ellipsis-h btn-icon__inner"></span>
                  </a>

                  <div id="activitySettingsDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="activitySettingsDropdownInvoker" style="min-width: 190px;">
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye dropdown-item-icon"></small>
                      Mark as read
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-eye-slash dropdown-item-icon"></small>
                      Mark as unread
                    </a>
                    <a class="dropdown-item" href="#">
                      <small class="fas fa-archive dropdown-item-icon"></small>
                      Archive
                    </a>
                  </div>
                </div>
                <!-- End Settings Dropdown -->
              </div>
              <!-- End Title & Settings -->

              <hr class="mt-3 mb-4">

              <div class="overflow-hidden">
                <div class="js-scrollbar pr-3" style="max-height: 300px;">
                  <!-- Activity Feed -->
                  <ul class="list-unstyled u-indicator-vertical-dashed">
                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">A</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Amanta Owens</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Slack home page redesign</span></p>
                        <small class="d-block text-muted">30 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-success rounded-circle mr-3">
                        <span class="btn-icon__inner">S</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Sebastian Diaz</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Mapbox logo redesign</span></p>
                        <small class="d-block text-muted">44 min ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-warning rounded-circle mr-3">
                        <span class="btn-icon__inner text-white">F</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Eliza Donovan</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Spotify branding</span></p>
                        <small class="d-block text-muted">1 hour ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-primary rounded-circle mr-3">
                        <span class="btn-icon__inner">C</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">Cler Lockhart</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">Dropbox home page redesign</span></p>
                        <small class="d-block text-muted">15 hours ago</small>
                      </div>
                    </li>

                    <li class="media u-indicator-vertical-dashed-item">
                      <span class="btn btn-xs btn-icon btn-danger rounded-circle mr-3">
                        <span class="btn-icon__inner">J</span>
                      </span>
                      <div class="media-body">
                        <h5 class="font-size-1 mb-1">James Collins</h5>
                        <p class="small mb-1">Added new task: <span class="font-weight-medium">InVison branding</span></p>
                        <small class="d-block text-muted">1 day ago</small>
                      </div>
                    </li>
                  </ul>
                  <!-- End Activity Feed -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Indicator -->
        </div>
        <!-- End Card --> --}}
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
              <span id="footerCountryInvoker" class="dropdown-nav-link"
                 aria-controls="footer-country"
                 aria-haspopup="true"
                 aria-expanded="false"
                 data-toggle="dropdown"
                 data-unfold-event="click"
                 data-unfold-target="#footer-country"
                 data-unfold-type="css-animation"
                 data-unfold-duration="300"
                 data-unfold-delay="300"
                 data-unfold-hide-on-scroll="false"
                 data-unfold-animation-in="slideInUp"
                 data-unfold-animation-out="fadeOut">
                <img class="dropdown-item-icon" src="{{ asset('front/vendor/flag-icon-css/flags/4x3/id.svg') }}" alt="United States Flag">
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
            <li><a class="list-group-item list-group-item-action" href="http://www.unj.ac.id/">Beranda</a></li>
            <li><a class="list-group-item list-group-item-action" href="http://www.unj.ac.id/category/berita/">Berita</a></li>
            <li><a class="list-group-item list-group-item-action" href="http://siakad.unj.ac.id/">Siakad</a></li>
            <li><a class="list-group-item list-group-item-action" href="http://journal.unj.ac.id/">Jurnal</a></li>
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
              <li class="list-group-item">Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun,  Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</li>
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
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.facebook.com/OfficialUNJ/">
            <span class="fab fa-facebook-f btn-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.youtube.com/channel/UCEbRyX261ttaaW_6-EjTUWA">
            <span class="fab fa-youtube btn-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="https://twitter.com/UNJ_Official">
            <span class="fab fa-twitter btn-icon__inner"></span>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent" href="https://www.instagram.com/unj_official/">
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

        $('#example1').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example2').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example3').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example4').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example5').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example6').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example7').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example8').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
        $('#example9').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });

    </script>
</body>

</html>
