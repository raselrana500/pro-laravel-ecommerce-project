<?php

namespace App\Http\Controllers\Admin\Category;

use App\Model\Admin\Brand;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $brands = Brand::orderBy('id','desc')->get();
        return view('admin.brand.brand',compact('brands'));
    }



    //INSERT DATA
    public function storeBrand(Request $request){
        $validateData = $request->validate([
            'name' => 'required|unique:brands|max:55'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $image = $request->file('logo');
        if($image){
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'public/media/brand/';
            $image_url= $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['logo'] = $image_url;
            $brand = DB::table('brands')->insert($data);
            $notification=array(
                'messege'=>'Brand Inserted Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }else{
            $brand = DB::table('brands')->insert($data);
            $notification=array(
                'messege'=>'Its Done!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }

        
    }


    //DELETE DATA
    public function deleteBrand($id){
        $data = DB::table('brands')->where('id',$id)->first();
        $image = $data->logo;
        unlink($image);
        $brand = DB::table('brands')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Brand Deleted Successfully !',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }



    //UPDATE DATA
    public function updateBrand(Request $request,$id){
        $oldLogo = $request->oldImage;
        $validateData = $request->validate([
            'name' => 'required|max:55'
        ]);

        $data = array();
        $data['name'] = $request->name;
        $image = $request->file('logo');
        if($image){
            unlink($oldLogo);
            $image_name= date('dmy_H_s_i');
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path = 'public/media/brand/';
            $image_url= $upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);

            $data['logo'] = $image_url;
            $brand = DB::table('brands')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Brand Updated Successfully!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }else{
            $brand = DB::table('brands')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Update without image!',
                'alert-type'=>'success'
                 );
               return Redirect()->back()->with($notification);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
