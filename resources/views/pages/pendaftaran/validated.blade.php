@extends('layouts.app')

@section('content')
    <section id="validated">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 data-aos="fade-left" class="text-center"><b>PENDAFTARAN BERHASIL !</b></h2>
                </div>
                <div class="col-lg-6">
                    <img data-aos="fade-left" style="  display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 65%;" class="mx-auto" src="/resources/logo/confirmed.jpg">
                </div><!--col-12-->
                <div data-aos="fade-left" class="col-lg-6" style="margin-top:1%;">
                    <hr>
                    <p style="text-align:justify" class="text-center" data-aos="fade-left" class="why-dosen lead">
                        Anda telah berhasil melakukan pendaftaran, <b>SILAHKAN MENGECEK KOTAK MASUK EMAIL YANG TELAH ANDA DAFTARKAN,</b> Info Lebih lanjut klik ikon whatsapp di kanan bawah atau hubungi : <br>
                        Atau hubungi admin kami pada kontak dibawah ini<br>
                        <b>Whatsapp : 085792463944</b><br>
                        <b>Phone    : 081339827770</b>
                     <p>
                    <a href="/status-pendaftaran" class="btn btn-lg btn-block btn-success text-center">Cek Status Pendaftaran</a>
                    <a href="/" class="btn btn-lg btn-block btn-primary text-center">Kembali Ke Home</a>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>
@endsection