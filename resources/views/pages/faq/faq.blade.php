@extends('layouts.app')

@section('content')
    <section id="faq">
        <div class="container">
            <div class="row">           
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3><b>Add FAQ</b></h3>                   
                            <hr>
                            <form action="{{route('faq.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="pertanyaan">Pertanyaan</label>
                                            <input type="pertanyaan" class="form-control" name="pertanyaan" id="pertanyaan"
                                                placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="jawaban">Jawaban</label>
                                            <textarea type="text" class="form-control" name="jawaban" id="jawaban"
                                            placeholder=""></textarea>
                                        </div>
                                    </div><!--end col-->

                                </div><!--end row-->
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div><!--card-body-->
                    </div><!--card-->
                </div><!--col-12-->

                <div class="col-lg-6" id="daftarfaq">
                    <div class="card">
                        <h3>Daftar FAQ</h3>
                    <div class="table-responsive table-hover table-responsive">
                        <table id="tabel" class="table">
                            <thead>
                                <th>ID.</th>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                            @foreach($datafaq as $dtf)
                                <tr>
                                    <td>{{$dtf->id_faq}}</td>
                                    <td>{{$dtf->pertanyaan}}</td>
                                    <td>{{$dtf->jawaban}}</td>
                                    <td>
                                        {{ Form::open(['action' => ['FAQController@destroy', $dtf->id_faq], 'class' => 'inline']) }}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        
                                        {{Form::submit('Hapus',['class'=>'btn btn-danger'])}}

                                    {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
        
                    </div>   
                    <a href="/admin-page" class="btn btn-primary tombol-back">Kembali Ke Halaman Admin</a>
                </div>
            </div><!--end row-->
        </div><!--end container-->
    </section>
@endsection