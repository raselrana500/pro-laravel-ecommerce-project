<?php

namespace App\Http\Controllers\Admin\Newslatter;

use App\Model\Admin\Newslatter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;



class NewslatterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $subscriber = Newslatter::orderBy('id','desc')->get();
        return view('admin.newslatter.newslatter',compact('subscriber'));
    }
    public function deleteNewslater($id)
    {
        DB::table('newslatters')->where('id',$id)->delete();
        $notification=array(
            'messege'=>'Subscriber Deleted Successfully!',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
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
     * @param  \App\Model\Admin\Newslatter  $newslatter
     * @return \Illuminate\Http\Response
     */
    public function show(Newslatter $newslatter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Admin\Newslatter  $newslatter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newslatter $newslatter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Admin\Newslatter  $newslatter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newslatter $newslatter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Admin\Newslatter  $newslatter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newslatter $newslatter)
    {
        //
    }
}
