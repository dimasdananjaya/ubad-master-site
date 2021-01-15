<?php

namespace App\Http\Controllers;
use DB;
use App\PendaftaranModel;
use App\MarketerModel;

class RouteController extends Controller
{
    //HALAMAN PROGRAM STUDI
    public function teknologiPanganPage()
    {
        return view('pages/prodi/teknologi-pangan');
    }

    public function teknikBiomedisPage()
    {
        return view('pages/prodi/teknik-biomedis');
    }

    public function psikologiPage()
    {
        return view('pages/prodi/psikologi');
    }

    public function giziPage()
    {
        return view('pages/prodi/gizi');
    }

    public function farmasiPage()
    {
        return view('pages/prodi/farmasi');
    }

    public function akuntansiPage()
    {
        return view('pages/prodi/akuntansi');
    }

    public function hubunganMasyarakatPage()
    {
        return view('pages/prodi/hubungan-masyarakat');
    }

    public function bahasaInggrisPage()
    {
        return view('pages/prodi/bahasa-inggris');
    }

    public function hukumPage()
    {
        return view('pages/prodi/hukum');
    }

    public function sistemInformasiPage()
    {
        return view('pages/prodi/sistem-informasi');
    }

    public function tentangUbadPage()
    {
        return view('pages/profil/tentang-ubad');
    }

    public function visiMisiPage()
    {
        return view('pages/profil/visi-misi');
    }

    #pendaftaran
    public function mahasiswaBaruPage()
    {
        return view('pages/pendaftaran/mahasiswa-baru');
    }

    public function seleksiOnlinePage()
    {
        return view('pages/pendaftaran/seleksi-online');
    }

    public function validated(){
        return view('pages.pendaftaran.validated');
    }

    public function formPendaftaran(){
        return view('pages.pendaftaran.form-pendaftaran');
    }

    public function statusPendaftaranPage(){
        $dataPendaftar=DB::table('pendaftaran')->orderBy('nama','asc')->get();
        return view('pages.pendaftaran.status-pendaftaran')->with('dataPendaftar',$dataPendaftar);
    }

    //Marketer Page
    public function marketerPage(){
        $dataMarketer=DB::table('marketers')
        ->where('status', '=', 'Official Marketer')
        ->orderBy('nama_lengkap','asc')->get();
        return view('pages.marketer.marketer-page')->with('dataMarketer',$dataMarketer);
    }

    public function registerMarketer(){
        return view('pages.marketer.register-marketer');
    }

    public function kelolaMarketer(){
        $dataMarketer=DB::table('marketers')->orderBy('nama_lengkap','asc')->get();
        return view('pages.marketer.kelola-marketer')->with('dataMarketer',$dataMarketer);
    }

    public function validatedMarketer(){
        return view('pages.marketer.validated-marketer');
    }

    //HALAMAN PROFIL STAFF
    public function staffPage(){
        return view('pages.profil.staff');
    }

    public function biayaPerkuliahanPage(){
        return view('pages.pendaftaran.biaya-perkuliahan');
    }

    //Akademik

    public function kalenderAkademikPage(){
        return view('pages.akademik.kalender-akademik');
    }
}
