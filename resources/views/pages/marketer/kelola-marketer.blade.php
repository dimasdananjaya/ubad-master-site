@extends('layouts.admin-layout')

@section('content')
    <section id="kelola-marketer">
        <div class="container-fluid pb-3 pt-2 mt-5">
            <div class="card pt-3 pb-4 dx-block mx-auto">
                <h3>Daftar Marketer</h3>
                <table id="tabel-marketer" class="table table-striped table-bordered table-hover mt-2 table-responsive-sm table-responsive-md">
                    <thead>
                        <th>Nama</th>
                        <th>Whatsapp</th>
                        <th>Email</th>
                        <th>Referral</th>
                        <th>Bank</th>
                        <th>Rekening</th>
                        <th>A.N</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($dataMarketer as $dtm)
                            <tr>
                                <td>{{$dtm->nama_lengkap}}</td>
                                <td>{{$dtm->whatsapp}}</td>
                                <td>{{$dtm->email}}</td>
                                <td>{{$dtm->referral}}</td>
                                <td>{{$dtm->bank}}</td>
                                <td>{{$dtm->rekening}}</td>
                                <td>{{$dtm->an}}</td>
                                <td>{{$dtm->status}}</td>
                                <td>
                                    <a class="btn btn-success" style="color:#fff;" data-toggle="modal" data-target="#marketer-edit-modal{{$dtm->id_marketer}}">Edit</a>
                                </td>
                            </tr>
                            <!-- Modal Edit pendaftar-->
                            <div class="modal fade" id="marketer-edit-modal{{$dtm->id_marketer}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h2>Edit Marketer</h2>   
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">                  
                                            {!!Form::open(['action'=>['MarketerController@update', $dtm->id_marketer], 'method'=>'PUT'])!!}
                                                {{Form::label('Status','Status :')}}
                                                <select name="status" class="form-group form-control">
                                                    <option value="Official Marketer">Official Marketer</option>
                                                </select>
                                                {{Form::label('referral','Referral :')}}
                                                {{Form::text('referral','',['class'=>'form-control form-group'])}}
                                                {{Form::label('bank','Bank :')}}
                                                {{Form::text('bank','',['class'=>'form-control form-group'])}}
                                                {{Form::label('rekening','Rekening :')}}
                                                {{Form::text('rekening','',['class'=>'form-control form-group'])}}
                                                {{Form::label('an','A.N :')}}
                                                {{Form::text('an','',['class'=>'form-control form-group'])}}
                                                {{Form::submit('Update',['class'=>'btn btn-warning'])}}
                                            {!!Form::close()!!}
                                        </div><!-- modal body-->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div><!-- modal footer-->
                                    </div><!-- modal konten-->
                                </div><!-- modal dialog-->
                            </div><!-- modal fade-->   
                        @endforeach
                    </tbody>
                </table>
            </div><!--card-->
        </div><!--container-->
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#tabel-marketer').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
            } );
        
            table.buttons().container()
                .appendTo( '#tabel-pendaftar_wrapper .col-md-6:eq(0)' );

            table.on( 'order.dt search.dt', function () {
                table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        } );
    </script>
@endsection