@extends('layouts.app')

@section('content')
    <section id="form-pendaftaran">
        <div class="container">
            <div class="row">
                <div data-aos="fade-left" class="col-lg-12" style="margin-top:1%;">
                    <h2 data-aos="fade-left" class="text-center"><b>Pendaftaran Mahasiswa Baru</b></h2>
                    <hr>
                    <p style="text-align:justify" class="text-center" data-aos="fade-left" class="why-dosen lead">
                        Silahkan mengisi form dibawah ini untuk melakukan pendaftaran kolom diisi selengkap mungkin dan merupakan data yang sebenarnya.
                    <p>
                    <img style="  display: block;
                    margin-left: auto;
                    margin-right: auto;
                    width: 65%;" class="mx-auto" src="/resources/logo/pendaftaran-form.jpg">
                </div>

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Identitas Diri</h3>
                            <hr>
                            <form action="{{route('pendaftaran.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="title">Nama</label>
                                    <input type="title" class="form-control" name="title" id="title"
                                        placeholder="Your post title here!">
                                </div>
                                <div class="form-group">
                                    <label for="body">Post description</label>
                                    <textarea class="form-control" name="body" id="article-ckeditor" cols="30" rows="10"
                                        placeholder="Your post description here!"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
@endsection