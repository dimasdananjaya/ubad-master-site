@extends('layouts.app')

@section('content')

<!-- Full Page Image Header with Vertically Centered Content -->
<header data-aos="fade-down" class="masthead">
    <div class="layer">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">

                </div>
            </div>
        </div>
    </div>
</header>

<!-- Prodi -->
<section id="prodi" class="py-5">
    <div class="container-fluid">
        <div data-aos="fade-down">
            <h2 class="text-center">10 Pilihan Program Studi</h2>
        </div>
        <!--AOS-->
        <div data-aos="fade-down" class="carousel">
            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/chlorophyll.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Teknologi Pangan</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a {{URL::route('teknologi-pangan')}} href={{URL::route('teknologi-pangan')}}
                        class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/dna.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Teknik Biomedis</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('teknik-biomedis')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/brain.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Psikologi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('psikologi')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/lunch.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Gizi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('gizi')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/pills.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Farmasi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('farmasi')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/accounting.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Akuntansi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('akuntansi')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/group.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Hubungan Masyarakat</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hubungan-masyarakat')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/books.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Bahasa Inggris</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('bahasa-inggris')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/defendant.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Hukum</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hukum')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/programming.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Sistem Informasi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('teknologi-pangan')}} class="btn tombol-tema">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!--end carousel-->
    </div>
    <!--end container-->
</section>

<section id="why">
    <div class="container">
        <h1 class="why-title">Bergabung Dengan Universitas Bali Dwipa</h1>
        <hr>
        <div class="row">
            <div data-aos="fade-right" class="col-lg-4">
                <img src="/resources/logo/calendar.png">
                <h3 data-aos="fade-left" class="text-center"><b>Kelas Perkuliahan Yang Cocok Dengan Jadwalmu</b></h3>
                <p data-aos="fade-right" class="why-kelas">Ingin kuliah penuh dari pagi sampai sore atau kuliah part
                    time sambil kerja? Jangan
                    khawatir kamu
                    dapat memilih Kelas Reguler atau Kelas Karyawan Universitas Bali Dwipa, Kelas Reguler cocok untuk
                    kamu yang ingin menghabiskan waktu penuh untuk belajar di kampus dan Kelas Karyawan cocok untuk kamu
                    yang sedang mencari penghasilan tapi ingin melanjutkan kuliah<p>
            </div>

            <div data-aos="fade-left" class="col-lg-4">
                <img src="/resources/logo/teacher.png">
                <h3 class="text-center" data-aos="fade-left"><b>Dosen Dan Tenaga Kependidikan Handal</b></h3>
                <p data-aos="fade-left" class="why-dosen">Dosen di Universitas Bali Dwipa merupakan dosen-dosen yang
                    ahli dibidangnya dengan gelar Magister, Doktor, Professor, hingga Philosophy Doctor (Ph.D) tamatan
                    perguruan Tinggi Negeri, Swasta dan Luar Negeri serta merupakan praktisi dibidangnya masin-masing.
                    Para Dosen ini siap memberimu ilmu yang kamu
                    perlukan untuk menjadi seorang sarjana yang dapat berkontribusi kepada pendidikan dan masyarakat<p>
            </div>

            <div data-aos="fade-right" class="col-lg-4">
                <img src="/resources/logo/price.png">
                <h3 class="text-center"><b>Biaya Kuliah Yang Terjangkau</b></h3>
                <p data-aos="fade-right" class="why-kelas">Ingin kuliah tapi bermasalah dengan keuangan? Jangan khawatir
                    di Universitas Bali Dwipa biaya perkuliahan dapat dicicil tiap semesternya, tersedia juga beasiswa
                    bagi setiap mahasiswa berprestasi atau yang tidak mampu<p>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>


<!--Pendaftaran-->
<section id="pendaftaran">
    <hr>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h2 data-aos="fade-down">Pendaftaran Mahasiswa Baru</h2>
            </div>
            <div class="col-lg-6">
                <img data-aos="fade-left" src="/resources/logo/home-pendaftaran.jpg">
            </div>
            <div style="background-color:#157f94;" class="jarak col-lg-6">
                <div data-aos="fade-right">
                    <h5 class="font-weight-bold">
                        <b>PENDAFTARAN DAN SELEKSI ONLINE MAHASISWA BARU 24 JAM KAPANPUN DIMANAPUN</b>
                    </h5>
                    <p>Tidak perlu jauh-jauh untuk datang Tes gunakan Smartphone atau Laptop yang kalian punya untuk Tes
                        Online</p>
                    <p>Ayo Bergabung !</p>
                    <a href="{{URL::route('mahasiswa-baru')}}" class="square_btn">Daftar</a>
                    <a href="http://bit.do/balidwipa" class="square_btn">Seleksi Online</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--contact us-->
<section id="contact-us">
    <hr>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div data-aos="fade-right" class="col-lg-4">
                <h2>Perlu Informasi Lainnya?</h2>
                <p>Hubungi Kami Pada Kontak Dibawah Ini</p>
                <ol>
                    <li>Whatsapp : 085792463944 </li>
                    <li>Phone    : 081339827770</li>
                    <li>Email    : info@balidwipa.ac.id</li>
                </ol>
            </div>
            <div class="jarak col-lg-8">
                <img data-aos="fade-left" src="/resources/logo/contact-us.jpg">
            </div>
        </div>
    </div>
</section>

<!--NIIT
<section id="niit-banner">
  
    <div class="layer">
        <div class="container text-center">
     
            <div data-aos="fade-left">
                <h1 class="lead">KERJASAMA INTERNATIONAL</h1>
                <img src="/resources/logo/niituniv.jpg" class="niit-logo img-responsive">
                <h5>NIIT University - India</h5>
                <h5>Program Sertifikasi & Double Degree</h5>
            </div>
        </div>
    </div>
  
    <div class="row">
        <div class="col-lg-4">
            <img src="/resources/logo/niituniv.jpg" class="niit-logo img-responsive">
        </div>
        <div class="col-lg-8">
            <h3>

            </h3>
        </div>
    </div>
</section>
-->

<!--Berita-->
<article id="berita">
    <div data-aos="fade-up">
    <h2 class="text-center">Berita / Artikel</h2>
    <hr />
    <div class="carousel-berita">
        @foreach ($posts as $p)
        <div class="card">
            <img style="width:100%; height:40vh;" src="public/images/cover_image/{{$p->cover_image}}"
                alt="{{$p->cover_image}}">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('blogs.show', $p->id)}}">{{ $p->title }}</a></h5>
                <!--<p>{{$p->body}}</p>-->
                <a class="btn btn-primary" href="{{route('blogs.show', $p->id)}}">Read more </a>
            </div>
        </div>
        @endforeach
        
    </div>
    <a href={{route('blogs.index')}} class="btn btn-primary align-items-center">Lihat Semua Berita</a>
    </div><!--aos-->
</article>



@endsection