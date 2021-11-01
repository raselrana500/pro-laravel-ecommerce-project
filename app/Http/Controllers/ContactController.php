<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
    public function index(){
        return view('frontend.pages.contact');
    }

    public function sendData(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['messege'] = $request->message;
        $data['status'] = 0;
        
        DB::table('contacts')->insert($data);
        $notification=array(
            'messege'=>'Your Message send Successfully !!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
