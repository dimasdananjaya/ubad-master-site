<?php

namespace App\Http\Controllers;

use App\MarketerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Alert;

class MarketerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'store']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marketers = MarketerModel::where('status','Official Marketer');
        return view('pages.marketer.kelola-marketer')->with('marketers', $marketers);
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
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'alamat' => 'required',
            'whatsapp' => 'required|unique:marketers,whatsapp',
            'email' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif,svg|max:550'
        ]);

        $data = new MarketerModel;

        if ($validator->fails()) {
            alert()->error('Registrasi Gagal !', 'Isi Formulir Dengan Benar');
            return back();
        }

        elseif ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $name = $request->input('nama_lengkap'). '.' . $file->getClientOriginalExtension();
            //$destinationPath = public_path('/resources/file');
            $path = $request->file('foto')->storeAs(
                'public/foto_affiliate_marketer', $name
            );
            //$file->move($destinationPath, $name);

            $data->nama_lengkap = $request->input('nama_lengkap');
            $data->alamat = $request->input('alamat');
            $data->whatsapp = $request->input('whatsapp');
            $data->email = $request->input('email');
            $data->foto = $name;
            $data->status = 'awaiting';
            $data->save();
            alert()->success('Pendaftaran Marketer Berhasil !', 'anda telah didaftarkan menjadi Marketer Universitas Bali Dwipa');
            return view('pages.marketer.validated-marketer');

        } else {
            alert()->error('Pendaftaran Gagal !', 'periksa kembali data');
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $data=MarketerModel::find($id);

        $validator = Validator::make($request->all(), [
            'rekening' => 'required',
            'referral' => 'required',
            'bank' => 'required',
            'an' => 'required',
            'status' => 'required',
        ]);

        if ($validator->fails()) {
            alert()->error('Update Gagal !', 'Isi Formulir Dengan Benar');
            return back();
        }

        elseif($request->hasFile('foto')){

            
            //$delete = $request->input('foto'); //cari nama file
            //Storage::delete('public/foto_affiliate_marketer/'.$delete); //hapus file

              //  $file = $request->file('foto');
                //$name = $request->input('nama_lengkap'). '.' . $file->getClientOriginalExtension();
                //$destinationPath = public_path('/resources/file');
                //$path = $request->file('foto')->storeAs(
                 //   'public/foto_affiliate_marketer', $name
                //);
                //$file->move($destinationPath, $name);
    

                $data->bank = $request->input('bank');
                $data->rekening = $request->input('rekening');
                $data->an = $request->input('an');
                $data->status = $request->input('status');
                $data->referral = $request->input('referral');
                $data->save();
                alert()->success('Update Marketer Berhasil !', 'data Marketer telah diubah');
                return back();
    
            } 
            else {
                $data->bank = $request->input('bank');
                $data->rekening = $request->input('rekening');
                $data->an = $request->input('an');
                $data->status = $request->input('status');
                $data->referral = $request->input('referral');
                $data->save();
                alert()->success('Update Marketer Berhasil !', 'data Marketer telah diubah');
    
                return back();
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $post = Blogs::find($id);
        // check of correct user
        $delete = $post->cover_image; //cari nama file
        Storage::delete('public/blog_cover_image/'.$delete); //hapus file
        $post->delete();
        return redirect('/blogs')->with('success', 'Post deleted successfully');
    }

}
