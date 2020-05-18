@extends('layouts.app')

@section('content')
    <section id="daftar-pendaftar">
        <div class="container">
            <div class="card">
                <h3>Daftar Calon Mahasiswa</h3>
            <div class="table-responsive table-hover table-responsive">
                <table id="tabel" class="table">
                    <thead>
                        <th>ID.</th>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>No. Whatsapp</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Kelas</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                    @foreach($dataPendaftar as $dtp)
                        <tr>
                            <td>{{$dtp->id_pendaftaran}}</td>
                            <td>{{$dtp->nama}}</td>
                            <td>{{$dtp->no_hp}}</td>
                            <td>{{$dtp->no_whatsapp}}</td>
                            <td>{{$dtp->email}}</td>
                            <td>{{$dtp->prodi}}</td>
                            <td>{{$dtp->tanggal_pendaftaran}}</td>
                            <td>{{$dtp->kelas}}</td>
                            <td>{{$dtp->status}}</td>
                            <td>
                                <a class="btn btn-success" style="color:#fff;float:left; margin-right:20px;" data-toggle="modal" data-target="#pendaftar-edit-modal{{$dtp->id_pendaftaran}}">Edit</a>
                            </td>
                            <td>
                                
                                {!!Form::open(['action'=>['Pendaftaran@destroy', $dtp->id_pendaftaran]])!!}
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
                                        {!!Form::open(['action'=>['Pendaftaran@update', $dtp->id_pendaftaran], 'method'=>'PUT'])!!}
                                 
                                            {{Form::label('Kelas','Kelas :')}}
                                            <select name="kelas" class="form-group form-control">
                                                <option value="reguler">Reguler</option>
                                                <option value="karyawan">Karyawan</option>
                                            </select>
                                            {{Form::label('Status','Status :')}}
                                            <select name="status" class="form-group form-control">
                                                <option value="reguler">Diterima</option>
                                                <option value="karyawan">Batal</option>
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
            </div>

            </div>   
            <a href="/admin-page" class="btn btn-primary tombol-back">Kembali Ke Halaman Admin</a>
        </div><!--end container-->
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            var t = $('#tabel').DataTable( {
                "columnDefs": [ {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                } ],
                "order": [[ 1, 'asc' ]],
                "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
            }
            } );
        
            t.on( 'order.dt search.dt', function () {
                t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();        
        } );
    </script>
@endsection