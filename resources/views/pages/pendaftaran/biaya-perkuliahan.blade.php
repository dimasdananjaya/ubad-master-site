@extends('layouts.app')

@section('content')
<section id="biaya-perkuliahan">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="pt-3 white-text">Biaya Perkuliahan Mahasiswa Baru Tahun Akademik 2020/2021</h1>
        <p class="white-text">Dibawah ini adalah biaya perkuliahan masing-masing program studi khusus <b>Kelas Reguler</b></p>
        <hr>
      </div>
    </div>

    <div class="carousel-biaya">
        <div class="card">
          <h5 class="card-title pt-4"><b>Teknologi Pangan</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/pangan.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 3 Juta <br>SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.5 Juta </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 5 Juta </b></p>

            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
  
        <div class="card">
          <h5 class="card-title pt-4"><b>Teknik Biomedis</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/biomedis.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 jt </s><br><p style="color: #0f4c75;"> Rp.2.5 jt (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 3 Juta <br>SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 9.500.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 6.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
  
        <div class="card">
          <h5 class="card-title pt-4"><b>Psikologi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/psikologi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 3 Juta <br>SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.500.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 5.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Gizi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/gizi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2.5 Juta <br>SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 4.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Farmasi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/farmasi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 4 Juta <br>SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 9.500.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) :<br><b> Rp 6.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Akuntansi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/akuntansi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2 Juta <br>SKS (20) : Rp. 1.5 Juta <br><small>(Biaya Per-SKS : Rp. 75.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Hubungan Masyarakat</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/humas.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2 Juta <br>SKS (20) : Rp. 1.5 Juta <br><small>(Biaya Per-SKS : Rp. 75.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Bahasa Inggris</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/bahasa-inggris.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2 Juta <br>SKS (20) : Rp. 1.5 Juta <br><small>(Biaya Per-SKS : Rp. 75.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Hukum</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/hukum.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2 Juta <br>SKS (20) : Rp. 1.5 Juta <br><small>(Biaya Per-SKS : Rp. 75.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Sistem Informasi</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/sistem-informasi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br><s> Rp. 10 Juta </s><br><p style="color: #0f4c75;"> Rp.2.5 Juta (potongan 75%) *</p></li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li><b>Per-Semester</b><br>SPP : Rp. 2.5 Juta <br >SKS (20) : Rp. 2 Juta <br><small>(Biaya Per-SKS : Rp. 100.000) **</small></li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.000.000 </b></p>
            <p class="text-center">Rata-Rata Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 4.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
      </div><!--card deck-->
      <p class="text-center" style="color: #fff;"><small>geser untuk lihat yang lain</small></p>
    </div><!--carouse biaya-->

  </div><!--container-->

  <div class="container">
    <h4 style="color:#fff;"><b>Note :</b></h4>
    <div class="row">
      <div class="col-lg-12">
        <ul class="text-justify pl-2" style="color:#fff;">
          <li>Biaya SKS besaranya sesuai jumlah SKS yang diambil tiap semester (asumsi rata-rata  20 SKS setiap  semester)</li>
          <li>Biaya Laboratorium, Biaya Wisuda, Biaya Skripsi dan lainnya akan diberitahukan  kemudian</li>
          <li>Beasiswa : Rp 1 Juta untuk pendaftar jalur bebas test, Rp 500 Rb untuk  pendaftar  jalur seleksi Gel I,  
            Beasiswa dan  kemudahan untuk mahaiswa berprestasi dan kurang  mampu</li>
          <li>Bagi calon mahasiswa yang diterima dan memutuskan untuk masuk di Perguruan Tinggi Negeri yang  diterima melalui  jalur SBMPTN dan SNMPTN, 
            maka calon mahasiswa berhak menerima kembali biaya  yang telah dibayarkan. </li>
          <li>Pengurusan pengambilan biaya yang sudah dibayarkan dilayani maksimal 21 hari  kerja dari tanggal surat keterangan  dari PTN yang bersangkutan.</li>
        </ul>
      </div><!--col 6-->
    </div><!--row-->
  </div><!--container fluid-->
</section>
@endsection