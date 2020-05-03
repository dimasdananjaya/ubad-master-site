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
                        Anda telah berhasil melakukan pendaftaran, admin kami akan memproses data anda, selanjutnya silahkan menunggu
                        kontak dari admin kami dalam waktu 4-7 hari. Info Lebih lanjut klik ikon whatsapp di kanan bawah atau hubungi : <br>
                        <b>Whatsapp : 085792463944<b><br>
                        <b>Phone    : 081339827770</b>
                     <p>
                    <a href="/" class="btn btn-lg btn-block btn-primary text-center">Kembali Ke Home</a>
                </div>
            </div><!--row-->
        </div><!--container-->
    </section>
@endsection