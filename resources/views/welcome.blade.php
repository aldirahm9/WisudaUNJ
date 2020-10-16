
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Wisuda Digital UNJ</title>

  <meta name="title" content="Wisuda Digital UNJ">
  <meta name="description" content="Udah wisudanya? Skuy poto-poto dulu di kampus bareng pacar, gebetan, abang, empok, encing, enyak, babeh.">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://metatags.io/">
  <meta property="og:title" content="Wisuda Digital UNJ">
  <meta property="og:description" content="Udah wisudanya? Skuy poto-poto dulu di kampus bareng pacar, gebetan, abang, empok, encing, enyak, babeh.">
  <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://metatags.io/">
  <meta property="twitter:title" content="Wisuda Digital UNJ">
  <meta property="twitter:description" content="Udah wisudanya? Skuy poto-poto dulu di kampus bareng pacar, gebetan, abang, empok, encing, enyak, babeh.">
  <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('logounj.png') }}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('front/vendor/font-awesome/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/fancybox/jquery.fancybox.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('front/vendor/cubeportfolio/css/cubeportfolio.min.css') }}">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">

  <style>
      .bg-unj {
          background: #006F45 !important;
      }

      .text-unj {
          color: #006f45 !important;
      }
  </style>
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header-center-aligned-nav u-header--bg-transparent u-header--white-nav-links-md u-header--sub-menu-dark-bg-md u-header--abs-top mt-5"
          data-header-fix-moment="500"
          data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <div class="u-header-center-aligned-nav__col">
            <!-- Logo -->
            <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="index.html" aria-label="Front">
              <img src="{{ asset('logounj.png') }}" alt="logo UNJ" style="width: 46px; height: auto">
              <span class="ml-2 text-white">Wisuda Digital UNJ</span>
            </a>
            <!-- End Logo -->

            <!-- Responsive Toggle Button -->
            <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white"
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
          </div>

          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              @if (Auth::check())
                <li class="nav-item d-md-none">
                  <a href="{{ route('register') }}" class="nav-link">Masuk</a>
                </li>
              @else
                <li class="nav-item d-md-none">
                  <a href="{{ route('register') }}" class="nav-link">Daftar</a>
                </li>
              @endif
            </ul>
          </div>
          <!-- End Navigation -->

          <!-- Last Item -->
          <div class="u-header-center-aligned-nav__col u-header-center-aligned-nav__col-last-item">
            @if (Auth::check())
              <a class="btn btn-sm btn-unj transition-3d-hover" href="{{route('register')}}">
                Masuk
              </a>
            @else
              <a class="btn btn-sm btn-unj transition-3d-hover" href="{{route('register')}}">
                Daftar
              </a>
            @endif
          </div>
          <!-- End Last Item -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Hero v1 Section -->
    <div class="u-hero-v1">
      <!-- Hero Carousel Main -->
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset('img/wisuda1.jpg') }});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-8 position-relative">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Wisuda UNJ 2020
                  </span>
                  <h1 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    #wisuda<span class="font-weight-semi-bold">Digital</span>UNJ
                  </h1>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url({{ asset('img/wisuda2.jpg') }});">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-8">
                  <span class="d-block h4 text-white font-weight-light mb-2"
                        data-scs-animation-in="fadeInUp">
                    Wisuda UNJ 2020
                  </span>
                  <h2 class="text-white display-4 font-size-md-down-5 mb-0"
                      data-scs-animation-in="fadeInUp"
                      data-scs-animation-delay="200">
                    #wisuda<span class="font-weight-semi-bold">Bareng</span>UNJ
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Main -->

      <!-- Slick Paging -->
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
      <!-- End Slick Paging -->

      <!-- Hero Carousel Secondary -->
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        <div class="js-slide">
          <!-- Slide #1 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="h5 text-muted">
                    <strong class="d-block">01.</strong>
                    <span class="d-block text-unj">Fancy Photobooth</span>
                  </h3>
                  <p class="mb-0">Jangan lewatkan momen wisuda mu tanpa berfoto dengan keluarga dan kerabat.</p>
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block bg-unj u-hero-v1__last">
              <div class="u-hero-v1__last-inner">
                <h3 class="h5 text-white">
                  <strong class="u-hero-v1__last-next text-success">Next:</strong> Drive Thru
                </h3>
                <p class="text-white-70 mb-0">Tetap menjaga diri dari virus corona dengan mengutamakan protokol kesehatan.</p>
              </div>
            </div>
          </div>
          <!-- End Slide #1 -->
        </div>

        <div class="js-slide">
          <!-- Slide #2 -->
          <div class="d-flex align-items-center bg-white u-hero-v1__secondary">
            <div class="container space-2">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="h5 text-muted">
                    <strong class="d-block">02.</strong>
                    <span class="d-block text-danger">Drive Thru</span>
                  </h3>
                  <p class="mb-0">Tetap menjaga diri dari virus corona dengan mengutamakan protokol kesehatan.</p>
                </div>
              </div>
            </div>

            <div class="w-100 h-100 d-none d-lg-inline-block bg-danger u-hero-v1__last">
              <div class="u-hero-v1__last-inner">
                <h3 class="h5 text-white">
                  <strong class="u-hero-v1__last-prev">Prev:</strong> Fancy Photobooth
                </h3>
                <p class="text-white-70 mb-0">Jangan lewatkan momen wisuda mu tanpa berfoto dengan keluarga dan kerabat.</p>
              </div>
            </div>
          </div>
          <!-- End Slide #2 -->
        </div>
      </div>
      <!-- End Hero Carousel Secondary -->
    </div>
    <!-- End Hero v1 Section -->

    <hr class="my-0">

    <!-- Front in Frames Section -->
    <div class="overflow-hidden">
      <div class="container space-2 space-md-3">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-7 mb-lg-0">
            <div class="pr-md-4">
              <!-- Title -->
              <div class="mb-7">
                <span class="u-label u-label--sm u-label--warning mb-2">Tentang</span>
                <h2 class="text-danger">Wisuda <span class="font-weight-semi-bold">digital</span></h2>
                <p>Berangkat dari kondisi pandemi virus corona, Universitas Negeri Jakarta berinisiatif untuk mengubah tata cara pelaksanaan wisuda untuk semester 111/112.</p>
                <p>Selain pelaksanaan wisuda yang dilakukan secara online, rangkaian berikutnya akan membuat kamu tidak kehilangan momen-momen wisuda yang dilakukan dengan cara offline.</p>
                <p>Untuk menghadirkan hal tersebut, UNJ membuat rangkaian acara <strong class="text-warning">Photoshoot Wisuda UNJ</strong>. Kamu masih bisa berfoto-foto bersama keluarga dan kerabat di lingkungan kampus A UNJ</p>
              </div>
              <!-- End Title -->

              <a class="btn btn-sm btn-unj btn-wide transition-3d-hover" href="{{ route('register') }}">Daftar <span class="fas fa-angle-right ml-2"></span></a>
            </div>
          </div>

          <div class="col-lg-6 position-relative">
            <!-- Image Gallery -->
            <div class="row mx-gutters-2">
              <div class="col-5 align-self-end px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/photoshot1.JPG') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #01"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/photoshot1.JPG') }}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-7 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/photoshot2.JPG') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #02"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/photoshot2.JPG') }}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 offset-1 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/photoshot3.JPG') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #03"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/photoshot3.JPG') }}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>

              <div class="col-5 px-2 mb-3">
                <!-- Fancybox -->
                <a class="js-fancybox u-media-viewer" href="javascript:;"
                   data-src="{{ asset('img/photoshot4.JPG') }}"
                   data-fancybox="lightbox-gallery-hidden"
                   data-caption="Front in frames - image #04"
                   data-speed="700">
                  <img class="img-fluid rounded" src="{{ asset('img/photoshot4.JPG') }}" alt="Image Description">

                  <span class="u-media-viewer__container">
                    <span class="u-media-viewer__icon">
                      <span class="fas fa-plus u-media-viewer__icon-inner"></span>
                    </span>
                  </span>
                </a>
                <!-- End Fancybox -->
              </div>
            </div>
            <!-- End Image Gallery -->

            <!-- SVG Background Shape -->
            <div id="SVGbgShapeID1" class="svg-preloader w-100 content-centered-y z-index-n1">
              <figure class="ie-soft-triangle-shape">
                <img class="js-svg-injector" src="{{ asset('front/svg/components/soft-triangle-shape.svg') }}" alt="Image Description"
                     data-parent="#SVGbgShapeID1">
              </figure>
            </div>
            <!-- End SVG Background Shape -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Front in Frames Section -->

    {{-- <!-- Devices v2 Section -->
    <div id="SVGSubscribe" class="svg-preloader bg-primary u-devices-v2">
      <div class="container space-2 space-md-3 position-relative z-index-2">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto">
          <span class="btn btn-lg btn-icon btn-white rounded-circle mb-4">
            <span class="fas fa-paper-plane text-primary btn-icon__inner"></span>
          </span>
          <h2 class="h1 text-white">Device <span class="font-weight-semi-bold">friendly</span> features</h2>
          <p class="lead text-white-70 mb-0">Your website is fully responsive so visitors can view your content from their choice of device.</p>
        </div>
        <!-- End Title -->
      </div>

      <!-- Devices v2 -->
      <div class="d-none d-lg-block">
        <!-- SVG Tablet Mockup -->
        <div class="u-devices-v2__tablet">
          <div class="w-75 u-devices-v2__tablet-svg">
            <figure class="ie-devices-v2-tablet">
              <img class="js-svg-injector" src="{{ asset('front/svg/components/tablet.svg') }}" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGtabletImg1", "newPath": "{{ asset('front/img/533x711/img1.jpg') }}"}
                   ]'
                   data-parent="#SVGSubscribe">
            </figure>
          </div>
        </div>
        <!-- End SVG Tablet Mockup -->

        <!-- SVG Phone Mockup -->
        <div class="u-devices-v2__phone">
          <div class="w-75 u-devices-v2__phone-svg">
            <figure class="ie-devices-v2-iphone">
              <img class="js-svg-injector" src="{{ asset('front/svg/components/iphone.svg') }}" alt="Image Description"
                   data-img-paths='[
                     {"targetId": "#SVGiphoneImg1", "newPath": "{{ asset('front/img/282x500/img1.jpg') }}"}
                   ]'
                   data-parent="#SVGSubscribe">
            </figure>
          </div>
        </div>
        <!-- End SVG Phone Mockup -->
      </div>
      <!-- End Devices v2 -->

      <!-- SVG Background Shape -->
      <figure class="w-100 content-centered-y position-absolute right-0 bottom-0">
        <img class="js-svg-injector" src="{{ asset('front/svg/components/process-pointer-1.svg') }}" alt="Image Description"
             data-parent="#SVGSubscribe">
      </figure>
      <!-- End SVG Background Shape -->
    </div>
    <!-- End Devices v2 Section -->

    <!-- Team Section -->
    <div class="container space-2 space-md-3">
      <!-- Title -->
      <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
        <span class="u-label u-label--sm u-label--success mb-2">Our Team</span>
        <h2 class="text-primary">Trust the <span class="font-weight-semi-bold">professionals</span></h2>
        <p>Our top professionals are ready to help with your business</p>
      </div>
      <!-- End Title -->

      <!-- Slick Carousel -->
      <div class="js-slick-carousel u-slick u-slick--gutters-3"
           data-slides-show="2"
           data-slides-scroll="1"
           data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
           data-responsive='[{
             "breakpoint": 992,
             "settings": {
               "slidesToShow": 1
             }
           }, {
             "breakpoint": 768,
             "settings": {
               "slidesToShow": 1
             }
           }, {
             "breakpoint": 554,
             "settings": {
               "slidesToShow": 1
             }
           }]'>
        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Maria Muszynska</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">#maria</span>
              </div>
              <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-google btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('front/img/350x400/img1.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Jack Wayley</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">#jack</span>
              </div>
              <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-google btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('front/img/350x400/img2.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Emmely Jackson</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">#emmely</span>
              </div>
              <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-google btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('front/img/350x400/img3.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>

        <div class="js-slide px-3">
          <!-- Team -->
          <div class="row">
            <div class="col-sm-6 d-sm-flex align-content-sm-start flex-sm-column text-center text-sm-left mb-7 mb-sm-0">
              <div class="w-100">
                <h3 class="h5 mb-4">Mark McManus</h3>
              </div>
              <div class="d-inline-block">
                <span class="badge badge-primary badge-pill badge-bigger mb-3">#mark</span>
              </div>
              <p class="font-size-1">I am an ambitious workaholic, but apart from that, pretty simple person.</p>

              <!-- Social Networks -->
              <ul class="list-inline mt-auto mb-0">
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-google btn-icon__inner"></span>
                  </a>
                </li>
                <li class="list-inline-item mx-0">
                  <a class="btn btn-sm btn-icon btn-soft-secondary" href="#">
                    <span class="fab fa-twitter btn-icon__inner"></span>
                  </a>
                </li>
              </ul>
              <!-- End Social Networks -->
            </div>
            <div class="col-sm-6">
              <img class="img-fluid rounded mx-auto" src="{{ asset('front/img/350x400/img4.jpg') }}" alt="Image Description">
            </div>
          </div>
          <!-- End Team -->
        </div>
      </div>
      <!-- End Slick Carousel -->
    </div>
    <!-- End Team Section -->

    <!-- Blog Grid Section -->
    <div class="bg-light">
      <div class="container space-2 space-md-3">
        <!-- Title -->
        <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-9">
          <span class="u-label u-label--sm u-label--success mb-2">News</span>
          <h2 class="text-primary">Read our <span class="font-weight-semi-bold">news &amp; blogs</span></h2>
          <p>Our duty towards you is to share our experience we're reaching in our work path with you.</p>
        </div>
        <!-- End Title -->

        <!-- News Carousel -->
        <div class="js-slick-carousel u-slick u-slick--equal-height u-slick--gutters-2"
             data-slides-show="4"
             data-slides-scroll="1"
             data-pagi-classes="text-center u-slick__pagination mt-7 mb-0"
             data-responsive='[{
               "breakpoint": 1200,
               "settings": {
                 "slidesToShow": 3
               }
             }, {
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">May 15, 2018</small>
              <h2 class="h5">
                <a href="../blog/single-article-classic.html">InVision design forward fund</a>
              </h2>
              <p class="mb-0">Clark Valberg is the founder and CEO of InVision.</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Andrea Gard</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>

          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">May 30, 2018</small>
              <h3 class="h5">
                <a href="../blog/single-article-classic.html">Design principles</a>
              </h3>
              <p class="mb-0">The biggest collections of design principles on the internet</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img2.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Charlotte Moore</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>

          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">April 1, 2018</small>
              <h3 class="h5">
                <a href="../blog/single-article-classic.html">Touch yourself</a>
              </h3>
              <p class="mb-0">Everyone's are different, and they can even change</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img4.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Scott Levine</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>

          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">April 3, 2018</small>
              <h3 class="h5">
                <a href="../blog/single-article-classic.html">Respect always comes first</a>
              </h3>
              <p class="mb-0">The past years have been remarkable for web technologies.</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Andrea Gard</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>

          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">April 7, 2018</small>
              <h3 class="h5">
                <a href="../blog/single-article-classic.html">5 basic tips for illustrating</a>
              </h3>
              <p class="mb-0">Tips and tricks that most people wouldn't highlight when illustrating.</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img4.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Scott Levine</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>

          <!-- Blog Grid -->
          <div class="js-slide card border-0 mb-3">
            <div class="card-body p-5">
              <small class="d-block text-muted mb-2">April 15, 2018</small>
              <h3 class="h5">
                <a href="../blog/single-article-classic.html">Breathing in the Crisp Air of Lake</a>
              </h3>
              <p class="mb-0">Sailing here was a surreal experience.</p>
            </div>

            <div class="card-footer pb-5 px-0 mx-5">
              <div class="media align-items-center">
                <div class="u-sm-avatar mr-3">
                  <img class="img-fluid rounded-circle" src="{{ asset('front/img/100x100/img1.jpg') }}" alt="Image Description">
                </div>
                <div class="media-body">
                  <h4 class="small mb-0"><a href="../blog/single-article-classic.html">Andrea Gard</a></h4>
                </div>
              </div>
            </div>
            <!-- End Blog Grid -->
          </div>
        </div>
        <!-- End News Carousel -->
      </div>
    </div>
    <!-- End Blog Grid Section -->
  </main>
  <!-- ========== END MAIN ========== --> --}}

  <!-- ========== FOOTER ========== -->
  <footer class="container space-top-2 space-top-md-3">
    <div class="border-bottom">
      <div class="row mb-7">
        <div class="col-lg-4 mb-7 mb-lg-0">
          <div class="d-inline-flex align-self-start flex-column h-100">
            <!-- Logo -->
            <a class="d-flex align-items-center mb-3" href="/" aria-label="Front">
              <img src="{{ asset('logounj.png') }}" alt="logo UNJ" style="height:36px; width:auto;">
              <span class="text-unj ml-2">Wisuda Digital UNJ</span>
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

  <!-- Go to Top -->
  <a class="js-go-to u-go-to bg-unj" href="#"
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
  <script src="{{ asset('front/vendor/fancybox/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('front/vendor/slick-carousel/slick/slick.js') }}"></script>
  <script src="{{ asset('front/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('front/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>

  <!-- JS Front -->
  <script src="{{ asset('front/js/hs.core.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.header.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.fancybox.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.slick-carousel.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.focus-state.js') }}"></script>
  <script src="{{ asset('front/js/components/hs.cubeportfolio.js') }}"></script>
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

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate');

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
