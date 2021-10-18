<?php

namespace App\Http\Controllers;

use App\Model\frontend\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderDetailController extends Controller
{
    public function viewOrder($id)
    {
        $order = DB::table('orders')
                    ->join('users','orders.user_id','users.id')
                    ->select('orders.*','users.name','users.phone')
                    ->where('orders.id',$id)
                    ->first();

        $shipping = DB::table('shippings')->where('order_id',$id)->first();

        $details = DB::table('order_details')
                    ->join('products','order_details.product_id','products.id')
                    ->select('order_details.*','products.product_code','products.image_one')
                    ->where('order_details.order_id',$id)
                    ->get();
                    
        return view('frontend.view_order_details',compact('order','shipping','details'));
                    
    }

    
}
