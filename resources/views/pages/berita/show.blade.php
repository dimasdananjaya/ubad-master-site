@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-8">
            <div class="well">
                <h1>{{ $post->title }}</h1>
           <img style="width:100%; height:100%;" src="/ubad-master/public/public/images/cover_image/{{$post->cover_image}}"
                            alt="{{$post->cover_image}}">
                <br><br>
                <p class="blog-post-meta">Posted at : {{ $post->created_at }} | by : {{ $post->user->name}}</p>
                <p>{!! $post->body !!}</p>
                <a class="btn btn-primary" href="{{route('blogs.index')}}">Kembali Ke Halaman Berita</a>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="well">
                <h1>Options</h1>
                <hr>
                <a href="{{ route('blogs.edit', $post->id)}}" class="btn btn-primary">Edit Post</a>
                <form action="{{route('blogs.destroy', $post->id)}}" method="POST" class="pull-right">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
 
    </div>
    {{-- @include('inc.footer') --}}
</div>
@endsection