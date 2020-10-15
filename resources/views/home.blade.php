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
  <link rel="stylesheet" href="{{ asset('front/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/flatpickr/dist/flatpickr.min.css') }}">

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
          <button type="button" class="close u-search-push-top__close-btn"
                  aria-haspopup="true"
                  aria-expanded="false"
                  aria-controls="searchPushTop"
                  data-unfold-type="jquery-slide"
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
                  <div class="list-group list-group-transparent list-group-flush list-group-borderless">
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
                  <div class="list-group list-group-transparent list-group-flush list-group-borderless">
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
                    <img class="img-fluid u-search-push-top__banner-img" src="{{ asset('front/img/mockups/img3.png" alt="Image Description') }}">
                    <img class="img-fluid u-search-push-top__banner-img" src="{{ asset('front/img/mockups/img2.png" alt="Image Description') }}">
                  </div>

                  <div>
                    <div class="mb-4">
                      <strong class="d-block mb-2">Featured Item</strong>
                      <p>Create astonishing web sites and pages.</p>
                    </div>
                    <a class="btn btn-xs btn-soft-success transition-3d-hover" href="index.html">Apply Now <span class="fas fa-angle-right ml-2"></span></a>
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
            <a id="languageDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button"
               aria-controls="languageDropdown"
               aria-haspopup="true"
               aria-expanded="false"
               data-unfold-event="hover"
               data-unfold-target="#languageDropdown"
               data-unfold-type="css-animation"
               data-unfold-duration="300"
               data-unfold-delay="300"
               data-unfold-hide-on-scroll="true"
               data-unfold-animation-in="slideInUp"
               data-unfold-animation-out="fadeOut">
               <img class="dropdown-item-icon" src="{{ asset('front/flag-icon-css/flags/4x3/us.svg" alt="SVG') }}">
              <span class="d-inline-block d-sm-none">US</span>
              <span class="d-none d-sm-inline-block">United States</span>
            </a>

            <div id="languageDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="languageDropdownInvoker">
              <a class="dropdown-item active" href="#">English</a>
              <a class="dropdown-item" href="#">Deutsch</a>
              <a class="dropdown-item" href="#">Español‎</a>
            </div>
          </div>
          <!-- End Language -->

          <div class="ml-auto">
            <!-- Jump To -->
            <div class="d-inline-block d-sm-none position-relative mr-2">
              <a id="jumpToDropdownInvoker" class="dropdown-nav-link dropdown-toggle d-flex align-items-center" href="javascript:;" role="button"
                 aria-controls="jumpToDropdown"
                 aria-haspopup="true"
                 aria-expanded="false"
                 data-unfold-event="hover"
                 data-unfold-target="#jumpToDropdown"
                 data-unfold-type="css-animation"
                 data-unfold-duration="300"
                 data-unfold-delay="300"
                 data-unfold-hide-on-scroll="true"
                 data-unfold-animation-in="slideInUp"
                 data-unfold-animation-out="fadeOut">
                Jump to
              </a>

              <div id="jumpToDropdown" class="dropdown-menu dropdown-unfold" aria-labelledby="jumpToDropdownInvoker">
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
                      aria-haspopup="true"
                      aria-expanded="false"
                      aria-controls="searchPushTop"
                      data-unfold-type="jquery-slide"
                      data-unfold-target="#searchPushTop">
                <span class="fas fa-search btn-icon__inner"></span>
              </a>
            </li>
            <!-- End Search -->

            <!-- Shopping Cart -->
            <li class="list-inline-item position-relative">
              <a id="shoppingCartDropdownInvoker" class="btn btn-xs btn-icon btn-text-secondary" href="javascript:;" role="button"
                      aria-controls="shoppingCartDropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                      data-unfold-event="hover"
                      data-unfold-target="#shoppingCartDropdown"
                      data-unfold-type="css-animation"
                      data-unfold-duration="300"
                      data-unfold-delay="300"
                      data-unfold-hide-on-scroll="true"
                      data-unfold-animation-in="slideInUp"
                      data-unfold-animation-out="fadeOut">
                <span class="fas fa-shopping-cart btn-icon__inner"></span>
              </a>

              <div id="shoppingCartDropdown" class="dropdown-menu dropdown-unfold dropdown-menu-right text-center p-7" aria-labelledby="shoppingCartDropdownInvoker" style="min-width: 250px;">
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
              <a id="sidebarNavToggler" class="btn btn-xs btn-text-secondary u-sidebar--account__toggle-bg ml-1" href="javascript:;" role="button"
                 aria-controls="sidebarContent"
                 aria-haspopup="true"
                 aria-expanded="false"
                 data-unfold-event="click"
                 data-unfold-hide-on-scroll="false"
                 data-unfold-target="#sidebarContent"
                 data-unfold-type="css-animation"
                 data-unfold-animation-in="fadeInRight"
                 data-unfold-animation-out="fadeOutRight"
                 data-unfold-duration="500">
                <span class="position-relative">
                  <span class="u-sidebar--account__toggle-text">{{ Auth::user()->nrm}}</span>
                  <img class="u-sidebar--account__toggle-img" src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
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
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="../home/index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
              <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
              <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
              <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
            </svg>
            <span class="u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- Home -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left">
                <a id="homeMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Home</a>

                <!-- Home - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="homeMegaMenu">
                  <div class="row no-gutters">
                    <div class="col-lg-6">
                      <!-- Banner Image -->
                      <div class="u-header__banner" style="background-image: url({{ asset('front/img/750x750/img1.jpg') }});">
                        <div class="u-header__banner-content">
                          <div class="mb-4">
                            <span class="u-header__banner-title">Branding Works</span>
                            <p class="u-header__banner-text">Experience a level of our quality in both design &amp; customization works.</p>
                          </div>
                          <a class="btn btn-primary btn-sm transition-3d-hover" href="#">Learn More <span class="fas fa-angle-right ml-2"></span></a>
                        </div>
                      </div>
                      <!-- End Banner Image -->
                    </div>

                    <div class="col-lg-6">
                      <div class="row u-header__mega-menu-wrapper">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <span class="u-header__sub-menu-title">Classic</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/index.html">Classic Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/classic-business.html">Classic Business</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/classic-marketing.html">Classic Marketing</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/classic-consulting.html">Classic Consulting</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/classic-start-up.html">Classic Start-up <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Corporate</span>
                          <ul class="u-header__sub-menu-nav-group">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/corporate-agency.html">Corporate Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/corporate-start-up.html">Corporate Start-Up</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/corporate-business.html">Corporate Business</a></li>
                          </ul>
                        </div>

                        <div class="col-sm-6">
                          <span class="u-header__sub-menu-title">Onepages</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/onepage-creative.html">Onepage Creative <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/onepage-saas.html">Onepage SaaS <span class="badge badge-success badge-primary ml-1">New</span></a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Blog</span>
                          <ul class="u-header__sub-menu-nav-group mb-3">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/blog-agency.html">Blog Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/blog-start-up.html">Blog Start-Up</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/blog-business.html">Blog Business</a></li>
                          </ul>

                          <span class="u-header__sub-menu-title">Portfolio</span>
                          <ul class="u-header__sub-menu-nav-group">
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/portfolio-agency.html">Portfolio Agency</a></li>
                            <li><a class="nav-link u-header__sub-menu-nav-link" href="../home/portfolio-profile.html">Portfolio Profile</a></li>
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
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="pagesMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Pages</a>

                <!-- Pages - Submenu -->
                <ul id="pagesSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="pagesMegaMenu" style="min-width: 230px;">
                  <!-- Account -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAccount" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAccount">Account</a>

                    <ul id="navSubmenuPagesAccount" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesAccount" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="dashboard.html">Dashboard</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="profile.html">Profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="my-tasks.html">My tasks</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="projects.html">Projects</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="members.html">Members</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="edit-profile.html">Edit profile</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="change-password.html">Change password</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="notifications.html">Notifications</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="activity.html">Activity</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="payment-methods.html">Payment methods</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="invite-friends.html">Invite friends</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="plans.html">Plans</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="api-token.html">API Token</a></li>
                    </ul>
                  </li>
                  <!-- End Account -->

                  <!-- Portfolio -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesPortfolio" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesPortfolio">Portfolio</a>

                    <ul id="navSubmenuPagesPortfolio" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesPortfolio" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/boxed-classic.html">All layouts</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/case-studies-simple.html">Case Studies Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/case-studies-modern.html">Case Studies Modern</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-simple.html">Single Page Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-grid.html">Single Page Grid</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../portfolio/single-page-masonry.html">Single Page Masonry</a></li>
                    </ul>
                  </li>
                  <!-- End Portfolio -->

                  <!-- About -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesAbout" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesAbout">About</a>

                    <ul id="navSubmenuPagesAbout" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesAbout" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/about-agency.html">About Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/about-start-up.html">About Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- About -->

                  <!-- Services -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesServices">Services</a>

                    <ul id="navSubmenuPagesServices" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesServices" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/services-agency.html">Services Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/services-start-up.html">Services Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Services -->

                  <!-- Careers -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesCareers" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesCareers">Careers</a>

                    <ul id="navSubmenuPagesCareers" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesCareers" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/careers.html">Careers</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/careers-single.html">Careers Single</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/hire-us.html">Hire Us</a></li>
                    </ul>
                  </li>
                  <!-- Careers -->

                  <!-- Login -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesLogin" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesLogin">Login &amp; Signup</a>

                    <ul id="navSubmenuPagesLogin" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesLogin" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/login.html">Login</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/signup.html">Signup</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/recover-account.html">Recover Account</a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/login-simple.html">Login Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/signup-simple.html">Signup Simple</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/recover-account-simple.html">Recover Account Simple</a></li>
                    </ul>
                  </li>
                  <!-- Signup -->

                  <!-- Contacts -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkContactsServices" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuContactsServices">Contacts</a>

                    <ul id="navSubmenuContactsServices" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkContactsServices" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/contacts-agency.html">Contacts Agency</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/contacts-start-up.html">Contacts Start-Up</a></li>
                    </ul>
                  </li>
                  <!-- Contacts -->

                  <!-- Utilities -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesUtilities" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesUtilities">Utilities</a>

                    <ul id="navSubmenuPagesUtilities" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesUtilities" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/help.html">Help</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/help-article.html">Help article</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/faq.html">FAQ</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/pricing.html">Pricing</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/invoice.html">Invoice</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/terms.html">Terms &amp; Conditions</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/privacy.html">Privacy &amp; Policy</a></li>
                    </ul>
                  </li>
                  <!-- Utilities -->

                  <!-- Specialty -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkPagesSpecialty" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuPagesSpecialty">Specialty</a>

                    <ul id="navSubmenuPagesSpecialty" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkPagesSpecialty" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/cover-page.html">Cover Page</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/coming-soon.html">Coming Soon</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/maintenance-mode.html">Maintenance Mode</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../pages/error-404.html">Error 404</a></li>
                    </ul>
                  </li>
                  <!-- Specialty -->
                </ul>
                <!-- End Pages - Submenu -->
              </li>
              <!-- End Pages -->

              <!-- Blog -->
              <li class="nav-item hs-has-sub-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut">
                <a id="blogMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="blogSubMenu">Blog</a>

                <!-- Blog - Submenu -->
                <ul id="blogSubMenu" class="hs-sub-menu u-header__sub-menu" aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                  <!-- Classic -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogClassic" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogClassic">Classic</a>

                    <ul id="navSubmenuBlogClassic" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogClassic" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/classic-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Classic -->

                  <!-- Grid -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGrid" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGrid">Grid</a>

                    <ul id="navSubmenuBlogGrid" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGrid" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/grid-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid -->

                  <!-- List -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogList" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogList">List</a>

                    <ul id="navSubmenuBlogList" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogList" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/list-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- List -->

                  <!-- Modern -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogCard" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogCard">Modern</a>

                    <ul id="navSubmenuBlogCard" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogCard" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/modern-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Grid Modern -->

                  <!-- Masonry -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMinimal" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMinimal">Masonry</a>

                    <ul id="navSubmenuBlogGridMinimal" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMinimal" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-left-sidebar.html">Left Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-right-sidebar.html">Right Sidebar</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/masonry-full-width.html">Full Width</a></li>
                    </ul>
                  </li>
                  <!-- Masonry -->

                  <!-- Single Article -->
                  <li class="hs-has-sub-menu">
                    <a id="navLinkBlogGridMasonry" class="nav-link u-header__sub-menu-nav-link u-header__sub-menu-nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-controls="navSubmenuBlogGridMasonry">Single Article</a>

                    <ul id="navSubmenuBlogGridMasonry" class="hs-sub-menu u-header__sub-menu" aria-labelledby="navLinkBlogGridMasonry" style="min-width: 230px;">
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-classic.html">Classic</a></li>
                      <li><a class="nav-link u-header__sub-menu-nav-link" href="../blog/single-article-simple.html">Simple</a></li>
                    </ul>
                  </li>
                  <!-- Single Article -->
                </ul>
                <!-- End Submenu -->
              </li>
              <!-- End Blog -->

              <!-- Shop -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="440px"
                  data-position="right">
                <a id="shopMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Shop</a>

                <!-- Shop - Mega Menu -->
                <div class="hs-mega-menu u-header__sub-menu u-header__mega-menu-position-right-fix--md" aria-labelledby="shopMegaMenu">
                  <div class="u-header__mega-menu-wrapper">
                    <span class="u-header__sub-menu-title">Shop Elements</span>

                    <div class="row">
                      <div class="col-sm-6">
                        <ul class="u-header__sub-menu-nav-group">
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="../shop/classic.html">Classic</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="../shop/masonry.html">Masonry</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="../shop/single-product.html">Single Product</a></li>
                        </ul>
                      </div>

                      <div class="col-sm-6">
                        <ul class="u-header__sub-menu-nav-group">
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="../shop/cart.html">Cart</a></li>
                          <li><a class="nav-link u-header__sub-menu-nav-link" href="../shop/checkout.html">Checkout</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <!-- Mega Menu Banner -->
                  <div class="u-header__product-banner">
                    <div class="d-flex align-items-end">
                      <img class="img-fluid mr-4" src="{{ asset('front/img/mockups/img4.png') }}" alt="Image Description">
                      <div class="u-header__product-banner-content">
                        <div class="mb-4">
                          <span class="u-header__product-banner-title">Win T-shirt</span>
                          <p class="u-header__product-banner-text">Win one of our Front brand T-shirts.</p>
                        </div>
                        <a class="btn btn-sm btn-soft-primary transition-3d-hover" href="../shop/classic.html">Learn More <span class="fas fa-angle-right ml-2"></span></a>
                      </div>
                    </div>
                  </div>
                  <!-- End Mega Menu Banner -->
                </div>
                <!-- End Shop - Mega Menu -->
              </li>
              <!-- End Shop -->

              <!-- Demos -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="600px"
                  data-position="right">
                <a id="demosMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Demos</a>

                <!-- Demos - Mega Menu -->
                <div class="hs-mega-menu w-100 u-header__sub-menu" aria-labelledby="demosMegaMenu">
                  <div class="row no-gutters">
                    <div class="col-md-6">
                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="../house/index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="{{ asset('front/svg/icons/icon-13.svg') }}" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">House</span>
                              <small class="u-header__promo-text">Real estate demo.</small>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Promo Item -->

                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="../job/index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="{{ asset('front/svg/icons/icon-19.svg') }}" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">Job</span>
                              <small class="u-header__promo-text">Job vacancy demo.</small>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- End Promo Item -->

                      <!-- Promo Item -->
                      <div class="u-header__promo-item">
                        <a class="u-header__promo-link" href="../crypto/index.html">
                          <div class="media align-items-center">
                            <img class="js-svg-injector u-header__promo-icon" src="{{ asset('front/svg/icons/icon-5.svg') }}" alt="SVG">
                            <div class="media-body">
                              <span class="u-header__promo-title">Crypto landing</span>
                              <small class="u-header__promo-text">Cryptocurrency demo.</small>
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
                          <img class="img-fluid rounded mb-3" src="{{ asset('front/img/380x227/img6.jpg') }}" alt="Image Description">
                          <span class="badge badge-success badge-pill badge-pos shadow-sm mt-3">New</span>
                        </div>
                        <span class="text-secondary font-size-1">Front makes you look at things from a different perspectives.</span>
                      </a>
                    </div>
                    <!-- End Promo -->
                  </div>
                </div>
                <!-- End Demos - Mega Menu -->
              </li>
              <!-- End Demos -->

              <!-- Docs -->
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-max-width="260px"
                  data-position="right">
                <a id="docsMegaMenu" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false">Docs</a>

                <!-- Docs - Submenu -->
                <div class="hs-mega-menu u-header__sub-menu" aria-labelledby="docsMegaMenu" style="min-width: 330px;">
                  <!-- Promo Item -->
                  <div class="u-header__promo-item">
                    <a class="u-header__promo-link" href="../../documentation/index.html">
                      <div class="media align-items-center">
                        <img class="js-svg-injector u-header__promo-icon" src="{{ asset('front/svg/icons/icon-2.svg') }}" alt="SVG">
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
                        <img class="js-svg-injector u-header__promo-icon" src="{{ asset('front/svg/icons/icon-1.svg') }}" alt="SVG">
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
                          <a class="small" href="../../documentation/getting-started/changelog.html">
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
                    <button type="submit" class="btn btn-sm btn-primary transition-3d-hover">Logout</button>
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
            <div class="d-flex d-lg-inline-block justify-content-between justify-content-lg-end align-items-center align-items-lg-start">
              <!-- Breadcrumb -->
              <ol class="breadcrumb breadcrumb-white breadcrumb-no-gutter mb-0">
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="../home/index.html">Home</a></li>
                <li class="breadcrumb-item"><a class="breadcrumb-link" href="dashboard.html">Account</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
              <!-- End Breadcrumb -->

              <!-- Breadcrumb Nav Toggle Button -->
              <div class="d-lg-none">
                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
                        aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="breadcrumbNavBar"
                        data-toggle="collapse"
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
                <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img2.jpg') }}" alt="Image Description">
                <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                </span>
              </div>
              <div class="media-body">
                <h1 class="h3 text-white font-weight-medium mb-1">Howdy, {{ Auth::user()->nrm}}!</h1>
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
          <div class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
            <div class="u-header__section bg-transparent">
              <nav class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                  <ul class="navbar-nav u-header__navbar-nav">
                    <!-- General -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="generalDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="generalDropdownMenu">
                        General
                      </a>

                      <ul id="generalDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="generalDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="dashboard.html">Dashboard</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="profile.html">Profile</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="my-tasks.html">My tasks</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="projects.html">Projects</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="members.html">Members</a></li>
                      </ul>
                    </li>
                    <!-- General -->

                    <!-- Account Settings -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="accountSettingsDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="accountSettingsDropdownMenu">
                        Account settings
                      </a>

                      <ul id="accountSettingsDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="accountSettingsDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="edit-profile.html">Edit profile</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="change-password.html">Change password</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="notifications.html">Notifications</a></li>
                      </ul>
                    </li>
                    <!-- Account Settings -->

                    <!-- Billing -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="billingDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="billingDropdownMenu">
                        Billing
                      </a>

                      <ul id="billingDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="billingDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="activity.html">Activity</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="payment-methods.html">Payment methods</a></li>
                      </ul>
                    </li>
                    <!-- Billing -->

                    <!-- Accessibility -->
                    <li class="nav-item hs-has-sub-menu u-header__nav-item"
                        data-event="hover"
                        data-animation-in="slideInUp"
                        data-animation-out="fadeOut">
                      <a id="accessibilityDropdown" class="nav-link u-header__nav-link u-header__nav-link-toggle" href="javascript:;" aria-haspopup="true" aria-expanded="false" aria-labelledby="accessibilityDropdownMenu">
                        Accessibility
                      </a>

                      <ul id="accessibilityDropdownMenu" class="hs-sub-menu u-header__sub-menu u-header__sub-menu--spacer" style="min-width: 230px;" aria-labelledby="accessibilityDropdown">
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="invite-friends.html">Invite friends</a></li>
                        <li><a class="nav-link u-header__sub-menu-nav-link" href="api-token.html">API Token</a></li>
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
        <!-- Stats -->
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
        <!-- End Stats -->

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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img5.jpg')}}" alt="Image Description">
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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img3.jpg') }}" alt="Image Description">
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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img6.jpg') }}" alt="Image Description">
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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img8.jpg') }}" alt="Image Description">
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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img9.jpg') }}" alt="Image Description">
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
                    <img class="img-fluid rounded-circle" src="{{ asset('front/img/160x160/img4.jpg') }}" alt="Image Description">
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
  <footer>
    <!-- Lists -->
    <div class="border-bottom">
      <div class="container space-2">
        <div class="row justify-content-md-between">
          <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">About</h4>

            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="list-group-item list-group-item-action" href="../pages/about-agency.html">About</a></li>
              <li><a class="list-group-item list-group-item-action" href="../pages/services-agency.html">Services</a></li>
              <li><a class="list-group-item list-group-item-action" href="../pages/careers.html">Careers</a></li>
            </ul>
            <!-- End List Group -->
          </div>

          <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">Account</h4>

            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="list-group-item list-group-item-action" href="dashboard.html">Account</a></li>
              <li><a class="list-group-item list-group-item-action" href="my-tasks.html">My tasks</a></li>
              <li><a class="list-group-item list-group-item-action" href="projects.html">Projects</a></li>
            </ul>
            <!-- End List Group -->
          </div>

          <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
            <h4 class="h6 font-weight-semi-bold">Resources</h4>

            <!-- List Group -->
            <ul class="list-group list-group-flush list-group-borderless mb-0">
              <li><a class="list-group-item list-group-item-action" href="../pages/help.html">Help</a></li>
              <li><a class="list-group-item list-group-item-action" href="../pages/terms.html">Terms</a></li>
              <li><a class="list-group-item list-group-item-action" href="../pages/privacy.html">Privacy</a></li>
            </ul>
            <!-- End List Group -->
          </div>

          <div class="col-md-6 col-lg-4">
            <h4 class="h6 font-weight-semi-bold mb-4">We are driven to deliver results for all your businesses.</h4>

            <!-- Button -->
            <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2 mr-1">
              <span class="media align-items-center">
                <span class="fab fa-apple fa-2x mr-3"></span>
                <span class="media-body">
                  <span class="d-block">Download on the</span>
                  <strong class="font-size-1">App Store</strong>
                </span>
              </span>
            </button>
            <!-- End Button -->

            <!-- Button -->
            <button type="button" class="btn btn-xs btn-dark btn-wide transition-3d-hover text-left mb-2">
              <span class="media align-items-center">
                <span class="fab fa-google-play fa-2x mr-3"></span>
                <span class="media-body">
                  <span class="d-block">Get it on</span>
                  <strong class="font-size-1">Google Play</strong>
                </span>
              </span>
            </button>
            <!-- End Button -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Lists -->

    <!-- Copyright -->
    <div class="container text-center space-1">
      <!-- Logo -->
      <a class="d-inline-flex align-items-center mb-2" href="../home/index.html" aria-label="Front">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
          <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
          <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
          <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
          <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
        </svg>
        <span class="brand brand-primary">Front</span>
      </a>
      <!-- End Logo -->
      <p class="small text-muted">&copy; Front. 2018 Htmlstream. All rights reserved.</p>
    </div>
    <!-- End Copyright -->
  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--account__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex justify-content-between align-items-center pt-4 px-7">
            <h3 class="h6 mb-0">My Account</h3>

            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <!-- Holder Info -->
            <header class="d-flex align-items-center u-sidebar--account__holder mt-3">
              <div class="position-relative">
                <img class="u-sidebar--account__holder-img" src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
                <span class="badge badge-xs badge-outline-success badge-pos rounded-circle"></span>
              </div>
              <div class="ml-3">
                <span class="font-weight-semi-bold">{{ Auth::user()->nrm}} <span class="badge badge-success ml-1">Pro</span></span>
                <span class="u-sidebar--account__holder-text">Lead Support Adviser</span>
              </div>

              <!-- Settings -->
              <div class="btn-group position-relative ml-auto mb-auto">
                <a id="sidebar-account-settings-invoker" class="btn btn-xs btn-icon btn-text-secondary rounded" href="javascript:;" role="button"
                        aria-controls="sidebar-account-settings"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-toggle="dropdown"
                        data-unfold-event="click"
                        data-unfold-target="#sidebar-account-settings"
                        data-unfold-type="css-animation"
                        data-unfold-duration="300"
                        data-unfold-delay="300"
                        data-unfold-animation-in="slideInUp"
                        data-unfold-animation-out="fadeOut">
                  <span class="fas fa-ellipsis-v btn-icon__inner"></span>
                </a>

                <div id="sidebar-account-settings" class="dropdown-menu dropdown-unfold dropdown-menu-right" aria-labelledby="sidebar-account-settings-invoker">
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">History</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sign Out</a>
                </div>
              </div>
              <!-- End Settings -->
            </header>
            <!-- End Holder Info -->

            <div class="u-sidebar__content--account">
              <!-- List Links -->
              <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="dashboard.html">
                    <span class="fas fa-home u-sidebar--account__list-icon mr-2"></span>
                    Dashboard
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="profile.html">
                    <span class="fas fa-user-circle u-sidebar--account__list-icon mr-2"></span>
                    Profile
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="my-tasks.html">
                    <span class="fas fa-tasks u-sidebar--account__list-icon mr-2"></span>
                    My tasks
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="projects.html">
                    <span class="fas fa-layer-group u-sidebar--account__list-icon mr-2"></span>
                    Projects <span class="badge badge-danger float-right mt-1">3</span>
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="members.html">
                    <span class="fas fa-users u-sidebar--account__list-icon mr-2"></span>
                    Members
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="activity.html">
                    <span class="fas fa-exchange-alt u-sidebar--account__list-icon mr-2"></span>
                    Activity
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="payment-methods.html">
                    <span class="fas fa-wallet u-sidebar--account__list-icon mr-2"></span>
                    Payment methods
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="plans.html">
                    <span class="fas fa-cubes u-sidebar--account__list-icon mr-2"></span>
                    Plans
                  </a>
                </li>
              </ul>
              <!-- End List Links -->

              <div class="u-sidebar--account__list-divider"></div>

              <!-- List Links -->
              <ul class="list-unstyled u-sidebar--account__list">
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="invite-friends.html">
                    <span class="fas fa-user-plus u-sidebar--account__list-icon mr-2"></span>
                    Invite friends
                  </a>
                </li>
                <li class="u-sidebar--account__list-item">
                  <a class="u-sidebar--account__list-link" href="api-token.html">
                    <span class="fas fa-key u-sidebar--account__list-icon mr-2"></span>
                    API Token
                  </a>
                </li>
              </ul>
              <!-- End List Links -->
            </div>
          </div>
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="{{ asset('front/svg/components/wave-bottom-with-dots.svg') }}" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->

  <!-- Request Payment Modal Window -->
  <div id="requestPaymentModal" class="js-modal-window u-modal-window" style="width: 600px;">
    <div class="card mb-9">
      <!-- Header -->
      <header class="card-header bg-light py-3 px-5">
        <div class="d-flex justify-content-between align-items-center">
          <h3 class="h6 mb-0">Request a payment</h3>

          <button type="button" class="close" aria-label="Close" onclick="Custombox.modal.close();">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      </header>
      <!-- End Header -->

      <div class="card-body bg-white">
        <!-- Request Payment Form -->
        <form class="js-validate js-step-form"
              data-progress-id="#progressStepForm"
              data-steps-id="#contentStepForm"
              novalidate="novalidate">
          <!-- Progress Step Form -->
          <nav id="progressStepForm" class="js-step-progress nav nav-icon nav-justified text-center p-5">
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-user-circle nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Select payer</span>
            </a>
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-file-invoice-dollar nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Payment details</span>
            </a>
            <a class="nav-item" href="javascript:;">
              <span class="nav-icon-action">
                <span class="fas fa-paperclip nav-icon-action-inner"></span>
              </span>
              <span class="d-none d-sm-block">Attachment</span>
            </a>
          </nav>
          <!-- End Progress Step Form -->

          <hr class="my-0">

          <!-- Content Step Form -->
          <div id="contentStepForm" class="p-5">
            <div id="selectPlayerStep" class="active">
              <!-- Recent Payers List -->
              <div id="recentPayersList" data-target-group="idAddNewPayer">
                <!-- Link -->
                <div class="d-flex justify-content-end mb-3">
                  <a class="js-animation-link d-inline-block small link-muted" href="javascript:;"
                     data-target="#addNewPayer"
                     data-link-group="idAddNewPayer">
                    <span class="fas fa-plus mr-1"></span>
                    Add new payer
                  </a>
                </div>
                <!-- End Link -->

                <!-- Add Members -->
                <div class="mb-4">
                  <input class="form-control" type="email" placeholder="Enter email, name, or company" aria-label="Enter email, name, or company">
                </div>
                <!-- End Add Members -->

                <!-- Most Recent Payers List -->
                <div class="mb-4">
                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img8.jpg') }}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Sebastian Diaz</h4>
                          <small class="d-block text-secondary">sebastiandiaz@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <span class="btn btn-icon btn-soft-success rounded-circle mr-3">
                          <span class="btn-icon__inner">CL</span>
                        </span>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Cler Lockhart</h4>
                          <small class="d-block text-secondary">clerlockhart@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img12.jpg') }}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Joseph Mack</h4>
                          <small class="d-block text-secondary">josephmack@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->

                  <!-- Payers List -->
                  <a class="card card-frame mb-2" href="javascript:;" data-next-step="#paymentDetailsStep">
                    <div class="card-body align-items-sm-center p-2">
                      <div class="media align-items-center">
                        <div class="u-avatar mr-3">
                          <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img10.jpg') }}" alt="Image Description">
                        </div>
                        <div class="media-body">
                          <h4 class="h6 mb-0">Eliza Donovan</h4>
                          <small class="d-block text-secondary">eliz@gmail.com</small>
                        </div>
                      </div>
                    </div>
                  </a>
                  <!-- End Payers List -->
                </div>
                <!-- End Most Recent Payers List -->
              </div>
              <!-- End Recent Payers List -->

              <!-- Add New Payer -->
              <div id="addNewPayer" data-target-group="idAddNewPayer" style="display: none;">
                <!-- Button Group -->
                <div class="btn-group btn-group-toggle d-flex mb-5">
                  <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill active" href="javascript:;"
                     data-target="#companyType"
                     data-link-group="idPayerType">
                    Company
                  </a>
                  <a class="js-animation-link btn btn-sm btn-soft-secondary flex-fill" href="javascript:;"
                     data-target="#individualType"
                     data-link-group="idPayerType">
                    Individual
                  </a>
                </div>
                <!-- End Button Group -->

                <!-- Company Type Payer -->
                <div id="companyType" data-target-group="idPayerType">
                  <div class="row">
                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="companyNameLabel" class="h6 small d-block text-uppercase">Company name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="companyName" placeholder="Pixeel" aria-label="Pixeel" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="websiteURLLabel" class="h6 small d-block text-uppercase">Website URL</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="URL" class="form-control" name="websiteURL" placeholder="example.com" aria-label="example.com" required
                                 data-msg="Please enter a valid website URL."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="contactFirstNameLabel" class="h6 small d-block text-uppercase">Contact first name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactFirstNameCompany" placeholder="Brian" aria-label="Brian" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="contactLastNameLabel" class="h6 small d-block text-uppercase">Contact last name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactLastNameCompany" placeholder="Williams" aria-label="Williams" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="emailLabel" class="h6 small d-block text-uppercase">Email</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="email" class="form-control" name="emailCompany" required placeholder="example@gmail.com" aria-label="example@gmail.com"
                                 data-msg="Please enter a valid email address."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label class="form-label">Country</label>
                      <div class="js-form-message">
                        <div class="input-group">
                          <select class="custom-select custom-select-sm">
                            <option selected>Select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->
                  </div>
                </div>
                <!-- End Company Type Payer -->

                <!-- Individual Type Payer -->
                <div id="individualType" data-target-group="idPayerType" style="display: none;">
                  <div class="row">
                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="IndivContactFirstNameLabel" class="h6 small d-block text-uppercase">Contact first name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactFirstNameIndividual" placeholder="Brian" aria-label="Brian" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="indivContactLastNameLabel" class="h6 small d-block text-uppercase">Contact last name</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="text" class="form-control" name="contactLasttNameIndividual" placeholder="Williams" aria-label="Williams" required
                                 data-msg="Please enter a valid name."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label id="IndivemailLabel" class="h6 small d-block text-uppercase">Email</label>
                      <div class="js-form-message">
                        <div class="input-group input-group-sm">
                          <input type="email" class="form-control" name="emailIndividual" placeholder="example@gmail.com" aria-label="example@gmail.com" required
                                 data-msg="Please enter a valid email address."
                                 data-error-class="u-has-error"
                                 data-success-class="u-has-success">
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->

                    <!-- Input Group -->
                    <div class="col-sm-6 mb-4">
                      <label class="form-label">Country</label>
                      <div class="js-form-message">
                        <div class="input-group">
                          <select class="custom-select custom-select-sm">
                            <option selected>Select country</option>
                            <option value="AF">Afghanistan</option>
                            <option value="AX">Åland Islands</option>
                            <option value="AL">Albania</option>
                            <option value="DZ">Algeria</option>
                            <option value="AS">American Samoa</option>
                            <option value="AD">Andorra</option>
                            <option value="AO">Angola</option>
                            <option value="AI">Anguilla</option>
                            <option value="AQ">Antarctica</option>
                            <option value="AG">Antigua and Barbuda</option>
                            <option value="AR">Argentina</option>
                            <option value="AM">Armenia</option>
                            <option value="AW">Aruba</option>
                            <option value="AU">Australia</option>
                            <option value="AT">Austria</option>
                            <option value="AZ">Azerbaijan</option>
                            <option value="BS">Bahamas</option>
                            <option value="BH">Bahrain</option>
                            <option value="BD">Bangladesh</option>
                            <option value="BB">Barbados</option>
                            <option value="BY">Belarus</option>
                            <option value="BE">Belgium</option>
                            <option value="BZ">Belize</option>
                            <option value="BJ">Benin</option>
                            <option value="BM">Bermuda</option>
                            <option value="BT">Bhutan</option>
                            <option value="BO">Bolivia, Plurinational State of</option>
                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                            <option value="BA">Bosnia and Herzegovina</option>
                            <option value="BW">Botswana</option>
                            <option value="BV">Bouvet Island</option>
                            <option value="BR">Brazil</option>
                            <option value="IO">British Indian Ocean Territory</option>
                            <option value="BN">Brunei Darussalam</option>
                            <option value="BG">Bulgaria</option>
                            <option value="BF">Burkina Faso</option>
                            <option value="BI">Burundi</option>
                            <option value="KH">Cambodia</option>
                            <option value="CM">Cameroon</option>
                            <option value="CA">Canada</option>
                            <option value="CV">Cape Verde</option>
                            <option value="KY">Cayman Islands</option>
                            <option value="CF">Central African Republic</option>
                            <option value="TD">Chad</option>
                            <option value="CL">Chile</option>
                            <option value="CN">China</option>
                            <option value="CX">Christmas Island</option>
                            <option value="CC">Cocos (Keeling) Islands</option>
                            <option value="CO">Colombia</option>
                            <option value="KM">Comoros</option>
                            <option value="CG">Congo</option>
                            <option value="CD">Congo, the Democratic Republic of the</option>
                            <option value="CK">Cook Islands</option>
                            <option value="CR">Costa Rica</option>
                            <option value="CI">Côte d'Ivoire</option>
                            <option value="HR">Croatia</option>
                            <option value="CU">Cuba</option>
                            <option value="CW">Curaçao</option>
                            <option value="CY">Cyprus</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="DK">Denmark</option>
                            <option value="DJ">Djibouti</option>
                            <option value="DM">Dominica</option>
                            <option value="DO">Dominican Republic</option>
                            <option value="EC">Ecuador</option>
                            <option value="EG">Egypt</option>
                            <option value="SV">El Salvador</option>
                            <option value="GQ">Equatorial Guinea</option>
                            <option value="ER">Eritrea</option>
                            <option value="EE">Estonia</option>
                            <option value="ET">Ethiopia</option>
                            <option value="FK">Falkland Islands (Malvinas)</option>
                            <option value="FO">Faroe Islands</option>
                            <option value="FJ">Fiji</option>
                            <option value="FI">Finland</option>
                            <option value="FR">France</option>
                            <option value="GF">French Guiana</option>
                            <option value="PF">French Polynesia</option>
                            <option value="TF">French Southern Territories</option>
                            <option value="GA">Gabon</option>
                            <option value="GM">Gambia</option>
                            <option value="GE">Georgia</option>
                            <option value="DE">Germany</option>
                            <option value="GH">Ghana</option>
                            <option value="GI">Gibraltar</option>
                            <option value="GR">Greece</option>
                            <option value="GL">Greenland</option>
                            <option value="GD">Grenada</option>
                            <option value="GP">Guadeloupe</option>
                            <option value="GU">Guam</option>
                            <option value="GT">Guatemala</option>
                            <option value="GG">Guernsey</option>
                            <option value="GN">Guinea</option>
                            <option value="GW">Guinea-Bissau</option>
                            <option value="GY">Guyana</option>
                            <option value="HT">Haiti</option>
                            <option value="HM">Heard Island and McDonald Islands</option>
                            <option value="VA">Holy See (Vatican City State)</option>
                            <option value="HN">Honduras</option>
                            <option value="HK">Hong Kong</option>
                            <option value="HU">Hungary</option>
                            <option value="IS">Iceland</option>
                            <option value="IN">India</option>
                            <option value="ID">Indonesia</option>
                            <option value="IR">Iran, Islamic Republic of</option>
                            <option value="IQ">Iraq</option>
                            <option value="IE">Ireland</option>
                            <option value="IM">Isle of Man</option>
                            <option value="IL">Israel</option>
                            <option value="IT">Italy</option>
                            <option value="JM">Jamaica</option>
                            <option value="JP">Japan</option>
                            <option value="JE">Jersey</option>
                            <option value="JO">Jordan</option>
                            <option value="KZ">Kazakhstan</option>
                            <option value="KE">Kenya</option>
                            <option value="KI">Kiribati</option>
                            <option value="KP">Korea, Democratic People's Republic of</option>
                            <option value="KR">Korea, Republic of</option>
                            <option value="KW">Kuwait</option>
                            <option value="KG">Kyrgyzstan</option>
                            <option value="LA">Lao People's Democratic Republic</option>
                            <option value="LV">Latvia</option>
                            <option value="LB">Lebanon</option>
                            <option value="LS">Lesotho</option>
                            <option value="LR">Liberia</option>
                            <option value="LY">Libya</option>
                            <option value="LI">Liechtenstein</option>
                            <option value="LT">Lithuania</option>
                            <option value="LU">Luxembourg</option>
                            <option value="MO">Macao</option>
                            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                            <option value="MG">Madagascar</option>
                            <option value="MW">Malawi</option>
                            <option value="MY">Malaysia</option>
                            <option value="MV">Maldives</option>
                            <option value="ML">Mali</option>
                            <option value="MT">Malta</option>
                            <option value="MH">Marshall Islands</option>
                            <option value="MQ">Martinique</option>
                            <option value="MR">Mauritania</option>
                            <option value="MU">Mauritius</option>
                            <option value="YT">Mayotte</option>
                            <option value="MX">Mexico</option>
                            <option value="FM">Micronesia, Federated States of</option>
                            <option value="MD">Moldova, Republic of</option>
                            <option value="MC">Monaco</option>
                            <option value="MN">Mongolia</option>
                            <option value="ME">Montenegro</option>
                            <option value="MS">Montserrat</option>
                            <option value="MA">Morocco</option>
                            <option value="MZ">Mozambique</option>
                            <option value="MM">Myanmar</option>
                            <option value="NA">Namibia</option>
                            <option value="NR">Nauru</option>
                            <option value="NP">Nepal</option>
                            <option value="NL">Netherlands</option>
                            <option value="NC">New Caledonia</option>
                            <option value="NZ">New Zealand</option>
                            <option value="NI">Nicaragua</option>
                            <option value="NE">Niger</option>
                            <option value="NG">Nigeria</option>
                            <option value="NU">Niue</option>
                            <option value="NF">Norfolk Island</option>
                            <option value="MP">Northern Mariana Islands</option>
                            <option value="NO">Norway</option>
                            <option value="OM">Oman</option>
                            <option value="PK">Pakistan</option>
                            <option value="PW">Palau</option>
                            <option value="PS">Palestinian Territory, Occupied</option>
                            <option value="PA">Panama</option>
                            <option value="PG">Papua New Guinea</option>
                            <option value="PY">Paraguay</option>
                            <option value="PE">Peru</option>
                            <option value="PH">Philippines</option>
                            <option value="PN">Pitcairn</option>
                            <option value="PL">Poland</option>
                            <option value="PT">Portugal</option>
                            <option value="PR">Puerto Rico</option>
                            <option value="QA">Qatar</option>
                            <option value="RE">Réunion</option>
                            <option value="RO">Romania</option>
                            <option value="RU">Russian Federation</option>
                            <option value="RW">Rwanda</option>
                            <option value="BL">Saint Barthélemy</option>
                            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                            <option value="KN">Saint Kitts and Nevis</option>
                            <option value="LC">Saint Lucia</option>
                            <option value="MF">Saint Martin (French part)</option>
                            <option value="PM">Saint Pierre and Miquelon</option>
                            <option value="VC">Saint Vincent and the Grenadines</option>
                            <option value="WS">Samoa</option>
                            <option value="SM">San Marino</option>
                            <option value="ST">Sao Tome and Principe</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SN">Senegal</option>
                            <option value="RS">Serbia</option>
                            <option value="SC">Seychelles</option>
                            <option value="SL">Sierra Leone</option>
                            <option value="SG">Singapore</option>
                            <option value="SX">Sint Maarten (Dutch part)</option>
                            <option value="SK">Slovakia</option>
                            <option value="SI">Slovenia</option>
                            <option value="SB">Solomon Islands</option>
                            <option value="SO">Somalia</option>
                            <option value="ZA">South Africa</option>
                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                            <option value="SS">South Sudan</option>
                            <option value="ES">Spain</option>
                            <option value="LK">Sri Lanka</option>
                            <option value="SD">Sudan</option>
                            <option value="SR">Suriname</option>
                            <option value="SJ">Svalbard and Jan Mayen</option>
                            <option value="SZ">Swaziland</option>
                            <option value="SE">Sweden</option>
                            <option value="CH">Switzerland</option>
                            <option value="SY">Syrian Arab Republic</option>
                            <option value="TW">Taiwan, Province of China</option>
                            <option value="TJ">Tajikistan</option>
                            <option value="TZ">Tanzania, United Republic of</option>
                            <option value="TH">Thailand</option>
                            <option value="TL">Timor-Leste</option>
                            <option value="TG">Togo</option>
                            <option value="TK">Tokelau</option>
                            <option value="TO">Tonga</option>
                            <option value="TT">Trinidad and Tobago</option>
                            <option value="TN">Tunisia</option>
                            <option value="TR">Turkey</option>
                            <option value="TM">Turkmenistan</option>
                            <option value="TC">Turks and Caicos Islands</option>
                            <option value="TV">Tuvalu</option>
                            <option value="UG">Uganda</option>
                            <option value="UA">Ukraine</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="GB">United Kingdom</option>
                            <option value="US">United States</option>
                            <option value="UM">United States Minor Outlying Islands</option>
                            <option value="UY">Uruguay</option>
                            <option value="UZ">Uzbekistan</option>
                            <option value="VU">Vanuatu</option>
                            <option value="VE">Venezuela, Bolivarian Republic of</option>
                            <option value="VN">Viet Nam</option>
                            <option value="VG">Virgin Islands, British</option>
                            <option value="VI">Virgin Islands, U.S.</option>
                            <option value="WF">Wallis and Futuna</option>
                            <option value="EH">Western Sahara</option>
                            <option value="YE">Yemen</option>
                            <option value="ZM">Zambia</option>
                            <option value="ZW">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- End Input Group -->
                  </div>
                </div>
                <!-- End Individual Type Payer -->
              </div>
              <!-- End Add New Payer -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" data-next-step="#paymentDetailsStep">Next</button>
                <button type="submit" class="btn btn-sm btn-soft-secondary transition-3d-hover" onclick="Custombox.modal.close();">Cancel</button>
              </div>
              <!-- End Buttons -->
            </div>

            <div id="paymentDetailsStep" style="display: none;">
              <div class="row">
                <!-- Input Group -->
                <div class="col-sm-6 mb-4">
                  <label id="amountLabel" class="h6 small d-block text-uppercase">Amount</label>
                  <div class="js-form-message">
                    <div class="input-group input-group-sm">
                      <input type="number" class="form-control" name="amount" placeholder="Pixeel" aria-label="Pixeel" aria-describedby="amountLabel" required
                             data-msg="Please enter a valid name."
                             data-error-class="u-has-error"
                             data-success-class="u-has-success">
                    </div>
                  </div>
                </div>
                <!-- End Input Group -->

                <!-- Select -->
                <div class="col-sm-6 mb-4">
                  <label class="form-label">Currency</label>

                  <div class="input-group">
                    <select class="custom-select custom-select-sm">
                      <option value="usd">USD</option>
                      <option value="euro">Euro</option>
                      <option value="gbp">GBP</option>
                    </select>
                  </div>
                </div>
                <!-- End Select -->
              </div>

              <!-- Input -->
              <div class="mb-4">
                <label id="descriptionLabel" class="h6 small d-block text-uppercase">Description</label>
                <div class="js-form-message">
                  <div class="input-group input-group-sm">
                    <textarea class="form-control" rows="2" name="description" placeholder="Your payer will see this description on the payment request" aria-label="Your payer will see this description on the payment request" aria-describedby="descriptionLabel" required
                              data-msg="Please enter a valid reason."
                              data-error-class="u-has-error"
                              data-success-class="u-has-success"></textarea>
                  </div>
                </div>
              </div>
              <!-- End Input -->

              <!-- Datepicker -->
              <div class="mb-4">
                <label id="paymentDueByLabel" class="form-label">Payment due by</label>
                <div id="datepickerWrapper" class="u-datepicker u-datepicker--top input-group input-group-sm">
                  <input class="js-range-datepicker form-control bg-transparent" type="text" placeholder="Due date" aria-label="Due date" aria-describedby="paymentDueByLabel" required
                         data-rp-wrapper="#datepickerWrapper"
                         data-rp-date-format="d/m/Y">
                  <div class="input-group-append">
                    <span class="input-group-text rounded-right">
                      <span class="far fa-calendar-alt"></span>
                    </span>
                  </div>
                </div>
              </div>
              <!-- End Datepicker -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-sm btn-primary transition-3d-hover mr-1" data-next-step="#attachDocumentsStep">Next</button>
                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;" data-previous-step="#selectPlayerStep">Back</a>
              </div>
              <!-- End Buttons -->
            </div>

            <div id="attachDocumentsStep" style="display: none;">
              <div class="mb-4">
                <p>Attach up to 3 documents (like your invoice or work contact) to your payment request.</p>
                <p>Do not have an invoice? <a href="#">Create a professional invoice for free and upload below.</a></p>
              </div>

              <!-- File Attachment Input -->
              <label class="file-attachment-input mb-4" for="fileAttachmentInput">
                Browse your device and upload documents
                <small class="d-block text-muted">Maximum file size 10MB</small>
                <input id="fileAttachmentInput" name="file-attachment" type="file" class="file-attachment-input__label">
              </label>
              <!-- End File Attachment Input -->

              <!-- Buttons -->
              <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-sm btn-primary transition-3d-hover mr-1">Request Payment</button>
                <a class="btn btn-sm btn-soft-secondary transition-3d-hover mr-1" href="javascript:;" data-previous-step="#paymentDetailsStep">Back</a>
              </div>
              <!-- End Buttons -->
            </div>
          </div>
          <!-- End Content Step Form -->
        </form>
        <!-- End Request Payment Form -->
      </div>
    </div>
  </div>
  <!-- End Request Payment Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('front/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('front/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('front/vendor/bootstrap/bootstrap.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('front/vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('front/vendor/svg-injector/dist/svg-injector.min.js') }}"></script>
  <script src="{{ asset('front/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('front/vendor/custombox/dist/custombox.min.js') }}"></script>
  <script src="{{ asset('front/vendor/custombox/dist/custombox.legacy.min.js') }}"></script>
  <script src="{{ asset('front/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
  <script src="{{ asset('front/vendor/appear.js') }}"></script>
  <script src="{{ asset('front/vendor/circles/circles.min.js') }}"></script>

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

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
