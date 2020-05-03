<?php

namespace App\Http\Controllers;

use App\Blogs;
use App\FAQModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /*
    public function __construct()
    {
    $this->middleware('auth');
    }
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Blogs::all();
        $dataFAQ=FAQModel::all();
        return view('index')
        ->with('posts', $posts)
        ->with('dataFAQ', $dataFAQ);
    }
}
