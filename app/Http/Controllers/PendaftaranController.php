<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PendaftaranModel;
use DB;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //public function __construct()
  //  {
 //       $this->middleware('auth', ['except' => ['store']]);
 //   }

    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan=new PendaftaranModel;
        $simpan->nama=$request->input('nama');
        $simpan->email=$request->input('email');
        $simpan->no_hp=$request->input('no_hp');
        $simpan->no_whatsapp=$request->input('no_whatsapp');
        $simpan->tanggal_pendaftaran=now();
        $simpan->prodi=$request->input('prodi');
        $simpan->kelas=$request->input('kelas');
        $simpan->referral=$request->input('referral');
        $simpan->status='diproses';
        $simpan->jalur='EARLY BIRD';
        
        $simpan->save();
        alert()->success('Data Pendaftaran Tersimpan !', '');
        return view('pages.pendaftaran.validated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $simpan=PendaftaranModel::find($id);

        $simpan->status=$request->input('status');
        
        $simpan->save();
        alert()->success('Data Tersimpan !', '');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pendaftaran')->where('id_pendaftaran', '=', $id)->delete();
        alert()->success('Data Terhapus !', '');
        return back();
    }

}
