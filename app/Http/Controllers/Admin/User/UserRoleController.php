<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
class UserRoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function allUserRole()
    {
        $userRole = DB::table('admins')->where('type',2)->get();
        return view('admin.role.all_role',compact('userRole'));
    }

    public function createAdmin()
    {
        return view('admin.role.create_admin');
    }
    public function storeAdminInfo(Request $request)
    {   
        $validateData = $request->validate([
        'email' => 'required|unique:admins|max:55'
    ]);
        $data = array();
        $data['name'] =$request->name;
        $data['phone'] =$request->phone;
        $data['email'] =$request->email;
        $data['password'] =Hash::make($request->password);
        $data['category'] =$request->category;
        $data['coupon'] =$request->coupon;
        $data['product'] =$request->product;
        $data['blog'] =$request->blog;
        $data['order'] =$request->order;
        $data['other'] =$request->other;
        $data['report'] =$request->report;
        $data['role'] =$request->role;
        $data['return'] =$request->return;
        $data['contact'] =$request->contact;
        $data['comment'] =$request->comment;
        $data['setting'] =$request->setting;
        $data['stock'] =$request->stock;
        $data['type'] = 2 ;

        DB::table('admins')->insert($data);
        $notification=array(
            'messege'=>'Child Admin Created Successfully !!',
            'alert-type'=>'success'
             );
           return Redirect()->route('admin.all.user')->with($notification);
    }
    public function updateAdminInfo(Request $request)
    {   $id = $request->id;
        $data = array();
        $data['name'] =$request->name;
        $data['phone'] =$request->phone;
        $data['email'] =$request->email;
        $data['category'] =$request->category;
        $data['coupon'] =$request->coupon;
        $data['product'] =$request->product;
        $data['blog'] =$request->blog;
        $data['order'] =$request->order;
        $data['other'] =$request->other;
        $data['report'] =$request->report;
        $data['role'] =$request->role;
        $data['return'] =$request->return;
        $data['contact'] =$request->contact;
        $data['comment'] =$request->comment;
        $data['setting'] =$request->setting;
        $data['stock'] =$request->stock;

        DB::table('admins')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Child Admin Updated Successfully !!',
            'alert-type'=>'success'
             );
           return Redirect()->route('admin.all.user')->with($notification);
    }

//delete data
    public function delteAdmin($id){
        $data = DB::table('admins')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Child Admin Deleted Successfully !!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }

//edit data
    public function editAdmin($id){
        $data = DB::table('admins')->where('id',$id)->first();
        return view('admin.role.edit_role',compact('data'));
    }

    public function stock()
    {
        $product = DB::table('products')
                    ->join('categories','products.category_id','categories.id')
                    ->join('brands','products.brand_id','brands.id')
                    ->select('products.*','categories.category_name','brands.name')
                    ->orderBy('id','desc')
                    ->get();
        return view('admin.stock.stock',compact('product'));
    }

    
}
