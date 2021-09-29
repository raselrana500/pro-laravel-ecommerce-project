<?php

namespace App\Http\Controllers\Admin\Category;

use App\Model\Admin\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Model\Admin\Category;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $category = DB::table('categories')->get();
        $subcat = DB::table('sub_categories')
                    ->join('categories','sub_categories.catId','categories.id')
                    ->select('sub_categories.*','categories.category_name')
                    ->get();
        return view('admin.subcategory.subcategory',compact('category','subcat'));
    }

    public function storeSubCategory(Request $request){
        $validateData = $request->validate([
            'catId' => 'required',
            'subcategory_name' => 'required|unique:sub_categories|max:55',
        ]);

        $data = array();
        $data['catId'] = $request->catId;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('sub_categories')->insert($data);

        $notification=array(
            'messege'=>'Sub_Category Added Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteSubCat($id)    {
        DB::table('sub_categories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Sub Category Deleted Successfully!!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateSubCategory(Request $request,$id)
    {

        $data = array();
        $data['catId'] = $request->catId;
        $data['subcategory_name'] = $request->subcategory_name;
        DB::table('sub_categories')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Sub_Category Updated Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
