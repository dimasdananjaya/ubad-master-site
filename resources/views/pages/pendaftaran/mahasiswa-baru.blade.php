@extends('layouts.app')

@section('content')
<section id="mahasiswa-baru">
    <div data-aos="fade-left" class="col-lg-12 maba-header">
        <div class="cover">
            <div class="text-centered">
                <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru 2021/2022 Dibuka </b></h2>
                <h4 data-aos="fade-up" class="text-center"><b>Periode Juni-Juli 2021</b></h4>
                <p style="text-align:justify" class="text-center card-text" data-aos="fade-left" class="why-dosen lead">
                    Daftarkan dirimu sekarang untuk bergabung dengan Universitas Bali Dwipa,
                    10 Program Studi pilihan tersedia untukmu. <br>Ikuti tata cara pendaftaran dibawah untuk melakukan pendaftaran
                <p>
            </div><!--mt-4-->
        </div><!--cover-->
    </div><!--maba-header--> 

    <div id="merdeka-belajar">
        <div class="container-fluid">
            <h3 class="text-center mb-3 mt-4"><b>Kampus Merdeka, Merdeka Belajar !</b></h3>
            <p class="text-center mb-5">Dalam mendukung program Merdeka Belajar oleh Kementerian Pendidikan dan Kebudayaan Republik Indonesia dan mensupport 
                calon mahasiswa baru <br> dalam masa Pandemi COVID-19 ini Universitas Bali Dwipa
                memberikan <b>5 Kebebasan</b> bagi Calon Mahasiswa Baru diantaranya : </p>
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <img class="mx-auto d-block" src="/resources/logo/bebas-uang-pendaftaran.svg">
                    <h5 class="text-center mt-2"><b>Bebas Uang Pendaftaran</b></h5>
                    <p class="text-center">Pendaftaran Online Gratis ! <br> Anda dapat langsung mendaftar tanpa membayar </p>
                </div><!--col-lg-4-->

                <div class="col-lg-4 mt-5">
                    <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-pendaftaran.svg">
                    <h5 class="text-center mt-2"><b>Bebas Waktu Pendaftaran</b></h5>
                    <p class="text-center">Pendaftaran Online Dimanapun Kapanpun <br> Anda dapat langsung mendaftar dimanapun dan kapanpun secara online </p>
                </div><!--col-lg-4-->

                <div class="col-lg-4 mt-5">
                    <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-kuliah.svg">
                    <h5 class="text-center mt-2"><b>Bebas Waktu Kuliah</b></h5>
                    <p class="text-center">Perkuliahan Dapat Dilakukan Online <br> Anda dapat mengikuti kuliah secara Online kami memiliki sistem E-Learning yang akan
                    membantu kalian dalam melakukan perkuliahan dimanapun dan kapanpun</p>
                </div><!--col-lg-4-->

                <div class="col-lg-6 mt-5">
                    <img class="mx-auto d-block" src="/resources/logo/bebas-waktu-bayar-kuliah.svg">
                    <h5 class="text-center mt-2"><b>Bebas Waktu Bayar Kuliah</b></h5>
                    <p class="text-center">Punya Kendala Dalam Pembayaran? <br> Pembayaran Uang Kuliah dapat dibayar kapanpun <br>dan dicicil hingga sebelum Semester berakhir </p>
                </div><!--col-lg-4-->

                <div class="col-lg-6 mt-5">
                    <img class="mx-auto d-block" src="/resources/logo/bebas-kuliah-3-semester.svg">
                    <h5 class="text-center mt-2"><b>Bebas Kuliah 3 Semester Diluar Prodi</b></h5>
                    <p class="text-center">Perkuliahan Merdeka Belajar <br> Mahasiswa berhak mengambil 3 semester diluar program studinya sesuai dengan prgoram merdeka balajar</p>
                </div><!--col-lg-4-->

                <div class="col-lg-12">
                    <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center mx-auto d-block mt-4" style="width: 23em; background-color:#04009A; border-radius:1em 1em 1em 1em;">Berminat Bergabung? <br> Klik Disini Untuk Daftar Online</a>
                </div><!--div class-->
            </div><!--row-->
        </div><!--container-fluid-->
    </div><!--merdeka belajar-->

    <div class="container">
        <!-- Full Page Image Header with Vertically Centered Content -->
        <div class="row">
            <div class="col-lg-12">
                <hr>
                <h3 class="text-center mt-4"><b>Alur Pendaftaran</b></h3>
                <img class="img-responsive" src="/resources/logo/alur-pendaftaran.svg" alt="Card image cap">
            </div><!--col 12-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/isi-formulir.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>1. Isi Formulir Online</b></h5>
                        <p class="card-text">Isi formulir online dengan menekan tombol dibawah, pastikan data yang anda isi sesuai, Setelah mengisi formulir secara online admin kami akan memproses formulir dan akan menghubungi via Whatsapp
                            dalam waktu 24 jam</p>
                        <a href="/form-pendaftaran" class="btn btn-primary btn-md text-center">Isi Formulir Pendaftaran Disini</a>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/admin.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>*Admin Akan Segera Menghubungi Anda*</b></h5>
                        <p class="card-text">
                            Setelah mengisi formulir Online maka salah satu dari admin kami akan menghubungi anda, admin kami nantinya
                            akan membantu anda hingga proses akhir pendaftaran
                        </p>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/diproses.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>2. Penyerahan Persyaratan</b></h5>
                        <p class="card-text">
                            Calon manahasiswa baru menyerahkan kelengkapan berkas persyaratan pendaftaran berupa : <br>
                            1. Ijazah (Legalisir)<br>
                            2. Rapor (Legalisir)<br>
                            3. KTP
                            <br>
                            <small><b>*seluruh persyaratan dikirim ke email pmb@balidwipa.ac.id </b></small>
                        </p>
                        <a href="/status-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/pembayaran.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>3. Pembayaran Pendaftaran dan Initial Payment</b></h5>
                        <p class="card-text">Setelah data divalidasi selanjutnya calon mahasiswa wajib membayar <b>Biaya Pendaftaran dan Initial Payment</b>
                        jumlah biaya bergantung pada Program Studi yang dipilih, hubungi admin kami dengan menekan tombol Whatsapp di pojok kanan bawah
                        untuk mengetahui biaya yang harus dibayar. Bukti pembayaran dapat dibawa langsung ke Universitas Bali Dwipa atau dikirimkan online melalui admin kami
                        yang telah menghubungi anda.
                        <br><small><b>*tata cara pembayaran akan diberikan setelah mengumpulkan berkas pendaftaran kepada admin</b></small>
                        </p>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/registrasi-ulang.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><b>4. Registrasi Ulang</b></h5>
                        <p class="card-text">Setelah melakukan <b>Pembayaran Pendaftaran dan Initial Payment (3)</b> selanjutnya calon mahasiswa wajib melakukan <b>Registrasi Ulang</b>
                        Registrasi Ulang adalah proses administrasi yang <b>Wajib</b> dilakukan oleh seluruh calon mahasiswa, proses ini mencakup melengkapi administrasi, pengumpulan
                        dokumen, dan pelunasan DP3 dan Semester. 
                        </p>
                    </div><!--card body-->
                </div><!--card-->
            </div><!--col 6-->

            <div class="col-lg-6 d-flex mx-auto">
                <div class="card">
                    <img class="card-img-top" src="/resources/logo/selesai.svg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title" style="color : #4e89ae;"><b>5. SELESAI</b></h5>
                        <p class="card-text">Setelah calon Mahasiswa Baru menyelesaikan seluruh proses 1-4, maka <b>SELAMAT !</b> Anda telah terdaftar resmi sebagai Calon Mahasiswa Universitas Bali Dwipa. 
                            Calon mahasiswa menunggu untuk pengumuman Masa Orientasi</p>
                        <a href="/status-pendaftaran" class="btn btn-primary btn-md text-center">Cek Status Pendaftaran</a>
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