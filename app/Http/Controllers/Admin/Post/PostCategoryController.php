<?php

namespace App\Http\Controllers\Admin\Post;

use App\Model\Admin\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PostCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function blogCategory()
    {
        $catList = DB::table('post_categories')->get();
        return view('admin.blog_category.category',compact('catList'));
    }


    // Insert Category
    public function storeBlogCategory(Request $request)
    {
        $validateData = $request->validate([
            'post_categoryName_en' => 'required|max:255',
            'post_categoryName_bn' => 'required|max:255',
        ]);
        $data=array();
        $data['post_categoryName_en'] = $request->post_categoryName_en;
        $data['post_categoryName_bn'] = $request->post_categoryName_bn;
        DB::table('post_categories')->insert($data);
        $notification=array(
            'messege'=>'Blog Category Inserted Successfully!',
            'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
    }


    // Update Category
    public function updateBlogCategory(Request $request,$id)
    {
        $validateData = $request->validate([
            'post_categoryName_en' => 'required|max:255',
            'post_categoryName_bn' => 'required|max:255',
        ]);
        $data=array();
        $data['post_categoryName_en'] = $request->post_categoryName_en;
        $data['post_categoryName_bn'] = $request->post_categoryName_bn;
        DB::table('post_categories')->where('id',$id)->update($data);
        $notification=array(
            'messege'=>'Blog Category Updated Successfully!',
            'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
    }

    // Delete Category
    public function deleteBlogCat($id){
        DB::table('post_categories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Blog Category Deleted Successfully!',
            'alert-type'=>'error'
             );
        return Redirect()->back()->with($notification);
    }
}
