@extends('layouts.app')

@section('content')
    <section id="form-pendaftaran">
        <div class="container">
            <div class="row">
                <div data-aos="fade-left" class="col-lg-6" style="margin-top:1%;">
                    <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru</b></h2>
                    <hr>
                    <p style="text-align:justify" class="text-center" data-aos="fade-left" class="why-dosen lead">
                        Silahkan mengisi formulir berikut ini untuk melakukan pendaftaran kolom diisi selengkap mungkin dan merupakan data yang sebenarnya.
                    <p>
                    <img style="  display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 65%;" class="mx-auto" src="/resources/logo/pendaftaran-form.jpg">
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3><b>Formulir Pendaftaran</b></h3>
                            
                            <hr>
                            <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="nama" class="form-control" name="nama" id="nama"
                                                placeholder="" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="no_hp">No Handphone</label>
                                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="no_whatsapp">No Whatsapp</label>
                                            <input type="text" class="form-control" name="no_whatsapp" id="no_whatsapp"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" name="email" id="email"
                                            placeholder="" required>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="prodi">Program Studi Pilihan</label>
                                            <select name="prodi" class="form-group form-control">
                                                <option value="Teknologi Pangan" class="form-control">Teknologi Pangan</option>
                                                <option value="Gizi" class="form-control">Gizi</option>
                                                <option value="Farmasi" class="form-control">Farmasi</option>
                                                <option value="Psikologi" class="form-control">Psikologi</option>
                                                <option value="Teknik Biomedis" class="form-control">Teknik Biomedis</option>
                                                <option value="Hukum" class="form-control">Hukum</option>
                                                <option value="Akuntansi" class="form-control">Akuntansi</option>
                                                <option value="Bahasa Inggris" class="form-control">Bahasa Inggris</option>
                                                <option value="Hubungan Masyarakat" class="form-control">Hubungan Masyarakat</option>
                                                <option value="Sistem Informasi" class="form-control">Sistem Informasi</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="kelas">Pilihan Kelas</label>
                                            <select name="kelas" class="form-group form-control">
                                                <option value="Reguler" class="form-control">Reguler</option>
                                                <option value="Karyawan" class="form-control">Karyawan</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
@endsection