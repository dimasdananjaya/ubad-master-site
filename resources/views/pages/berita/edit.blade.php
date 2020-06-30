@extends('layouts.admin-layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Edit Berita</h1>
            <br />

            <form action="{{route('blogs.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="title" class="form-control" name="title" id="title" value="{!! $post->title !!}"
                        required>
                </div>
                <div class="form-group">
                    <label for="body">Post description</label>
                    <textarea id="editor" class="form-control" name="body" id="editor" cols="30" rows="10"
                        required>{!! $post->body !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="cover_image">File input</label>
                    <input type="file" id="cover_image" name="cover_image">
                    <p class="help-block">Post cover image here.</p>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    {{-- @include('inc.footer') --}}
</div>

<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection