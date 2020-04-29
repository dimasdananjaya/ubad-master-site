@extends('layouts.app')

@section('content')
<section id="mahasiswa-baru">
    <div class="container">
        <!-- Full Page Image Header with Vertically Centered Content -->
        <div class="row">
            <div data-aos="fade-left" class="col-lg-12" style="margin-top:3%;">
                <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru Dibuka !</b></h2>
                <hr>
                <p style="text-align:justify" class="text-center" data-aos="fade-left" class="why-dosen lead">
                    Daftarkan dirimu sekarang untuk bergabung dengan Universitas Bali Dwipa,
                    10 Program Studi pilihan tersedia untukmu. Ikuti tata cara pendaftaran dibawah untuk melakukan pendaftaran
                <p>
                <img src="/resources/logo/pendaftaran-masthead.jpg">
            </div>
            <div class="col-lg-12">
                <h3 class="text-center">Pilih Jalur Tes</h3>
                <hr>
            </div>
            <div class="col-lg-6">
                <div class="card mx-auto" style="width: 100%;">
                    <img src="/resources/logo/result.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>A. Jalur Bebas Tes</b></h5>
                      <p class="card-text">Pada Jalur Bebas Tes ini kamu hanya perlu mendaftar untuk menjadi mahasiswa Universitas Bali Dwipa.
                          Tetapi dengan <b>Kuota Terbatas !</b><br>
                          <br>
                      </p>
                      <b>Prasyarat</b>
                      <ul>
                          <li>1. KTP</li>
                          <li>2. Mengisi Formulir Pendaftaran di Website</li>
                          <li>3. Nilai Rapor Kelas X s/d XII Semester 1</li>
                      </ul>
                      <a href=/form-pendaftaran class="btn btn-primary btn-md text-center">Isi Formulir Pendaftaran Disini</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <div class="card" style="width: 100%;">
                    <img src="/resources/logo/result.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>B. Jalur Seleksi</b></h5>
                      <p class="card-text">Pada Jalur Seleksi kamu diharuskan untuk mengikuti tes kepribadian, jangan khawatir ! tes ini
                          akan membantumu untuk memilih jurusan yang tepat untukmu !
                      </p>
                      <b>Prasyarat</b>
                      <ul>
                          <li>1. KTP</li>
                          <li>2. Mengisi Formulir Pendaftaran di Website</li>
                          <li>3. Nilai Rapor Kelas X s/d XII Semester 1</li>
                          <li>4. Mengikuti Tes Minat dan Bakat</li>
                      </ul>
                        <a href="/form-pendaftaran" class="btn btn-primary btn-md mx-auto">Isi Formulir Pendaftaran Disini</a>
                    </div>
                  </div>
            </div><!--col-->
            
        </div><!--row-->
    </div><!--container-->
</section>
@endsection