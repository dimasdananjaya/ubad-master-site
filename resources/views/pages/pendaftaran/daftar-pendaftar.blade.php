@extends('layouts.app')

@section('content')
    <section id="daftar-pendaftar">
        <div class="container">
            <div class="card">
                <h3>Daftar Calon Mahasiswa</h3>
            <div class="table-responsive table-hover">
                <table id="tabel" class="table">
                    <thead>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>No. Hp</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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