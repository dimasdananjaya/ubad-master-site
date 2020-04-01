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
                            <small>*diisi sesuai data Kartu Keluarga dan KTP</small>
                            <hr>
                            <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama">NIK KTP</label>
                                            <input type="text" class="form-control" name="nik" id="nik"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="nama" class="form-control" name="nama" id="nama"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tempat-lahir">Tempat Lahir</label>
                                            <input type="tempat-lahir" class="form-control" name="tempat-lahir" id="tempat-lahir"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tanggal-lahir">Tanggal Lahir (dd/mm/yyyy)</label>
                                            <div class="input-group">
                                                <input type="text" id="datepicker" class="form-control">
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jenis-kelamin">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jenis-kelamin" id="jenis-kelamin"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="golongan-darah">Golongan Darah</label>
                                            <input type="text" class="form-control" name="golongan-darah" id="golongan-darah"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="RT/RW">RT/RW</label>
                                            <input type="text" class="form-control" name="rtrw" id="rtrw"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="RT/RW">Kelurahan/Desa</label>
                                            <input type="text" class="form-control" name="keldes" id="keldes"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="kecamatan">Kecamatan</label>
                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="agama">Agama</label>
                                            <input type="text" class="form-control" name="agama" id="agama"
                                                placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="status">Status Perkwaninan</label>
                                            <select name="status" class="form-control">
                                                <option class="form-control" value="Kawin">Kawin</option>
                                                <option class="form-control" value="Belum_Kawin">Belum Kawin</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="pekerjaan">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                            placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="no_hp">No, Handphone</label>
                                            <input type="text" class="form-control" name="no_hp" id="no_hp"
                                            placeholder="">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" name="email" id="email"
                                            placeholder="">
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