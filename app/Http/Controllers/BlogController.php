<?php

namespace App\Http\Controllers;

use App\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;
use Alert;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blogs::latest()->paginate(10);
        return view('pages.berita.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = new Blogs;

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            //$destinationPath = public_path('/resources/file');
            $path = $request->file('cover_image')->storeAs(
                'public/blog_cover_image', $name
            );
            //$file->move($destinationPath, $name);

            // Create Post

            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $name;
            $post->save();
            alert()->success('Penyimpanan Berhasil !', '');
            return back();

        } else {
            alert()->success('Penyimpanan Berhasil !', '');
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
        $post = Blogs::find($id);
        return view('pages.berita.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Blogs::find($id);

        return view('pages.berita.edit')->with('post', $post);
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
        $post=Blogs::find($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            alert()->error('Pembuatan Blog Gagal !', 'Isi Formulir Dengan Benar');
            return back();
        }

        elseif($request->hasFile('cover_image')){

            $delete = $request->input('cover_image'); //cari nama file
            Storage::delete('public/blog_cover_image/'.$delete); //hapus file

            $file = $request->file('cover_image');
            $name = time() . '.' . $file->getClientOriginalExtension();
            //$destinationPath = public_path('/resources/file');
            $path = $request->file('cover_image')->storeAs(
                'public/blog_cover_image', $name
            );
            //$file->move($destinationPath, $name);

            $post->cover_image = $name;
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->user_id = $request->input('user_id');

            $post->save();
            alert()->success('Blog Diupdate !', '');
            return back();
        }

        else{
            $data->title = $request->input('title');
            $data->body = $request->input('body');
            $data->user_id = $request->input('user_id');
            
            $data->save();
            alert()->success('Blog Diupdate !', '');
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
