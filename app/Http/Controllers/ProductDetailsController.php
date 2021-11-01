<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class ProductDetailsController extends Controller
{
    public function singleProductView($id,$product_name){
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
        return view('frontend.pages.product_details',compact('product','product_color','product_size'));
    }

    public function addToCart(Request $request,$id){
        $product = DB::table('products')->where('id',$id)->first();
        $data= array();

        if ($product->discount_price == NULL ) {
            $data['id'] =$product->id;
            $data['name'] =$product->product_name;
            $data['qty'] =$request->qty;
            $data['price'] =$product->selling_price;
            $data['weight'] =1;
            $data['options']['image'] =$product->image_one;
            $data['options']['color'] =$request->color;
            $data['options']['size']  =$request->size;
            Cart::add($data);
            $notification=array(
                'messege'=>'Product added Successfully!!',
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
            $data['options']['size']  =$request->size;
            Cart::add($data);
            $notification=array(
                'messege'=>'Product added Successfully!!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
    }

    public function productsView($id){
        $products = DB::table('products')->where('subcategory_id',$id)->paginate(10);
        $singleProduct = DB::table('products')->where('subcategory_id',$id)->first();
        $category = DB::table('categories')->get();      
        $brands = DB::table('products')->where('subcategory_id',$id)
                        ->select('brand_id')->groupBy('brand_id')->get();

        return view('frontend.pages.allsubcat_products',compact('products','category','brands','singleProduct'));
    }

    public function categoryProductView($id){
        $categoryProduct = DB::table('products')->where('category_id',$id)->paginate(10);
        $Product = DB::table('products')->where('category_id',$id)->first();
        $category = DB::table('categories')->get();
        $catName = DB::table('categories')->where('id',$id)->first();       

        return view('frontend.pages.allcat_products',compact('categoryProduct','category','Product','catName'));
    }

    public function brandProductView($id){
        $categoryProduct = DB::table('products')->where('brand_id',$id)->paginate(20);
        $product = DB::table('products')->where('category_id',$id)->first();
        $category = DB::table('categories')->get();
        $brandName = DB::table('brands')->where('id',$id)->first();        

        return view('frontend.pages.allbrand_products',compact('categoryProduct','category','product','brandName'));
    }


    
}
