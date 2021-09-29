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
}
