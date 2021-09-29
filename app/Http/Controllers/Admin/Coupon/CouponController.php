<?php

namespace App\Http\Controllers\Admin\Coupon;

use App\Model\Admin\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function coupon()
    {
        $coupons = Coupon::orderBy('id','desc')->get();
        return view('admin.coupon.coupon',compact('coupons'));
    }


    public function storeCoupon(Request $request)
    {
        $validateData = $request->validate([
            'coupon' => 'required|unique:coupons|max:100',
            'discount' => 'required',
        ]);

        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->insert($data);

        $notification=array(
            'messege'=>'Coupon Inserted Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function deleteCoupon($id)
    {
        DB::table('coupons')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Coupon Deleted Successfully!!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function updateCoupon(Request $request,$id)
    {
        $validateData = $request->validate([
            'coupon' => 'required|max:100',
            'discount' => 'required',
        ]);

        $data = array();
        $data['coupon'] = $request->coupon;
        $data['discount'] = $request->discount;
        DB::table('coupons')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Coupon Updated Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
    }
}
