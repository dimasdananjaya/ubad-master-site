@extends('layouts.admin-layout')

@section('content')
    <section id="daftar-pendaftar">
        <div class="container-fluid">
            <div class="card">
                <h3>Daftar Calon Mahasiswa</h3>
                <table id="tabel-pendaftar" class="table table-sm table-striped table-hover table-responsive-sm table-responsive-md" style="width: 100%;">
                    <thead>
                        <th>No.</th>
                        <th>ID.</th>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>No. Whatsapp</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Referral</th>
                        <th>Aksi</th>
                        <th></th>
                    </thead>
                    <tbody>
                    @foreach($dataPendaftar as $dtp)
                        <tr>
                            <td></td>
                            <td>{{$dtp->id_pendaftaran}}</td>
                            <td>{{$dtp->nama}}</td>
                            <td>{{$dtp->no_hp}}</td>
                            <td>{{$dtp->no_whatsapp}}</td>
                            <td>{{$dtp->email}}</td>
                            <td>{{$dtp->prodi}}</td>
                            <td>{{$dtp->tanggal_pendaftaran}}</td>
                            <td>{{$dtp->kelas}}</td>
                            <td>{{$dtp->status}}</td>
                            <td>{{$dtp->referral}}</td>
                            <td>
                                <a class="btn btn-success" style="color:#fff;float:left; margin-right:20px;" data-toggle="modal" data-target="#pendaftar-edit-modal{{$dtp->id_pendaftaran}}">Edit</a>

                            </td>
                            <td>
                                {!!Form::open(['action'=>['PendaftaranController@destroy', $dtp->id_pendaftaran]])!!}
                                    {{Form::hidden('_method', 'DELETE')}}                            
                                    {{Form::submit('Hapus',['class'=>'btn btn-danger'])}}   
                                {!!Form::close()!!}
                                </td>
                        </tr>
                                
                        <!-- Modal Edit pendaftar-->
                        <div class="modal fade" id="pendaftar-edit-modal{{$dtp->id_pendaftaran}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2>Edit Pendaftar</h2>   
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">                  
                                        {!!Form::open(['action'=>['PendaftaranController@update', $dtp->id_pendaftaran], 'method'=>'PUT'])!!}
                                            {{Form::label('Status','Status :')}}
                                            <select name="status" class="form-group form-control">
                                                <option value="diproses">Diproses</option>
                                                <option value="diterima">Diterima</option>
                                                <option value="penyerahan-persyaratan">Penyerahan Persyaratan</option>
                                                <option value="pembayaran1">Pembayaran Pendaftaran dan Initial Payment</option>
                                                <option value="registrasi-ulang">Registrasi Ulang</option>
                                                <option value="selesai">Selesai</option>
                                            </select>
                                            {{Form::submit('Update',['class'=>'btn btn-warning'])}}
                                        {!!Form::close()!!}
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div><!--card-->   
            <a href="/admin-page" class="btn btn-primary tombol-back">Kembali Ke Halaman Admin</a>
        </div><!--end container-->
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#tabel-pendaftar').DataTable( {
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