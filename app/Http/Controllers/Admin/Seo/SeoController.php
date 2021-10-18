<?php

namespace App\Http\Controllers\Admin\Seo;

use App\Model\admin\Seo;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function seo()
    {
        $seo = DB::table('seos')->first();
        return view('admin.seo.index',compact('seo'));
    }

    public function updateSeoInfo(Request $request)
    {
       $id = $request->id;

       $data = array();
       $data['meta_title'] = $request->meta_title;
       $data['meta_author'] = $request->meta_author;
       $data['meta_tag'] = $request->meta_tag;
       $data['meta_description'] = $request->meta_description;
       $data['google_analytics'] = $request->google_analytics;
       $data['bing_analytics'] = $request->bing_analytics;
       DB::table('seos')->where('id',$id)->update($data);
       $notification = array(
        'messege' =>'Seo info updated successfully !!',
        'alert-type' =>'success'
        );
    return Redirect()->back()->with($notification);
    }

    
}
