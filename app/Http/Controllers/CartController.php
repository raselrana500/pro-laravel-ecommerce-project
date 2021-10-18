<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Response;
use Auth;
use Stripe;
use PhpParser\Builder\Function_;
use Session;
class CartController extends Controller
{
    public function addToCart($id){
        $product = DB::table('products')->where('id',$id)->first();
        $data= array();

        if ($product->discount_price == NULL ) {
            $data['id'] =$product->id;
            $data['name'] =$product->product_name;
            $data['qty'] =1;
            $data['price'] =$product->selling_price;
            $data['weight'] =1;
            $data['options']['image'] =$product->image_one;
            $data['options']['color'] ='';
            $data['options']['size'] ='';
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your Cart !!']);
        }else{
            $data['id'] =$product->id;
            $data['name'] =$product->product_name;
            $data['qty'] =1;
            $data['price'] =$product->discount_price;
            $data['weight'] =1;
            $data['options']['image'] =$product->image_one;
            $data['options']['color'] ='';
            $data['options']['size'] ='';
            Cart::add($data);
            return \Response::json(['success' => 'Product added on your Cart !!']);
        }
    }

    public function check(){
        $content= Cart::content();
        return response()->json($content);
    }


    public function showCartPage(){
        $cart = Cart::content();
        return view('frontend.pages.cart',compact('cart'));
    }

    public function deleteCartItem($id){
         Cart::remove($id);
         $notification=array(
            'messege'=>'Product remove from cart !!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function updateCartQty(Request $request){
         $rowId = $request->productid;
         $qty = $request->qty;
         Cart::update($rowId,$qty);
         $notification=array(
            'messege'=>'Product Quantity Updated !!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function viewProduct($id){
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('sub_categories','products.subcategory_id','sub_categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','sub_categories.subcategory_name','brands.name')
                    ->where('products.id',$id)
                    ->first();
        $color = $product->product_color;
        $product_color = explode(',',$color);
        $size = $product->product_size;
        $product_size = explode(',',$size);

        return response::json(array(
            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,
        ));
    }

    public function insertIntoCart(Request $request){
        $id = $request->product_id;
        $product = DB::table('products')->where('id',$id)->first();
        $color = $request->color;
        $size = $request->size;
        $qty = $request->qty;
        $data= array();
            if ($product->discount_price == NULL ) {
                $data['id'] =$product->id;
                $data['name'] =$product->product_name;
                $data['qty'] =$request->qty;
                $data['price'] =$product->selling_price;
                $data['weight'] =1;
                $data['options']['image'] =$product->image_one;
                $data['options']['color'] =$request->color;
                $data['options']['size'] =$request->size;
                Cart::add($data);
                $notification=array(
                    'messege'=>'Product added to cart !!',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }else{
                $data['id'] =$product->id;
                $data['name'] =$product->product_name;
                $data['qty'] =$request->qty;
                $data['price'] =$product->discount_price;
                $data['weight'] =1;
                $data['options']['image'] =$product->image_one;
                $data['options']['color'] =$request->color;
                $data['options']['size'] =$request->size;
                Cart::add($data);
                $notification=array(
                    'messege'=>'Product added to cart !!',
                    'alert-type'=>'success'
                     );
                   return Redirect()->back()->with($notification);
            }
        }
        
    public function checkout(){
        if(Auth::check()){
            $cart = Cart::content();
            return view('frontend.pages.checkout',compact('cart'));
        }else{
            $notification=array(
                'messege'=>'At first login to your account!!',
                'alert-type'=>'error'
                 );
               return Redirect()->route('login')->with($notification);
        }
    }

    public function applyCoupon(Request $request){
        $coupon = $request->coupon;
        $check = DB::table('coupons')->where('coupon',$coupon)->first();
        if ( $check) {
            Session::put('coupon',[
                'name' => $check->coupon,
                'discount' => $check->discount,
                'balance' => Cart::subtotal() - $check->discount
            ]);
            $notification=array(
                'messege'=>'Successfully coupon applied !!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Invalid Coupon !!',
                'alert-type'=>'error'
                 );
               return Redirect()->back()->with($notification);
        }
    }

    public function removeCoupon(){
        Session::forget('coupon');
        $notification=array(
            'messege'=>'Coupon remove successfull !!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    
}