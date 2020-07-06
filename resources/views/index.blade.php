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
            <h2 data-aos="fade-up" class="text-center">10 Pilihan Program Studi</h2>
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
                        class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/dna.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Teknik Biomedis</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('teknik-biomedis')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/brain.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Psikologi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('psikologi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/lunch.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Gizi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('gizi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/pills.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Farmasi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('farmasi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/accounting.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Akuntansi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('akuntansi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/group.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Hubungan Masyarakat</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hubungan-masyarakat')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/books.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Bahasa Inggris</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('bahasa-inggris')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/defendant.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Hukum</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hukum')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/programming.png" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Sistem Informasi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('sistem-informasi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>
        </div>
        <!--end carousel-->
        <p data-aos="fade-left" style="color:#fff;" class="text-center">Geser Kartu Untuk Lihat Selanjutnya</p>
    </div>
    <!--end container-->
</section>


<section id="why">
    <div class="container">
        <h1 class="why-title">Bergabung Dengan Universitas Bali Dwipa</h1>
        <hr>
        <div class="row">
            <div data-aos="fade-right" class="col-lg-4">
                <div class="card">
                    <h4 data-aos="fade-left" class="text-center"><b>Kelas Perkuliahan Yang Pas Dengan Jadwalmu</b></h4>
                    <img class="img-fluid" src="/resources/logo/why-kelas.svg">
                    <p data-aos="fade-right" class="why-kelas">Ingin kuliah penuh dari pagi sampai sore atau kuliah part
                        time sambil kerja? Jangan
                        khawatir kamu
                        dapat memilih Kelas Reguler atau Kelas Karyawan Universitas Bali Dwipa, Kelas Reguler cocok untuk
                        kamu yang ingin menghabiskan waktu penuh untuk belajar di kampus dan Kelas Karyawan cocok untuk kamu
                        yang sedang mencari penghasilan tapi ingin melanjutkan kuliah<p>
                </div>
            </div>

            <div data-aos="fade-left" class="col-lg-4">
                <div class="card">
                    <h4 class="text-center" data-aos="fade-left"><b>Dosen Dan Tenaga Kependidikan Handal</b></h4>
                    <img class="img-fluid" src="/resources/logo/why-dosen.svg">
                    <p data-aos="fade-left" class="why-dosen">Dosen di Universitas Bali Dwipa merupakan dosen-dosen yang
                        ahli dibidangnya dengan gelar Magister, Doktor, Professor, hingga Philosophy Doctor (Ph.D) tamatan
                        perguruan Tinggi Negeri, Swasta dan Luar Negeri serta merupakan praktisi dibidangnya masing-masing.
                    <p>
                </div>
            </div>

            <div data-aos="fade-right" class="col-lg-4">
                <div class="card">
                    <h4 class="text-center"><b>Biaya Perkuliahan Yang Terjangkau</b></h4>
                    <img class="img-fluid" src="/resources/logo/why-keuangan.svg">
                    <p data-aos="fade-right" class="why-kelas">Ingin kuliah tapi bermasalah dengan keuangan? Jangan khawatir
                        di Universitas Bali Dwipa biaya perkuliahan dapat dicicil tiap semesternya<p>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</section>

<div class="row">
    <div class="col-lg-12">
        <hr>
    </div>
</div>

<!--Fasilitas-->
<section class="fdb-block" id="fasilitas">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2>Fasilitas Perkuliahan</h2>
        </div>
        <div class="col-8">
            <img alt="image" src="/resources/logo/fitur2.svg">
        </div>

        <div class="col-md-4">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="/resources/logo/wifi.svg">
            </div>
            <div class="col-9">
              <h5><strong>High Speed Wifi</strong></h5>
              <p>Wifi berkecepatan tinggi untuk mendukung proses perkuliahan dengan dunia digital</p>
            </div>

            <div class="col-3">
              <img alt="image" class="fdb-icon" src="/resources/logo/ac.svg">
            </div>
            <div class="col-9">
              <h5><strong>AC Ruangan</strong></h5>
              <p>Ruangan dengan AC Untuk Menambah Kenyamanan Saat Proses Perkuliahan</p>
            </div>

            <div class="col-3">
              <img alt="image" class="fdb-icon" src="/resources/logo/online.svg">
            </div>
            <div class="col-9">
              <h5><strong>Online Learning</strong></h5>
              <p>Fasilitas pembalajaran online untuk mendukung kegiatan perkuliahan jarak jauh</p>
            </div>
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="/resources/logo/projector.svg">
            </div>
            <div class="col-9">
              <h5><strong>Proyektor dan Whiteboard</strong></h5>
              <p>Untuk mendukung media pembelajaran interaktif</p>
            </div>

          </div><!--end row-->
        </div><!--end col-->
    </div><!--row-->
  </div><!--container-->
</section>
<!--end fitur-->
<!--Pendaftaran-->
<section id="pendaftaran">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <h2 data-aos="fade-down">Pendaftaran Mahasiswa Baru</h2>
            </div>
            <div class="col-lg-6">
                <img data-aos="fade-left" src="/resources/logo/home-pendaftaran.png">
            </div>
            <div style="background-color:#157f94; border-radius:20px;" class="jarak col-lg-6">
                <div data-aos="fade-right">
                    <h5 class="font-weight-bold">
                        <b>PENDAFTARAN DAN SELEKSI ONLINE MAHASISWA BARU 24 JAM KAPANPUN DIMANAPUN</b>
                    </h5>
                    <p>Tidak perlu jauh-jauh datang untuk mendaftarkan diri, klik tombol Daftar dibawah ini untuk mendaftar secara online</p>
                    <p>Ayo Bergabung !</p>
                    <a href="{{URL::route('mahasiswa-baru')}}" class="square_btn">Daftar</a>
                    <!--<a href="http://bit.do/balidwipa" class="square_btn">Seleksi Online</a>-->
                </div>
            </div>
        </div>
    </div>
</section>

<!--QA-->
<section id="qa">
    <div class="container h-100">
        <div class="col-lg-12">
            <h2 class="faq-title">Frequently Asked Question</h2>
        </div>
            <div class="carousel-qa">
        
                @foreach($dataFAQ as $dtf)
                    <div class="card">
                        <div class="card-head">
                        <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>{{$dtf->pertanyaan}}</b></p>
                        </div>
                        <div class="card-body">
                            <p>
                                {{$dtf->jawaban}}
                            <p>
                        </div>
                    </div>
                @endforeach
     
            </div><!--carousel-->
    </div>
</section>

<!--contact us-->
<section id="contact-us">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div data-aos="fade-right" class="col-lg-4">
                <h2>Perlu Informasi Lainnya?</h2>
                <p>Hubungi Kami Pada Kontak Dibawah Ini</p>
                <ul>
                    <li>Whatsapp : 085792463944 </li>
                    <li>Phone    : 081339827770</li>
                    <li>Email    : info@balidwipa.ac.id</li>
                </ul>
            </div>
            <div class="jarak col-lg-8">
                <img data-aos="fade-left" src="/resources/logo/contactus.png">
            </div>
        </div>
    </div>
</section>

<!--Berita-->
<article id="berita">
    <div data-aos="fade-up">
    <h2 class="text-center">Berita / Artikel</h2>
  
    <div class="carousel-berita">
        @foreach ($posts as $p)
        <div class="card">
            <img class="card-img-top" src="ubad-master/public/public/images/cover_image/{{$p->cover_image}}"
            alt="{{$p->cover_image}}">
            <div class="card-body">
                <h5 class="card-title"><a href="{{route('blogs.show', $p->id)}}">{{ $p->title }}</a></h5>
                <!--<p>{{$p->body}}</p>-->
                <a class="btn btn-primary text-center d-block mx-auto" href="{{route('blogs.show', $p->id)}}">Read more </a>
            </div>
        </div>
        @endforeach
        
    </div>
    <div class="col-lg-12">
        <a href={{route('blogs.index')}} style="color:#fff; width:12em;" class="btn d-block mx-auto text-center btn-success mt-2">Lihat Semua Berita</a>
    </div>
  </div><!--aos-->
</article>



@endsection