@extends('layouts.admin-layout')

@section('content')
    <section id="admin-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <img class="card-img-top mx-auto" src="/resources/logo/daftar-pendaftar.svg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">Daftar Pendaftar</h5>
                          <p class="card-text">Kelola Data Pendaftaran Calon Mahasiswa</p>
                          <a href="/daftar-pendaftar" class="btn btn-primary btn-block">Pilih</a>
                        </div>
                    </div>
                </div>
        
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="/resources/logo/periode.svg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Periode</h5>
                              <p class="card-text">Kelola Periode Pendaftaran</p>
                              <a href="/periode" class="btn btn-primary btn-block">Pilih</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="/resources/logo/blog.svg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Blog</h5>
                              <p class="card-text">Kelola Blog/Berita Website Ubad</p>
                              <a href="/blogs" class="btn btn-primary btn-block">Pilih</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <img class="card-img-top mx-auto" src="/resources/logo/qa-admin.svg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">FAQ</h5>
                              <p class="card-text">Kelola FAQ </p>
                              <a href="/faq" class="btn btn-primary btn-block">Pilih</a>
                            </div>
                        </div>
                    </div>
            </div><!--row-->
            <a class="btn btn-block btn-primary mt-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        <div><!--container-->
    </section>
@endsection