<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Register - Photoshoot Wisuda UNJ</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('logounj.png') }}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{asset('front/vendor/font-awesome/css/fontawesome-all.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/vendor/animate.css/animate.min.css')}}">
  <link rel="stylesheet" href="{{asset('front/vendor/slick-carousel/slick/slick.css')}}">

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <style>
        .class-tanggal {
            font-size: 20px!important;
        }
        .table-condensed  tbody tr td.disabled{
            color: red!important
        }
    </style>
  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{ asset('front/css/theme.css') }}">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--bg-transparent u-header--abs-top">
    <div class="u-header__section">
      <div id="logoAndNav" class="container-fluid">
        <!-- Nav -->
        <nav class="navbar navbar-expand u-header__navbar">
          {{-- <!-- White Logo -->
          <a class="d-none d-lg-flex navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white" href="../home/index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#E1E4EA" opacity=".65" d="M23,41.1L23,41.1c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C41,33,32.9,41.1,23,41.1z"/>
              <path class="fill-white" opacity=".5" d="M28,36L28,36c-9.9,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3C43,0.1,46,3.1,46,6.7v11.4C46,28,38,36,28,36z"/>
              <path class="fill-white" opacity=".7" d="M18,46.1L18,46.1c-10,0-18-8-18-18l0,0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6v11.4C35.9,38.1,27.9,46.1,18,46.1z"/>
              <path class="fill-primary" d="M17.4,34.1V18.4h10.2v2.9h-6.4v3.4H26v2.9h-4.8v6.5H17.4z"/>
            </svg>
            <span class="u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End White Logo -->

          <!-- Default Logo -->
          <a class="d-flex d-lg-none navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-collapsed" href="index.html" aria-label="Front">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
              <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
              <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
              <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
            </svg>
            <span class="d-inline-block u-header__navbar-brand-text">Front</span>
          </a>
          <!-- End Default Logo --> --}}


        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN ========== -->
  <main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative height-lg-100vh">
      <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-unj height-lg-100vh px-0">
        <div class="w-100 p-5">
          <!-- SVG Quote -->
          <figure class="text-center mb-5 mx-auto">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-fade="true"
               data-nav-for="#testimonialsNavPagination">
            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Selamat bagi wisudawan yang telah berhasil meraih kelulusan. Semoga ilmu yang diperoleh bisa berguna bagi kemajuan bangsa!</blockquote>
                <h1 class="h6 text-white-70">Dr. Komaruddin. M.Si, Rektor UNJ</h1>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Selamat bagi para wisudawan. Semoga sukses di dunia kerja ataupun di dunia usaha!</blockquote>
                <h2 class="h6 text-white-70">Prof. Dr. Suyono, M.Si, WR1 UNJ</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Selamat bagi wisudawan yang telah berhasil meraih kelulusan. Semoga ilmu pengetahuan yang sudah di dapat di bangku perkuliahan teraktualisasi dan bermanfaat bagi orang banyak!</blockquote>
                <h2 class="h6 text-white-70">Dr. Agus Dudung R, M.Pd, WR2 UNJ</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Selamat hari kelulusan bagi para wisudawan. Semoga kesuksesan akan menyambutmu di masa depan!</blockquote>
                <h2 class="h6 text-white-70">Dr. H. Abdul Sukur, S.Pd., M.Si, WR3 UNJ</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">Selamat bagi para wisudawan. Semoga sukses mengikuti di tiap langkah berikutnya!</blockquote>
                <h2 class="h6 text-white-70">Dr. Totok Bintoro, M.Pd, WR4 UNJ</h2>
              </div>
              <!-- End Testimonials -->
            </div>

            {{-- <div class="js-slide">
              <!-- Testimonials -->
              <div class="w-md-80 w-lg-60 text-center mx-auto">
                <blockquote class="h5 text-white font-weight-normal mb-4">I love Front! I love the ease of use, I love the fact that I have total creative freedom...</blockquote>
                <h3 class="h6 text-white-70">Charlotte Moore, Amazon</h3>
              </div>
              <!-- End Testimonials -->
            </div> --}}
          </div>
          <!-- End Testimonials Carousel Main -->

          <!-- Testimonials Carousel Pagination -->
          <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
               data-infinite="true"
               data-autoplay="true"
               data-speed="5000"
               data-center-mode="true"
               data-slides-show="3"
               data-is-thumbs="true"
               data-focus-on-select="true"
               data-nav-for="#testimonialsNavMain">
            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="{{ asset('img/rektor.jpg') }}" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="{{ asset('img/wr1.jpg') }}" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="{{ asset('img/wr2.png') }}" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="{{ asset('img/wr3.png') }}" alt="Image Description">
              </div>
            </div>

            <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="{{ asset('img/wr4.png') }}" alt="Image Description">
              </div>
            </div>

            {{-- <div class="js-slide">
              <div class="u-avatar mx-auto">
                <img class="img-fluid rounded-circle" src="front/img/100x100/img2.jpg" alt="Image Description">
              </div>
            </div> --}}
          </div>
          <!-- End Testimonials Carousel Pagination -->
        </div>
      </div>

      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-10 col-xl-10 offset-md-2 offset-lg-1 offset-xl-1 space-3 space-lg-0">
            <!-- Form -->
            <form class="js-validate mt-3" action="{{ route('register') }}" method="POST" id="formRegister">
                {{csrf_field()}}
              <!-- Title -->
              <div class="mb-5">
                <h2 class="h3 text-success font-weight-normal mb-0">Selamat <span class="font-weight-semi-bold">wisuda</span>!</h2>
                <p>Registrasi untuk melakukan photoshoot.</p>
              </div>
              <!-- End Title -->

              <div class="row">

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                  <label class="form-label" for="signinSrNama">Nama Lengkap</label>
                  <input  class="form-control" name="nama" id="signinSrNama" placeholder="Nama Wisudawan" aria-label="NAMA" required
                         data-msg="Nama Mahasiswa harus diisi"
                         data-error-class="u-has-error"
                         data-success-class="u-has-success"
                         autocomplete="off">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                  <label class="form-label" for="signinSrNRM">NRM / NIM</label>
                  <input  class="form-control" name="nrm" id="signinSrNRM" placeholder="NRM / NIM" aria-label="NRM" required
                         data-msg="Masukkan NRM / NIM yang valid."
                         data-error-class="u-has-error"
                         data-success-class="u-has-success"
                         onkeypress="validate(event)"
                         maxlength="10"
                         minlength="10"
                         autocomplete="off">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                  <label class="form-label" for="signinSrFakultas">Fakultas</label>
                  <select class="custom-select" name="fakultas" id="fakultas" required>
                      <option value="" selected disabled hidden>Fakultas</option>
                      @foreach ($fakultas as $item)
                        <option id="fakultas{{$item->id}}" value="{{$item->id}}">{{$item->nama_fakultas}}</option>
                        {{-- <option title="{{Carbon\Carbon::parse($item->tanggal_akhir_photoshoot)->lte(Carbo
                        {{Carbon\Carbon::parse($item->tanggal_akhir_photoshoot)->lte(Carbon\Carbon::now()) ? 'disabled' : ''}} id="fakultas{{$item->id}}" value="{{$item->id}}">{{$item->nama_fakultas}}</option> --}}
                      @endforeach
                  </select>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-3">
                  <label class="form-label" for="signinSrTanggal">Tanggal</label>
                  <input type="text" class="form-control" name="tanggal_kedatangan" id="signinSrTanggal" aria-label="TANGGAL_KEDATANGAN" required
                         data-msg="Tanggal harus diisi"
                         data-error-class="u-has-error"
                         data-success-class="u-has-success"
                         onkeypress="return false"
                         autocomplete="off">
                </div>
                <div class="js-form-message form-group col-md-3 pl-md-0 ">
                  <label class="form-label" for="signinSrJam">Jam</label>
                <select class="custom-select "name="jam" id="signinJam" required>
                    <option selected disabled hidden></option>
                    <option value="9">09.00</option>
                    <option value="10">10.00</option>
                    <option value="11">11.00</option>
                    <option value="12">12.00</option>
                    <option value="13">13.00</option>
                    <option value="14">14.00</option>
                    <option value="15">15.00</option>
                    <option value="16">16.00</option>
                </select>
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                  <label class="form-label" for="signinSrPassword">
                    <span class="d-flex justify-content-between align-items-center">
                      Password
                      {{-- <a class="link-muted text-capitalize font-weight-normal" href="recover-account.html">Forgot Password?</a> --}}
                    </span>
                  </label>
                  <input minlength="6" type="password" class="form-control" name="password" id="signinSrPassword" placeholder="********" aria-label="********" required
                         data-msg="Minimal password 6 karakter"
                         data-error-class="u-has-error"
                         data-success-class="u-has-success"
                         autocomplete="off">
                </div>
                <!-- End Form Group -->

                <!-- Form Group -->
                <div class="js-form-message form-group col-md-6">
                  <label class="form-label" for="signinSrConfirmPassword">
                    <span class="d-flex justify-content-between align-items-center">
                      Konfirmasi Password
                      {{-- <a class="link-muted text-capitalize font-weight-normal" href="recover-account.html">Forgot Password?</a> --}}
                    </span>
                  </label>
                  <input type="password" class="form-control" name="password_confirmation" id="signinSrConfirmPassword" placeholder="********" aria-label="********" required
                         data-msg="password tidak sama"
                         data-error-class="u-has-error"
                         data-success-class="u-has-success"
                         autocomplete="off">
                </div>
                <!-- End Form Group -->
                <div class="col-12">
                  <small class="text-warning text-small">*Password digunakan untuk mencetak bukti pendaftaran.</small><br>
                  <small class="text-danger text-small">*Diharap untuk wisudawan S2 & S3 agar memilih fakultas dengan program studi asalnya.</small>
                </div>
                <div class="col-12 text-right mt-2">
                  <p class="float-left">Sudah mendaftar? <a href="{{ route('login') }}">Login di sini</a></p>
                  <button type="submit" class="btn btn-unj float-right transition-3d-hover">Daftar</button>
                </div>
                <!-- End Button -->
              </div>

            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
  <!-- ========== END MAIN ========== -->

  <!-- JS Global Compulsory -->
  <script src="{{asset('front/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('front/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('front/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
  <script src="{{asset('front/vendor/bootstrap/bootstrap.min.js')}}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{asset('front/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
  <script src="{{asset('front/vendor/slick-carousel/slick/slick.js')}}"></script>

  <!-- JS Front -->
  <script src="{{asset('front/js/hs.core.js')}}"></script>
  <script src="{{asset('front/js/components/hs.validation.js')}}"></script>
  <script src="{{asset('front/js/components/hs.slick-carousel.js')}}"></script>

  {{-- swal alert --}}
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    var fakultas = {!! $fakultas !!}
    $(document).on('ready', function () {
        //swalalert
        @if ($errors->has('nrm'))
        Swal.fire({
        icon: 'error',
        title: 'Gagal Daftar',
        text: 'NRM/NIM Sudah Dipakai! Silahkan Login Menggunakan NRM/NIM tersebut!',
        })
        @endif

        @if ($errors->has('password'))
        Swal.fire({
        icon: 'error',
        title: 'Gagal Daftar',
        text: 'Pastikan Password dan Konfirmasi Sama!',
        })
        @endif

        @if (Session::has('failed'))
        Swal.fire({
        icon: 'error',
        title: 'Gagal Daftar',
        text: '{{Session::get("failed")}}',
        })
        @endif

        // initialization of slick carousel
        $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

        // initialization of form validation
        $.HSCore.components.HSValidation.init('.js-validate');

        var validDates = @json($validDates);
        var arrValidDates = Object.values(validDates)


        // $('select[name="fakultas"]').on('change', function() {
        //     $('input[name="tanggal_kedatangan"]').prop('disabled',false)
        //     // $('input[name="tanggal_kedatangan"]').val('')

        //     // var id = $(this).val()
        //     // // console.log(fakultas[id-1].tanggal_awal_photoshoot)
        //     // $('input[name="tanggal_kedatangan"]').data('daterangepicker').minDate = moment(fakultas[id-1].tanggal_awal_photoshoot, "YYYY-MM-DD");
        //     // $('input[name="tanggal_kedatangan"]').data('daterangepicker').maxDate = moment(fakultas[id-1].tanggal_akhir_photoshoot, "YYYY-MM-DD");

        // })

        // if($('#fakultas').val() != null) {
        //     $('input[name="tanggal_kedatangan"]').prop('disabled',false)
        // }

        console.log(arrValidDates)
        $('input[name="tanggal_kedatangan"]').daterangepicker({
            autoUpdateInput: false,
            // minDate: moment(fakultas[1].tanggal_awal_photoshoot, "YYYY-MM-DD"),
            // maxDate: moment(fakultas[1].tanggal_akhir_photoshoot, "YYYY-MM-DD"),
            isInvalidDate: function(date) {
                // console.log(+new Date(date.format('M/D/YYYY')) == +new Date('10/29/2020')
                console.log(date.format('YYYY-MM-DD'))
                var now = new Date()
                now.setHours(0,0,0,0)
                if(+new Date(date.format('M/D/YYYY')) < now)
                return true
                // return (date.day() == 0 || date.day() == 6 || +new Date(date.format('M/D/YYYY')) <= now|| +new Date(date.format('M/D/YYYY')) == +new Date('10/30/2020')|| +new Date(date.format('M/D/YYYY')) == +new Date('10/29/2020'));
                if(arrValidDates.includes(date.format('YYYY-MM-DD')))
                return false
                return true
            },
            singleDatePicker: true,
            autoApply: true,
            locale: {
               format: 'DD/MM/YYYY'
            },
            isCustomDate: function() {
                return 'class-tanggal'
            }
        });

        $('input[name="tanggal_kedatangan"]').on('apply.daterangepicker',function(ev,picker) {
            $(this).val(picker.startDate.format('DD/MM/YYYY'))
        })

    });

    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }

  </script>
  @include('sweetalert::alert')
</body>
</html>
