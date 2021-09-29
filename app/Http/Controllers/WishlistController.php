<?php

namespace App\Http\Controllers;

use App\Model\frontend\Wishlist;
use Illuminate\Http\Request;
use Auth;
use DB;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addWishlist($id)
    {
        $userId = Auth::id();
        $check = DB::table('wishlists')->where('user_id',$userId)->where('product_id',$id)->first();
        $data = array(
            'user_id' => $userId,
            'product_id' => $id,
        );
        if(Auth::check()){
            if($check){
                return \Response::json(['error' => 'Product already has on your wishlist!!']);
            }else{
                DB::table('wishlists')->insert($data);
                return \Response::json(['success' => 'Product added on wishlist!!']);
            }
        }else{
           return \Response::json(['error' => 'At first login your account!!']);
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
     * @param  \App\Model\frontend\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(Wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\frontend\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\frontend\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\frontend\Wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wishlist $wishlist)
    {
        //
    }
}
