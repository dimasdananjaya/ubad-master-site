@extends('layouts.app')

@section('content')
<section id="mahasiswa-baru">
    <div data-aos="fade-left" class="col-lg-12 maba-header">
        <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru Dibuka !</b></h2>
        <hr>
        <p style="text-align:justify" class="text-center card-text" data-aos="fade-left" class="why-dosen lead">
            Daftarkan dirimu sekarang untuk bergabung dengan Universitas Bali Dwipa,
            10 Program Studi pilihan tersedia untukmu. <br>Ikuti tata cara pendaftaran dibawah untuk melakukan pendaftaran
        <p>

        <img class="mx-auto d-block" src="/resources/logo/mahasiswa-baru.svg">
    </div>
    <div class="container">
        <!-- Full Page Image Header with Vertically Centered Content -->
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mt-2"><b>Alur Pendaftaran</b></h3>
                <hr>
            </div><!--col 12-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/isi-formulir.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>1. Isi Formulir Online</b></h5>
                        <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai</p>
                        <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center">Isi Formulir Pendaftaran Disini</a>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/diproses.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>2. Menunggu Validasi Formulir</b></h5>
                        <p class="card-text">Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                            dalam waktu 24 jam
                        </p>
                        <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/pembayaran.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>3.A Pembayaran Pendaftaran dan Initial Payment</b></h5>
                        <p class="card-text">Setelah data divalidasi selanjutnya calon mahasiswa wajib membayar <b>Biaya Pendaftaran dan Initial Payment</b>
                        jumlah biaya bergantung pada Program Studi yang dipilih, hubungi admin kami dengan menekan tombol Whatsapp di pojok kanan bawah
                        untuk mengetahui biaya yang harus dibayar
                        </p>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/pembayaran.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>3.B Pembayaran DP3 dan Semester</b></h5>
                        <p class="card-text">Setelah melakukan <b>Pembayaran Pendaftaran dan Initial Payment (3.A)</b> selanjutnya calon mahasiswa wajib membayar <b>DP3</b> dan <b>Semester</b>
                        jumlah biaya bergantung pada Program Studi yang dipilih, hubungi admin kami dengan menekan tombol Whatsapp di pojok kanan bawah
                        untuk mengetahui biaya yang harus dibayar
                        </p>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6 d-flex mx-auto">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/selesai.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>4. Selesai</b></h5>
                        <p class="card-text">Setelah calon Mahasiswa Baru menyelesaikan seluruh pembayaran, maka telah terdaftar sebagai Mahasiswa resmi Universitas Bali Dwipa. Calon mahasiswa menunggu untuk pengumuman Masa Orientasi</p>
                        <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->
        </div><!--row-->
    </div><!--container-->
    <div class="mahasiswa-baru-question">
        <div data-aos="fade-right">
            <h2 class="text-center">Ada Pertanyaan?</h2>
            <p class="card-text text-center">Tekan tombol Whatsapp di pojok kanan bawah <br>atau Hubungi Kami Pada Kontak Dibawah Ini</p>
            <ul class="text-center">
                <li>Whatsapp : 085792463944 </li>
                <li>Phone    : 081339827770</li>
                <li>Email    : info@balidwipa.ac.id</li>
            </ul>
        </div>
    </div><!--question-->
</section>
@endsection