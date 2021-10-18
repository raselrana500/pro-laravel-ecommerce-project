<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontController extends Controller
{
    public function storeNewslater(Request $request){
        $validateData= $request->validate([
            'email' => 'required|unique:newslatters|max:55',
        ]);

        $data = array();
        $data['email'] = $request->email;
        DB::table('newslatters')->insert($data);
        
        $notification=array(
            'messege'=>'Thanks For Subscribe!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    
    public function homePage()
    {
        return view('frontend.pages.index');
    }

    public function orderTracking(Request $request)
    {
        $code = $request->status_code;
        $track = DB::table('orders')->where('status_code',$code)->first();
        if ($track) {
            return view('frontend.pages.order_tracking',compact('track'));
        }else{
            $notification=array(
                'messege'=>'Invalid Status code !!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }
}
