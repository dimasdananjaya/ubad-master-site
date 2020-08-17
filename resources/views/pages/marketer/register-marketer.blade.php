@extends('layouts.app')

@section('content')
<section id="marketer">
    <div class="container pb-3 pt-3 mt-4">
        <div class="card pt-3 pb-4 d-block mx-auto">
            <h1 class="text-center">Daftar Affiliate Marketer</h1>
            <img class="d-block mx-auto" src="/resources/logo/marketer.svg">
            <br />
            <form action="{{route('marketer.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap"
                        placeholder="">
                </div>

                <div class="form-group">
                    <label for="body">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat"
                    placeholder="">
                </div>

                <div class="form-group">
                    <label for="body">Whatsapp</label>
                    <input type="text" class="form-control" name="whatsapp" id="whatsapp"
                    placeholder="">
                </div>

                <div class="form-group">
                    <label for="body">Email</label>
                    <input type="email" class="form-control" name="email" id="email"
                    placeholder="">
                </div>

                <div class="form-group">
                    <label for="cover_image">Foto</label>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="foto" id="foto">
                    </div>
                    <p for="exampleFormControlFile1"><small style="color: red;"> ukuran max 500kb </small></p>
                </div>

                <button type="submit" class="btn btn-primary mx-auto d-block">Daftar</button>
            </form>
        </div><!--card-->
    </div><!--container-->
</section>
@endsection