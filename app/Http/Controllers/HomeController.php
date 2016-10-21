<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Post::where('category_id',14)->where('is_draft',0)->where('is_cat',0)->orderBy('id','desc')->paginate(6);
        //dd($news);
        return view('user.home',compact('news'));
    }
}
