<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;
use Auth;
use Stripe;
use Session;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function paymentPage(){
        $cart = Cart::content();
        return view('frontend.pages.payment',compact('cart'));
    }

    public function paymentProcess(Request $request){
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['address'] = $request->address;
        $data['city'] = $request->city;
        $data['payment'] = $request->payment;
        
        if ($request->payment == 'stripe') {
            return view('frontend.pages.payment.stripe',compact('data'));
        }elseif($request->payment == 'paypal'){
            
        }elseif($request->payment == 'ideal'){

        }else{
            echo "cash on delivery";
        }
    }

    public function stripeCharge(Request $request){
        $total = $request->total;
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey('sk_test_51JiAfjIXmdYFNxCRnBdyup6TG3JeFsGsYw9V5hOLkC8JhcK0AToWXQcYblHFFKUvrSA50F1crM72eQAlB63kcmEe000BHzuqyJ');

        // Token is created using Checkout or Elements!
        // Get the payment token ID submitted by the form:
        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
        'amount' => $total*100,
        'currency' => 'usd',
        'description' => 'Pro laravel Ecommerce',
        'source' => $token,
        'statement_descriptor' => 'Stripe Payment',
        'metadata' => ['order_id' => uniqid()],
        ]);
        
        $data = array();
        $data['user_id'] = Auth::id();
        $data['payment_id'] = $charge->payment_method;
        $data['paying_amount'] = $charge->amount;
        $data['balance_transection'] = $charge->balance_transaction;
        $data['stripe_order_id'] = $charge->metadata->order_id;
        $data['shipping'] = $request->shipping;
        $data['vat'] = $request->vat;
        $data['total'] = $request->total;
        $data['payment_type'] = $request->payment_type;
        // $data['status_code'] = rand();
        $data['status_code'] = mt_rand(100000,999999);

        if (Session::has('coupon')) {
            $data['subtotal'] =Session::get('coupon')['balance'];
        }else{
            $data['subtotal'] = Cart::subtotal();
        }

        $data['status'] = 0;
        $data['date'] = date('d-m-y');
        $data['month'] = date('F');
        $data['year'] = date('Y');

        $order_id = DB::table('orders')->insertGetId($data);

        $shipping = array();
        $shipping['order_id'] =  $order_id;
        $shipping['ship_name'] =  $request->ship_name;
        $shipping['ship_phone'] =  $request->ship_phone;
        $shipping['ship_email'] =  $request->ship_email;
        $shipping['ship_address'] =  $request->ship_address;
        $shipping['ship_city'] =  $request->ship_city;
        DB::table('shippings')->insert($shipping);

        $content = Cart::content();
        $details = array();
        foreach ($content as $row) {
            $details['order_id'] = $order_id;
            $details['product_id'] = $row->id;
            $details['product_name'] = $row->name;
            $details['color'] = $row->options->color;
            $details['size'] = $row->options->size;
            $details['quantity'] = $row->qty;
            $details['single_price'] = $row->price;
            $details['total_price'] = $row->qty*$row->price;
            DB::table('order_details')->insert($details);
        }

        Cart::destroy();
        if(Session::has('coupon')){
            Session::forget('coupon');
        }
        $notification=array(
            'messege'=>'Your order placed successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->to('/')->with($notification);


    }
}
