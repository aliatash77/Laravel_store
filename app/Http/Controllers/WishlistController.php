<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function store( Request $request ){

        if(!Auth::check()){
            return response(['status'=>'error','msg'=>'برای افزودن محصول به لیست ارزو ها باید وارد یا عضو شوید']);
        }

        elseif(!$request->has("id")){
            return response(['status'=>'error','msg'=>'اطلاعات ارسالی نادرست است']);
        }

       else {
           Wishlist::create(['product_id' => $request->id, 'user_id' => Auth::user()->id]);
       }
        return response(['status'=>'success','msg'=>'محصول به لیست ارزو ها اضافه شد']);


    }


    public function index(){
        if(!Auth::check()){
            return redirect(route('login'));
        }
        $wishlists = Wishlist::with("product")->where("user_id",Auth::user()->id)->get();
        return view('wishlist',compact('wishlists'));
    }


    public function delete($id){

        Wishlist::where('user_id',Auth::user()->id)->where('id',$id)->delete();
        return redirect("/wishlist");

    }
}
