@extends('layouts.app')

@section('content')
<section id="marketer">
    <div class="container">
        <div class="card d-block mx-auto">
            <h3 class="text-center pt-3 pb-4"><b>Raih Komisi atau Beasiswa Dengan Menjadi Affiliate Marketer</b></h3>
            <img class="d-block mx-auto" src="/resources/logo/marketer.svg">
            <p class="text-center">Affiliate Marketer adalah anggota marketing terdaftar Universitas Bali Dwipa yang melakukan
                kegiatan marketing untuk mencari calon mahasiswa baru untuk didaftarkan di Universitas Bali Dwipa hingga
                terdaftar resmi sebagai mahasiswa baru
            </p>
            <p class="mt-4"><b>Apa saja keuntungannya?</b></p>
            <p>
                <li>Komisi Per-Mahasiswa untuk Marketer</li>
                <li>Beasiswa Potongan Biaya Kuliah (Bagi mahasiswa Universitas Bali Dwipa)</li>
            </p>
            <a href="https://drive.google.com/file/d/17xrKlxdKyvj17vJYIa7klV-bmvuTnNmu/view?usp=sharing" class="btn btn-success d-block mx-auto">Lihat Panduan Disini</a>
            <a href="/register-marketer" class="btn btn-primary d-block mx-auto">Daftar Sebagai Marketer</a>
        </div><!--card-->

        <h5 class="mt-5"><b>Daftar Marketer/Admin Penerimaan Mahasiswa Baru Resmi Universitas Bali Dwipa</b></h5>
        <hr>
        <table class="table table-striped table-bordered table-hover mt-2 table-responsive-sm table-striped">
            <thead>
                <th>Nama</th>
                <th>Whatsapp</th>
                <th>Email</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($dataMarketer as $dtm)
                    <tr>
                        <td>{{$dtm->nama_lengkap}}</td>
                        <td>{{$dtm->whatsapp}}</td>
                        <td>{{$dtm->email}}</td>
                        <td>{{$dtm->status}}</td>
                    </tr>   
                @endforeach
            </tbody>
        </table>
    </div><!--container-->
</section>
@endsection