<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index(){
        $data = DB::table('contacts')->orderBy('id','DESC')->get();
        return view('admin.contact.all_message',compact('data'));
    }

    public function viewMessage($id){
        $data = DB::table('contacts')->where('id',$id)->first();
        return view('admin.contact.view_message',compact('data'));
    }

    public function seenMessage($id){
        DB::table('contacts')->where('id',$id)->update(['status' => 1 ]);
        $notification=array(
            'messege'=>'Message Send to Seen Box!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function unseenMessage($id){
        DB::table('contacts')->where('id',$id)->update(['status' => 0 ]);
        $notification=array(
            'messege'=>'Message Send to Unseen Box!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}
