<?php

namespace App\Http\Controllers\Admin\SiteSetting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SiteSettingController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function siteSetting(){
        $data = DB::table('site_settings')->first();
        return view('Admin.setting.site_setting',compact('data'));
    }
    public function updateSiteSetting(Request $request){
        $id = $request->id;

        $data = array();
        $data['company_name'] = $request->company_name;
        $data['company_address'] = $request->company_address;
        $data['phone_one'] = $request->phone_one;
        $data['phone_two'] = $request->phone_two;
        $data['email'] = $request->email;
        $data['facebook'] = $request->facebook;
        $data['youtube'] = $request->youtube;
        $data['instagram'] = $request->instagram;
        $data['twitter'] = $request->twitter;


        $data = DB::table('site_settings')->where('id',$id)->update($data);
        $notification = array(
            'messege' =>'Site Setting updated successfully !!',
            'alert-type' =>'success'
            );
        return Redirect()->back()->with($notification);
    }
}
