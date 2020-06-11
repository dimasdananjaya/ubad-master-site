@extends('layouts.app')

@section('content')
<section id="status-pendaftaran">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3>List Status Pendaftaran Calon Mahasiswa</h3>
                <hr>
                <img src="/resources/logo/status-pendaftaran.svg" class="status-pendaftaran-img" alt="..." />
                <p class="card-text text-justify">Tabel dibawah ini akan menampilkan status pendaftaran dari masing-masing calon mahasiswa. Ikuti Petunjuk
                dibawah tabel untuk informasi proses selanjutnya</p>
            </div><!--end col-->
        </div><!--end row-->

        <hr>
        <div class="card">
            <table id="tabel-status-pendaftaran" class="table table-striped table-responsive-md table-responsive-sm">
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status Pendaftaran</th>
                    <th>Tahap Selanjutnya</th>
                </thead>
                <tbody>
                    @foreach ($dataPendaftar as $dp)
                        <tr>
                            <td></td>
                            <td>{{$dp->nama}}</td>
                            @if($dp->status=='diproses')
                            <td>Diproses</td>
                            @elseif($dp->status=='diterima')
                            <td>Diterima</td>
                            @elseif($dp->status=='penyerahan-persyaratan')
                            <td>Penyerahan Persyaratan</td>
                            @elseif($dp->status=='pembayaran1')
                            <td>Pembayaran Pendaftaran dan Initial Payment</td>
                            @elseif($dp->status=='pembayaran2')
                            <td>Pembayaran DP3 dan Semester</td>
                            @elseif($dp->status=='selesai')
                            <td>Selesai, Terdaftar Mahasiswa Baru</td>
                            @endif
    
                            @if($dp->status=='diterima')
                            <td>Penyerahan Persyaratan</td>
                            @elseif($dp->status=='penyerahan-persyaratan')
                            <td>Pembayaran Pendaftaran dan Initial Payment</td>
                            @elseif($dp->status=='pembayaran1')
                            <td>Pembayaran DP3 dan Semester</td>
                            @elseif($dp->status=='pembayaran2')
                            <td>Menunggu Proses Verifikasi Pembayaran</td>
                            @elseif($dp->status=='diproses')
                            <td>Menunggu Diproses</td>
                            @elseif($dp->status=='selesai')
                            <td>Selesai, Terdaftar Mahasiswa Baru</td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div><!--card-->
        
        <h3 class="mt-4">Keterangan Status Pendaftaran</h3>

        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-head">
                    <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>Diproses</b></p>
                    </div>
                    <div class="card-body">
                        <p>
                            Jika status pendaftaran adalah <b>'Diproses'</b> maka formulir yang anda isi di website sedang diproses
                            oleh admin
                        <p>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--end col-->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-head">
                    <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>Diterima</b></p>
                    </div>
                    <div class="card-body">
                        <p>
                            Jika status pendaftaran adalah <b>'Diterima'</b> maka data formulir pendaftaran website telah diterima, lanjut ke tahap
                            <b>Penyerahan Persyaratan</b>
                        <p>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--end col-->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-head">
                    <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>Pembayaran Pendaftaran dan Initial Payment</b></p>
                    </div>
                    <div class="card-body">
                        <p>
                            Jika status pendaftaran adalah <b>'Pembayaran Pendaftaran dan Initial Payment'</b> maka calon
                            mahasiswa harus melunasi <b>pembayaran pendaftaran dan initial payment</b>
                        <p>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--end col-->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-head">
                    <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>Pembayaran DP3 dan Semester</b></p>
                    </div>
                    <div class="card-body">
                        <p>
                            Jika status pendaftaran adalah <b>'Pembayaran DP3 dan Semester'</b> maka calon mahasiswa harus melunasi <p>pembayaran
                            DP3 dan Semester</p>
                        <p>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--end col-->

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-head">
                    <img class="qa-icon" src="/resources/logo/qa.svg"><p class="qa-question"><b>Selesai</b></p>
                    </div>
                    <div class="card-body">
                        <p>
                            Selamat anda telah terdaftar sebagai Mahasiswa Baru Universitas Bali Dwipa
                        <p>
                    </div><!--card-body-->
                </div><!--card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
</section>

<script type="text/javascript">
    $(document).ready(function() {
        var t = $('#tabel-status-pendaftaran').DataTable( {
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