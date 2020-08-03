@extends('layouts.app')

@section('content')
<section id="biaya-perkuliahan">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="pt-3 white-text">Biaya Perkuliahan</h1>
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
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 6.000.000</li>
              <li>Biaya SKS Per-Semester : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 9.500.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 6.000.000 </b></p>

            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
  
        <div class="card">
          <h5 class="card-title pt-4"><b>Teknik Biomedis</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/biomedis.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 6.000.000</li>
              <li>Harga Per-SKS : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 9.500.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 6.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
  
        <div class="card">
          <h5 class="card-title pt-4"><b>Psikologi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/psikologi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 5.000.000</li>
              <li>Harga Per-SKS : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.500.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 5.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Gizi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/gizi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 4.500.000</li>
              <li>Harga Per-SKS : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 4.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Farmasi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/farmasi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 6.000.000</li>
              <li>Harga Per-SKS : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 9.500.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) :<br><b> Rp 6.000.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Akuntansi</b></h5>
          <img class="card-img-top pt-3 mx-auto d-block" src="/resources/logo/akuntansi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 3.500.000</li>
              <li>Harga Per-SKS : <br>Rp. 75.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Hubungan Masyarakat</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/humas.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 3.500.000</li>
              <li>Biaya SKS Per-Semester : <br>Rp. 75.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Bahasa Inggris</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/bahasa-inggris.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 3.500.000</li>
              <li>Biaya SKS Per-Semester : <br>Rp. 75.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Hukum</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/hukum.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 3.500.000</li>
              <li>Biaya SKS Per-Semester : <br>Rp. 75.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 7.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 3.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->

        <div class="card">
          <h5 class="card-title pt-4"><b>Sistem Informasi</b></h5>
          <img class="card-img-top pt-3 d-block mx-auto" src="/resources/logo/sistem-informasi.svg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-center">Rincian Biaya Perkuliahan : </p>
            <ul class="text-left">
              <li>DP3 : <br> Rp. 2.500.000 *</li>
              <li>PKKMB : <br> Rp. 500.000 *</li>
              <li>Jas Almamater : <br> Rp. 500.000 *</li>
              <li>Per-Semester + (20 sks) : <br>Rp. 4.500.000</li>
              <li>Biaya SKS Per-Semester : <br>Rp. 100.000 **</li>
              <li> <small>*) dibayar hanya pada semester 1</small></li>
              <li> <small>**) dibayar sesuai jumlah sks yang diambil per-semester</small></li>
            </ul>
            <p class="text-center">Total Biaya Semester 1 : <br><b> Rp 8.000.000 </b></p>
            <p class="text-center">Total Biaya Semester 2-8 (20 sks) : <br><b> Rp 4.500.000 </b></p>
            <a class="btn btn-primary d-block mx-auto" href="{{URL::route('mahasiswa-baru')}}">Daftar Mahasiswa Baru</a>
          </div><!--card body-->
        </div><!--card-->
      </div><!--card deck-->
      <p class="text-center" style="color: #fff;"><small>geser untuk lihat yang lain</small></p>
    </div><!--carouse biaya-->

  </div><!--container-->
</section>
@endsection