<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class BlogController extends Controller
{
    public function blog(){
        $post = DB::table('posts')
                ->join('post_categories','posts.category_id','post_categories.id')
                ->select('posts.*','post_categories.post_categoryName_en','post_categories.post_categoryName_bn')
                ->get();
        return view('frontend.pages.blog',compact('post'));
    }
    public function english(){
        Session::get('lang');
        Session()->forget('lang');
        Session::put('lang','english');
        return redirect()->back();
    }
    public function bangla(){
        Session::get('lang');
        Session()->forget('lang');
        Session::put('lang','bangla');
        return redirect()->back();
    }

    public function viewSinglePost($id){
        $post = DB::table('posts')->where('id',$id)->get();
        return view('frontend.pages.single_post',compact('post'));
    }
}
