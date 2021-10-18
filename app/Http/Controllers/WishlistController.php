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
    public function showWishlistItem()
    {
        $userid=Auth::id();
        $product = DB::table('wishlists')
                    ->join('products','wishlists.product_id','products.id')
                    ->select('products.*','wishlists.user_id')
                    ->where('wishlists.user_id',$userid)
                    ->get();
        // return response()->json($product);
        return view('frontend.pages.wishlist',compact('product'));
    }

    
}
