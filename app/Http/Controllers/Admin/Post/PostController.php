<?php

namespace App\Http\Controllers\Admin\Post;

use App\Model\Admin\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function allBlogPost()
    {
        $allpost = DB::table('posts')
                    ->join('post_categories','posts.category_id','post_categories.id')
                    ->select('posts.*','post_categories.post_categoryName_en','post_categories.post_categoryName_bn')
                    ->get();
        return view('admin.blog_post.allpost',compact('allpost'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlogPost()
    {
        $postcat = DB::table('post_categories')->get();
        Return view('admin.blog_post.create',compact('postcat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBlogPost(Request $request)
    {
        $data=array();
        $data['post_title_en'] = $request->post_title_en;
        $data['post_title_bn'] = $request->post_title_bn;
        $data['category_id'] = $request->category_id;
        $data['post_details_en'] = $request->post_details_en;
        $data['post_details_bn'] = $request->post_details_bn;

        $image_one = $request->file('post_image');

        if($image_one){
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->save('public/media/post/'.$image_one_name);
            $data['post_image'] = 'public/media/post/'.$image_one_name;

        DB::table('posts')->insert($data);

        $notification=array(
            'messege'=>'Post Inserted Successfully!',
            'alert-type'=>'success'
                );
            return Redirect()->route('blog.all.post')->with($notification);
        }else{
            $data['post_image']='';
            $notification=array(
                'messege'=>'Post Inserted Without Image !',
                'alert-type'=>'success'
                    );
                return Redirect()->route('blog.all.post')->with($notification);
        }
    }

    // update post
    public function updateBlogPost(Request $request,$id)
    {
        $oldImage = $request->old_image;

        $data=array();
        $data['post_title_en'] = $request->post_title_en;
        $data['post_title_bn'] = $request->post_title_bn;
        $data['category_id'] = $request->category_id;
        $data['post_details_en'] = $request->post_details_en;
        $data['post_details_bn'] = $request->post_details_bn;

        $image_one = $request->file('post_image');

        if($image_one){
            unlink($oldImage);
            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->save('public/media/post/'.$image_one_name);
            $data['post_image'] = 'public/media/post/'.$image_one_name;

        DB::table('posts')->where('id',$id)->update($data);

        $notification=array(
            'messege'=>'Post Updated Successfully!',
            'alert-type'=>'success'
                );
            return Redirect()->route('blog.all.post')->with($notification);
        }else{
            $data['post_image']=$oldImage;
            DB::table('posts')->where('id',$id)->update($data);
            $notification=array(
                'messege'=>'Post Updated Without Image !!',
                'alert-type'=>'success'
                    );
                return Redirect()->route('blog.all.post')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function deleteBlogPost($id){
       $post = DB::table('posts')->where('id',$id)->first();
       $image = $post->post_image; 
       if($image != null){        
        unlink($image);
       }    
       DB::table('posts')->where('id',$id)->delete();
       $notification=array(
        'messege'=>'Post Deleted Successfully !',
        'alert-type'=>'error'
            );
        return Redirect()->route('blog.all.post')->with($notification);
    }
    public function editBlogPost($id){
       $post = DB::table('posts')->where('id',$id)->first();
        return view('admin.blog_post.edit',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
