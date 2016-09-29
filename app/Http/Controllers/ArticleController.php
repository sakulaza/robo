<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function about(Request $request,$type = 'about')
    {
        //$path = $request->path();
        //$article = Post::where('subtitle',$path)->firstOrFail();
        return view("user.$type");
    }

    public function trade_conditions(Request $request,$type = 'account-types'){
        return view("user.$type");
    }
}
