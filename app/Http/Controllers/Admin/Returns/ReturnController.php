<?php

namespace App\Http\Controllers\Admin\Returns;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ReturnController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function returnRequest(){
        $data = DB::table('orders')->where('return_order',1)->get();
        return view('Admin.return.request',compact('data'));
    }

    public function allReturn(){
        $data = DB::table('orders')->where('return_order',2)->get();
        return view('Admin.return.approved',compact('data'));
    }

    public function CancelReturn(){
        $data = DB::table('orders')->where('return_order',3)->get();
        return view('Admin.return.cancel',compact('data'));
    }

    public function approveReturnRequest($id){
        $data = DB::table('orders')->where('id',$id)->update(['return_order' => 2]);
        $notification=array(
            'messege'=>'Return Request Approved Successfully !!',
            'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
    }

    public function cancelReturnRequest($id){
        $data = DB::table('orders')->where('id',$id)->update(['return_order' => 3]);
        $notification=array(
            'messege'=>'Return Request Cancel !!',
            'alert-type'=>'error'
                );
            return Redirect()->back()->with($notification);
    }
    
}
