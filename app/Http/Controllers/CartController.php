<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Cart_Product;

use App\Product;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{

    public function delete($id){

        if(Auth::check()){
            $cart=Cart::with(["getCartProduct"=>function($query){
                $query->with("getProduct");
            }])->where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::with("getCartProduct")->where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }

        if(!$cart){
            return redirect()->back();
        }

        $cartProduct = Cart_Product::where("id",$id)->where("cart_id",$cart->id)->first();

        if(!$cartProduct){
            return redirect()->back();
        }

        $product=Product::find($cartProduct->product_id);

        $cart->update(["count"=>$cart->count-$cartProduct->count,"totalPrice"=>$cart->totalPrice-($product->price*$cartProduct->count)]);

        $cartProduct->delete();

        return redirect()->back();

    }


    public function counter(Request $request){

        if(Auth::check()){
            $cart=Cart::with(["getCartProduct"=>function($query){
                $query->with("getProduct");
            }])->where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::with("getCartProduct")->where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }


        $offerPrice = 0;
        foreach($cart->getCartProduct as $cart_product){
            $offerPrice += ($cart_product->getProduct->price/100*$cart_product->getProduct->offer)*$cart_product->count;
        }

        if(!$cart){
            return response(["status"=>"error","msg"=>"اطلاعات ارسالی نافص است"]);
        }

        if(!$request->has("dir","id")){
            return response(["status"=>"error","msg"=>"اطلاعات ارسالی نافص است"]);
        }

        $cartProduct = Cart_Product::where("id",$request->id)->where("cart_id",$cart->id)->first();

        if(!$cartProduct){
            return response(["status"=>"error","msg"=>"محصول در سبد خرید یافت نشد"]);
        }


        $product=Product::find($cartProduct->product_id);

        if(!$product){
            return response(["status"=>"error","msg"=>"محصول در سیستم ثبت نشده است"]);
        }

        if($request->dir == "+"){

            if($product->instock < ($cartProduct->count+1)){
                return response(["status"=>"error","msg"=>"محصول ".$product->name." به تعداد ".($cartProduct->count+1)." در انبار وجود ندارد"]);
            }

            $cart->update(["count"=>$cart->count+1,"totalPrice"=>$cart->totalPrice+$product->price]);

            $cartProduct->update(["count"=>$cartProduct->count+1]);

        }else{

            $cart->update(["count"=>$cart->count-1,"totalPrice"=>$cart->totalPrice-$product->price]);

            if($cartProduct->count-1 == 0){
                $cartProduct->delete();
                return response(["status"=>"success","newCount"=>0,"price"=>$product->price,'offer'=>$product->offer]);

            }else {
                $cartProduct->update(["count"=>$cartProduct->count-1]);
            }



        }


        return response(["checkout"=>$cart->totalPrice-$offerPrice,"status"=>"success","newCount"=>$cartProduct->count,"price"=>$product->price,'offer'=>$product->offer]);



    }

    public function show(){

        if(Auth::check()){
            $cart=Cart::with(["getCartProduct"=>function($query){
                $query->with("getProduct");
            }])->where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::with("getCartProduct")->where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }

        return view("client.cart",compact('cart'));
    }


    public function store(Request $request,CookieJar $cookieJar){

        if(!$request->has("product_id") || !is_numeric($request->product_id) || $request->product_id <= 0){
            abort(404);
        }

        $product = Product::findorfail($request->product_id);

        /*if(!$product){
            abort(404);
        }*/
        /* چک کردن موجودی محصول */


        if(Auth::check()){
            $cart=Cart::where("user_id",Auth::user()->id)->first();
        }else{
            $cart=Cart::where("code",( Cookie::has("bid") ? Cookie::get("bid") : null ))->first();
        }


        if($cart){

            $cart->update(["count"=>$cart->count+1,'totalPrice'=>$cart->totalPrice+$product->price]);

            $cart_product = Cart_Product::where("cart_id",$cart->id)->where("product_id",$product->id)->first();

            if($cart_product){
                $cart_product->update(["count"=>$cart_product->count+1]);
            }else{
                $cart_product=Cart_Product::create(["product_id"=>$product->id,"cart_id"=>$cart->id,"count"=>1]);
            }

        }else{

            $code=md5(time().rand(29999,5678878).microtime());

            $cookieJar->queue("bid",$code,525600);

            if(Auth::check()){
                $cart=Cart::create(["count"=>1,"user_id"=>Auth::user()->id,"code"=>$code,"totalPrice"=>$product->price]);
            }else{
                $cart=Cart::create(["count"=>1,"code"=>$code,"totalPrice"=>$product->price]);
            }

            $cart_product=Cart_Product::create(["product_id"=>$product->id,"cart_id"=>$cart->id,"count"=>1]);
        }


        return redirect("/cart");
    }



    public function cartList(){

        $carts = Cart::all();


        return view('admin.carts',compact(''));

    }

}
