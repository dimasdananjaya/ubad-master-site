<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FAQModel;
use DB;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        
        $this->middleware('auth');
    }

    public function index()
    {
        $dataFAQ=FAQModel::all();
        return view('pages.faq.faq')->with('datafaq',$dataFAQ);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simpan=new FAQModel;
        $simpan->pertanyaan=$request->input('pertanyaan');
        $simpan->jawaban=$request->input('jawaban');
       
        
        $simpan->save();
        alert()->success('Data Tersimpan !', '');
        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('faq')->where('id_faq', '=', $id)->delete();
        alert()->success('Data Terhapus !', '');
        return back();
    }
}
