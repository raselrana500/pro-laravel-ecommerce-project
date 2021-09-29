<?php

namespace App\Http\Controllers\Admin\Product;

use App\Model\Admin\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','brands.name')
                    ->orderBy('id','desc')
                    ->get();
        return view('admin.product.index',compact('product'));
    }
    public function inactiveProduct($id)
    {
        DB::table('products')->where('id',$id)->update(['status'=>0]);
        $notification=array(
            'messege'=>'Product Successfully InActive!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);

    }

    public function activeProduct($id)
    {
        DB::table('products')->where('id',$id)->update(['status'=>1]);
        $notification=array(
            'messege'=>'Product Successfully Active!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);

    }

    public function editProduct($id){
        $product = DB::table('products')->where('id',$id)->first();
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= DB::table('categories')->get();
        $brands = DB::table('brands')->get();
        return view('admin.product.create',compact('category','brands'));
    }

    public function getSubCategory($catId){
        $catID= DB::table('sub_categories')->where('catId',$catId)->get();
        return json_encode($catID);
    }
    public function store(Request $request)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->catId;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['selling_price'] = $request->selling_price;
        $data['discount_price'] = $request->discount_price;
        $data['product_details'] = $request->product_details;
        $data['video_link'] = $request->video_link;
        $data['main_slider'] = $request->main_slider;
        $data['hot_deal'] = $request->hot_deal;
        $data['best_rated'] = $request->best_rated;
        $data['trend'] = $request->trend;
        $data['mid_slider'] = $request->mid_slider;
        $data['hot_new'] = $request->hot_new;
        $data['buyone_getone'] = $request->buyone_getone;
        $data['status'] = 1;
        $image_one= $request->image_one;
        $image_two = $request->image_two;
        $image_three = $request->image_three;

        if($image_one && $image_two &&  $image_three){
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->save('public/media/product/'.$image_one_name);
            $data['image_one'] = 'public/media/product/'.$image_one_name;
            
            //image two upload
            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->save('public/media/product/'.$image_two_name);
            $data['image_two'] = 'public/media/product/'.$image_two_name;
            
            //image three upload
            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->save('public/media/product/'.$image_three_name);
            $data['image_three'] = 'public/media/product/'.$image_three_name;

            $product =DB::table('products')->insert($data);
            $notification=array(
                'messege'=>'Product Inserted Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.products')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function viewProduct($id)
    {
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('sub_categories','products.subcategory_id','sub_categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','brands.name','sub_categories.subcategory_name')
                    ->where('products.id',$id)
                    ->first();
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateProductWithoutImage(Request $request,$id)
    {
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_code'] = $request->product_code;
        $data['product_quantity'] = $request->product_quantity;
        $data['category_id'] = $request->catId;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_size'] = $request->product_size;
        $data['product_color'] = $request->product_color;
        $data['selling_price'] = $request->selling_price;
        $data['discount_price'] = $request->discount_price;
        $data['product_details'] = $request->product_details;
        $data['video_link'] = $request->video_link;
        $data['main_slider'] = $request->main_slider;
        $data['hot_deal'] = $request->hot_deal;
        $data['best_rated'] = $request->best_rated;
        $data['trend'] = $request->trend;
        $data['mid_slider'] = $request->mid_slider;
        $data['hot_new'] = $request->hot_new;
        $data['buyone_getone'] = $request->buyone_getone;

        $update = DB::table('products')->where('id',$id)->update($data);
        if($update){
            $notification=array(
                'messege'=>'Product Updated Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.products')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Nothing Updated!',
                'alert-type'=>'error'
                 );
               return Redirect()->route('all.products')->with($notification);
        }
    }

    public function updateProductImage(Request $request,$id){
        $oldOne = $request->old_one;
        $oldTwo = $request->old_two;
        $oldThree = $request->old_three;

        $data = array();

        $image_one = $request->file('image_one');
        $image_two = $request->file('image_two');
        $image_three = $request->file('image_three');

        if($image_one){
            unlink($oldOne);
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image_one->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'public/media/product/';
            $image_url= $upload_path.$image_full_name;
            $success=$image_one->move($upload_path,$image_full_name);

            $data['image_one'] = $image_url;
            $productImageOne = DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Image One Updated Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.products')->with($notification);
        }
        if($image_two){
            unlink($oldTwo);
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image_two->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'public/media/product/';
            $image_url= $upload_path.$image_full_name;
            $success=$image_two->move($upload_path,$image_full_name);

            $data['image_two'] = $image_url;
            $productImageOne = DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Image Two Updated Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.products')->with($notification);
        }
        if($image_three){
            unlink($oldThree);
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image_three->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'public/media/product/';
            $image_url= $upload_path.$image_full_name;
            $success=$image_three->move($upload_path,$image_full_name);

            $data['image_three'] = $image_url;
            $productImageOne = DB::table('products')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Image Three Updated Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->route('all.products')->with($notification);
        }
    }

    public function updateProductImageshow($id){
        $product= DB::table('products')->where('id',$id)->first();
        return view('admin.product.updateimage',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function deleteProduct($id)
    {
        $product=DB::table('products')->where('id',$id)->first();

        $image1 = $product->image_one;
        $image2 = $product->image_two;
        $image3 = $product->image_three;
        unlink($image1);
        unlink($image2);
        unlink($image3);
        DB::table('products')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Product Deleted Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->route('all.products')->with($notification);
    }
}
