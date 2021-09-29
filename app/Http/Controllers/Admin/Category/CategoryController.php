<?php

namespace App\Http\Controllers\Admin\Category;

use App\Model\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $category = Category::orderBy('id','desc')->get();
        return view('admin.category.category',compact('category'));
    }


    public function storeCategory(Request $request){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:55'
        ]);

        $data = array();
        $data['category_name'] = $request->category_name;
        DB::table('categories')->insert($data);
        $notification=array(
            'messege'=>'Category Added Successfully!',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }

    public function updateCategory(Request $request,$id){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:55'
        ]);
        
        $data =Category::find($id);
        $data->category_name = $request->category_name;
        $data->save();
        if ($data->save()) {
            $notification=array(
                'messege'=>'Category Updated Successfully!',
                'alert-type'=>'success'
                );
            return Redirect()->back()->with($notification);
            }
    }

    public function deleteCat($id){
        DB::table('categories')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Category Deleted !!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
    }
    // public function editCat($id){
    //     $data = Category::find($id);
    //     return view('admin.category.category',compact('data'));
    // }
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
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
