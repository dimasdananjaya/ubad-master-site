<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Universitas Bali Dwipa merupakan perguruan tinggi
    di bali dengan 10 Program Studi S1 dengan Kelas Karyawan dan Kelas Reguler engan 10 Program Studi Pilihan : Teknik Biomedis, 
    Teknologi Pangan, Farmasi, Psikologi, Hubungan Masyarakat, Akuntansi, 
    Bahasa Inggris, Sistem Informasi, Gizi, Hukum
    ">
    <meta name=”robots” content="index, follow">

    	
    <link rel='icon' href='/resources/logo/balidwipa.png'>
    <link rel="shortcut icon" href="/resources/logo/balidwipa.png" />
    <link rel="apple-touch-icon" href="/resources/logo/balidwipa.png" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Universitas Bali Dwipa</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="https://kit.fontawesome.com/4f161c1c95.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css?v=1') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />

    <!--AOS-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />

    <!--Sweet alert-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-expand-lg navbar-light fixed-top">
            <div class="navbar-header d-flex col">
                <a class="navbar-brand" href="{{URL::route('index')}}"><img src="/resources/logo/balidwipa.png"
                        class="navbar-logo" />Universitas Bali Dwipa
                </a>
                <button type="button" data-target="#navbarCollapse" data-toggle="collapse"
                    class="navbar-toggle navbar-toggler ml-auto">
                    <span class="navbar-toggler-icon"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="{{URL::route('index')}}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Program Studi<b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{URL::route('teknologi-pangan')}}" class="dropdown-item">Teknologi Pangan</a>
                            </li>
                            <li>
                                <a href="{{URL::route('teknik-biomedis')}}" class="dropdown-item">Teknik Biomedis</a>
                            </li>
                            <li>
                                <a href="{{URL::route('psikologi')}}" class="dropdown-item">Psikologi</a>
                            </li>
                            <li>
                                <a href="{{URL::route('gizi')}}" class="dropdown-item">Gizi</a>
                            </li>
                            <li>
                                <a href="{{URL::route('farmasi')}}" class="dropdown-item">Farmasi</a>
                            </li>
                            <li>
                                <a href="{{URL::route('akuntansi')}}" class="dropdown-item">Akuntansi</a>
                            </li>
                            <li>
                                <a href="{{URL::route('hubungan-masyarakat')}}" class="dropdown-item">Hubungan
                                    Masyarakat</a>
                            </li>
                            <li>
                                <a href="{{URL::route('bahasa-inggris')}}" class="dropdown-item">Bahasa Inggris</a>
                            </li>
                            <li>
                                <a href="{{URL::route('hukum')}}" class="dropdown-item">Hukum</a>
                            </li>
                            <li>
                                <a href="{{URL::route('sistem-informasi')}}" class="dropdown-item">Sistem Informasi</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Profil <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{URL::route('visi-misi')}}" class="dropdown-item">Visi dan Misi</a></li>
                            <li>
                                <a href="{{URL::route('tentang-ubad')}}" class="dropdown-item">Tentang UBAD</a>
                            </li>
                            <li>
                                <a href="{{URL::route('staff')}}" class="dropdown-item">Staff</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Pendaftaran<b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            {{--<li>
                                <a href="{{URL::route('mahasiswa-baru')}}" class="dropdown-item">Pendaftaran Mahasiswa
                                    Baru</a>
                            </li>
                            <li>
                                <a href="{{URL::route('status-pendaftaran')}}" class="dropdown-item">Cek Status Pendaftaran</a>
                            </li>--}}
                            <li>
                                <a href="{{URL::route('biaya-perkuliahan')}}" class="dropdown-item">Biaya Perkuliahan</a>
                            </li>
                            <li>
                                <a href="{{URL::route('marketer-page')}}" class="dropdown-item">Affiliate Marketer</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Akademik <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a href="https://kampusbersama.id/auth/login" class="dropdown-item">Kampus Bersama</a></li>
                            <li class="nav-item"><a href="https://elibrary.balidwipa.ac.id/" class="dropdown-item">E-Library</a></li>
                            <li class="nav-item"><a href="https://balidwipa.ac.id/kalender-akademik" class="dropdown-item">Kalender Akademik</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right ml-auto">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/ubadbali/" class="nav-link"><i
                                class="fab fa-facebook-square"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/universitasbalidwipa/" class="nav-link"><i
                                class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('content')

        <!--Pendaftaran-->
        <section id="pendaftaran-prodi">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 text-center">
                        <h6 class="font-weight-light">
                            TERTARIK BERGABUNG BERSAMA PRODI DI UNIVERSITAS BALI DWIPA ?
                        </h6>
                        <p class="lead">Daftar Sekarang !</p>
                        <a href="{{URL::route('mahasiswa-baru')}}"
                            class="square_btn">Daftar</a>
                    </div>
                </div>
            </div>
        </section>


        <div class="row">
            <div class="col-lg-12">
                <hr>
            </div>
        </div>
        <footer class="fdb-block footer-large">
            <div class="container">
                <div class="row text-center">
                <div class="col">
                    <a style="color: black;" class="navbar-brand" href="{{URL::route('index')}}"><img src="/resources/logo/balidwipa.png"
                        class="navbar-logo" />Universitas Bali Dwipa
                    </a>
                    <p>Jalan Pulau Flores No.5<br>Denpasar, Bali 80114</p>
                    <p>Email : info@balidwipa.ac.id</p>
                    <p>Whatsapp : 085792463944</p>
                    <p>Phone : 081339827770</p>
                    <p><small>Icons and Pictures by: <a href="https://www.flaticon.com">www.flaticon.com</a> and <a href="https://www.freepik.com"> www.freepik.com</a></small></p>
                    <p><small>@ 2020 Universitas Bali Dwipa </small></p>
                </div>
                </div>
    
                <div class="row mt-4">
                <div class="col text-center">
                    <p class="lead">
                    <a href="https://www.facebook.com/ubadbali/" class="mx-2"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/universitasbalidwipa/" class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="mx-2"><i class="fab fa-google" aria-hidden="true"></i></a>
                    </p>
                </div>
                </div>
            </div>
            </footer>

    </div>
    <!-- Optional JavaScript -->
    <script src="{{ asset('public/js/slick/slick-1.8.1/slick/slick.min.js') }}"></script>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
 

<!-- Getbutton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+6285792463944", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /Getbutton.io widget -->
</body>

</html>