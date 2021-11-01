<?php

namespace App\Http\Controllers\Admin\Order;

use App\Model\frontend\Order;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function newOrder()
    {
       $order = DB::table('orders')->where('status',0)->orderBy('id','DESC')->get();
       return view('admin.order.pending',compact('order'));
    }

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
                    
        return view('admin.order.view_order',compact('order','shipping','details'));
                    
    }
//payment accept by admin from new order -> view page
    public function paymentAccept($id){
        DB::table('orders')->where('id',$id)->update(['status'=>1,'delivery_date'=>date('d-m-y')]);
        $notification = array(
            'messege' =>'Payment Accept Done !!',
            'alert-type' =>'success'
        );
        return Redirect()->route('admin.neworder')->with($notification);
    }

//order cancel by admin
    public function cancelOrder($id){
        DB::table('orders')->where('id',$id)->update(['status'=>4,'delivery_date'=>date('d-m-y')]);
        $notification = array(
            'messege' =>'Order Cancel Done !!',
            'alert-type' =>'success'
        );
        return Redirect()->back()->with($notification);
    }

//order delivery process
    public function OrderDeliveryProcess($id){
        DB::table('orders')->where('id',$id)->update(['status'=>2,'delivery_date'=>date('d-m-y')]);
        $notification = array(
            'messege' =>'Send to delivery !!',
            'alert-type' =>'success'
        );
        return Redirect()->route('admin.payment.accept')->with($notification);
    }

//order delivery done
    public function OrderDeliveryDone($id){

        $data = DB::table('order_details')->where('order_id',$id)->get();

        foreach ($data as  $row) {
            DB::table('products')
                    ->where('id',$row->product_id)
                    ->update(['product_quantity' => DB::raw('product_quantity-'.$row->quantity)]);
        }

        DB::table('orders')->where('id',$id)->update(['status'=>3,'delivery_date'=>date('d-m-y'),
        'delivery_month'=>date('F'),'delivery_year'=>date('Y')]);
        $notification = array(
            'messege' =>'Delivery Done !!',
            'alert-type' =>'success'
        );
        return Redirect()->route('admin.process.delivery')->with($notification);
    }

//view accept payment order
    public function acceptPayment(){
        $order = DB::table('orders')->where('status',1)->orderBy('id','DESC')->get();        
        return view('admin.order.pending',compact('order'));
    }
//view cancel order
    public function cancelOrderView(){
        $order = DB::table('orders')->where('status',4)->orderBy('id','DESC')->get();        
        return view('admin.order.pending',compact('order'));
    }

//progress order view
    public function processDeliveryOrderView(){
        $order = DB::table('orders')->where('status',2)->orderBy('id','DESC')->get();        
        return view('admin.order.pending',compact('order'));
    }
//delivered order view
    public function deliveredOrderView(){
        $order = DB::table('orders')->where('status',3)->orderBy('id','DESC')->get();        
        return view('admin.order.pending',compact('order'));
    }

    public function allOrderItemShow(){
        $order = DB::table('orders')->orderBy('id','DESC')->get();
        return view('admin.order.pending',compact('order'));
    }


    
}
