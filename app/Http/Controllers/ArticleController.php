<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function trading_accounts(Request $request,$type = 'standard'){
        return view("user.$type");
    }

    public function operations(Request $request,$type = 'operations'){
        return view("user.$type");
    }

    public function forex_affiliate(Request $request,$type = 'forex-affiliate'){
        return view("user.$type");
    }

    public function beginner(Request $request,$type = 'beginner'){
        return view("user.$type");
    }

    public function analytics(Request $request,$type = 'analytics'){
        return view("user.$type");
    }

    //外汇分析内容页
    public function forex_forecast(Request $request,$cat = '',$id=''){
        return view("info.$cat.$id");
    }

    public function news(Request $request,$cat = '',$id=''){
        return view("news.$cat.$id");
    }

    public function operations_info(Request $request,$cat = '',$id=''){
        return view("operations.$cat.$id");
    }

    public function article(Request $request){
        $uri=$request->path();
        $category = Category::where('cname','like','%'.$uri.'%')->select('id','father_id','title','cname')->first();
        $post_cid = $category->id;
        $path_array[] = $category;
        while($category->father_id>0){
            $category = Category::where('id',$category->father_id)->select('id','father_id','title','cname')->first();
            $path_array[] = $category;
        }

        $top_category = $category->id;
        $right_menu = Category::where('father_id',$top_category)->where('is_active',1)->get();

        krsort($path_array);//倒序

        //dd($path_array);
        if(empty($request->id)){
            $post = Post::where('category_id',$post_cid)->where('is_cat',1)->orderBy('id','desc')->first();
        }else{
            $post = Post::find($request->id);
        }
        //dd($category->id,$post);

        $view = isset($post->layout) && $post->layout == 'default'?'post.article':'post.article2';
        return view($view,compact('post','path_array','right_menu','post_cid'));
    }


}
