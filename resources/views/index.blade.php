@extends('layouts.app')

@section('content')

<!-- Full Page Image Header with Vertically Centered Content
<header data-aos="fade-down" class="masthead">
    <div class="layer">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 text-center">
                    <img class="mx-auto d-block pr-3" src="/resources/logo/logo-ubad-putih.png" style="width: 25em; height:25em;">
                </div>
            </div>
        </div>
    </div>
</header>
-->

<div data-aos="fade-left" class="col-lg-12 maba-header">
    <div class="cover">
        <div class="text-centered">
            <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru 2021/2022 Dibuka </b></h2>
            <h4 data-aos="fade-up" class="text-center"><b>Periode Juni-Juli 2021</b></h4>
            <p style="text-align:justify" class="text-center card-text" data-aos="fade-left" class="why-dosen lead">
                Daftarkan dirimu sekarang untuk bergabung dengan Universitas Bali Dwipa,
                10 Program Studi pilihan tersedia untukmu. <br>Ikuti tata cara pendaftaran dibawah untuk melakukan pendaftaran
            <p>
            <div class="row pt-3 pb-3">
                <div class="col-lg-12">
                    <a href="https://balidwipa.ac.id/mahasiswa-baru" style="width: 12em; background-color:#ffffff; color:#064420;" class="btn d-block mx-auto text-center mt-2 pb-2">Klik Disini</a>
                </div><!--col-12-->
            </div><!--row-->
        </div><!--mt-4-->
    </div><!--cover-->
</div><!--maba-header--> 

<section id="pendaftaran-banner">

</section>

<!--Berita-->
<article id="berita">
    <div data-aos="fade-up">
    <h2 class="text-center">Berita / Artikel</h2>
  
    <div class="carousel-berita">
        @foreach ($posts as $p)
        <div class="card">
            <img class="card-img-top" src="{{ asset('storage/blog_cover_image/'.$p->cover_image) }}" alt="{{$p->cover_image}}">

            <div class="card-body">
                <p class="text-center mt-3">Uploaded At : {{$p->created_at}}</p>
                <h5 class="card-title"><a href="{{route('blogs.show', $p->id)}}">{{ $p->title }}</a></h5>
                <!--<p>{{$p->body}}</p>-->
                <a class="btn btn-primary text-center d-block mx-auto" href="{{route('blogs.show', $p->id)}}">Read more </a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="col-lg-12">
        <p class="text-center" style="color: #fff;"><small>swipe to see more</small></p>
        <a href={{route('blogs.index')}} style="color:#fff; width:12em;" class="btn d-block mx-auto text-center btn-success mt-2 pb-2">Lihat Semua Berita</a>
    </div>
  </div><!--aos-->
</article>

<!-- Prodi -->
<section id="prodi" class="py-5">
    <div class="container-fluid">
        <div data-aos="fade-down">
            <h2 data-aos="fade-up" class="text-center">10 Pilihan Program Studi</h2>
        </div>
        <!--AOS-->
        <div data-aos="fade-down" class="carousel">
            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/pangan.svg" class="card-img-top" alt="..." />
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
                <img src="/resources/logo/biomedis.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Teknik Biomedis</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('teknik-biomedis')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/psikologi.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Psikologi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('psikologi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/gizi.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Gizi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('gizi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/farmasi.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Farmasi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('farmasi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/akuntansi.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Akuntansi</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('akuntansi')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/humas.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Humas</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hubungan-masyarakat')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/bahasa-inggris.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Bahasa Inggris</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('bahasa-inggris')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/hukum.svg" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title">Hukum</h5>
                    <p class="card-text">
                        Jenjang Pendidikan : S1
                    </p>
                    <a href={{URL::route('hukum')}} class="tombol-tema mx-auto d-block text-center">Lihat Detail</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="/resources/logo/sistem-informasi.svg" class="card-img-top" alt="..." />
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
        <p style="color:#fff;" class="text-center">Geser Kartu Untuk Lihat Selanjutnya</p>
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
                    <div class="card-body">
                        <p data-aos="fade-right" class="why-kelas">Ingin kuliah penuh dari pagi sampai sore atau kuliah part
                            time sambil kerja? Jangan
                            khawatir kamu
                            dapat memilih Kelas Reguler atau Kelas Karyawan Universitas Bali Dwipa, Kelas Reguler cocok untuk
                            kamu yang ingin menghabiskan waktu penuh untuk belajar di kampus dan Kelas Karyawan cocok untuk kamu
                            yang sedang mencari penghasilan tapi ingin melanjutkan kuliah<p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-left" class="col-lg-4">
                <div class="card">
                    <h4 class="text-center" data-aos="fade-left"><b>Dosen Dan Tenaga Kependidikan Handal</b></h4>
                    <img class="img-fluid" src="/resources/logo/why-dosen.svg">
                    <div class="card-body">
                        <p data-aos="fade-left" class="why-dosen">Dosen di Universitas Bali Dwipa merupakan dosen-dosen yang
                            ahli dibidangnya dengan gelar Magister, Doktor, Professor, hingga Philosophy Doctor (Ph.D) tamatan
                            perguruan Tinggi Negeri, Swasta dan Luar Negeri serta merupakan praktisi dibidangnya masing-masing.
                        <p>
                    </div>
                </div>
            </div>

            <div data-aos="fade-right" class="col-lg-4">
                <div class="card">
                    <h4 class="text-center"><b>Biaya Perkuliahan Yang Terjangkau</b></h4>
                    <img class="img-fluid" src="/resources/logo/why-keuangan.svg">
                    <div class="card-body">
                        <p data-aos="fade-right" class="why-kelas">Ingin kuliah tapi bermasalah dengan keuangan? Jangan khawatir
                            di Universitas Bali Dwipa biaya perkuliahan dapat dicicil tiap semesternya<p>
                    </div>
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
<section id="fasilitas">
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h2>Fasilitas Perkuliahan</h2>
        </div>
        <div class="col-8">
            <img alt="image" src="/resources/logo/facility.svg">
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
<!--end fasilitas-->

<!--maps-->
<section id="maps">
<hr>
  <div class="container">
    <div class="row text-center justify-content-center">
      <div class="col-12 col-md-8 col-lg-7">
        <h3 class="mt-2"><b>Lokasi Kampus Di Pusat Kota Denpasar, Bali</b></h3>
        <p class="lead">Temukan Lokasi Kampus Kami di Google Maps</p>
        <hr>
      </div>
    </div>
    <div class="row-70"></div>
    <div class="row">
      <div class="col-12 col-md-8 col-lg m-auto">
        <img src="/resources/logo/maps.svg" class="mx-auto d-block">
      </div>
      <div class="col-12 col-md-8 col-lg pt-5 m-auto pt-lg-0">
        <iframe class="mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41638.02696696796!2d115.2035
        0808024739!3d-8.6472130286007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2409e274f3ab9%3A0x4192f0bddc5b5374!2sBali%20Dwipa%20University!5e0!3m2!1sen!2sid!4v1595523072696!5m2!1sen!2sid"
          width="100%" height="200" frameborder="0" style="border:0" allowfullscreen=""></iframe>

        <p><strong>Alamat : </strong> Jalan Pulau Flores No.5 Denpasar, Bali 80114</p>
      </div>
    </div>
  </div>
</section>
<!--maps-->

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
    <div class="container">
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

@endsection