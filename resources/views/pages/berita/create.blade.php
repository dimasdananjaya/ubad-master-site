@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Buat Berita Baru</h1>
            <br />
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif

            <form action="{{route('blogs.store')}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="title" class="form-control" name="title" id="title"
                        placeholder="Your post title here!">
                </div>
                <div class="form-group">
                    <label for="body">Post description</label>
                    <textarea id="editor" class="form-control" name="body"
                        placeholder="Your post description here!"></textarea>
                </div>

                <div class="form-group">
                    <label for="cover_image">File input</label>
                    <input type="file" id="cover_image" name="cover_image">
                    <p class="help-block">gambar maksimal 2 mb</p>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div>


@endsection