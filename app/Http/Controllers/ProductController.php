<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;

class ProductController extends Controller
{
    public function show($id){
//        $category = DB::table('categories')->where(['id'=>
//        function($id){
//            DB::table('products')
//                ->select('category_id')
//                ->where(['id'=>$id]);
//
//        }])
//            ->first();
        $product = Product::where('id',$id)->first();
        $category = Category::where('id',$product->category_id)->first();
        $brand = Brand::where('id',$product->brand_id)->first();

        return view('client.product',compact('product','category','brand'));
    }
    
    public function create(){
        $categories =Category::all();
        $brands = Brand::all();
        $product= Product::all();
        return view('admin.products.product',compact('product','categories','brands'));
    }

    public function store(Request $request){
        Product::create($request->all());
        return redirect()->back();
    }

    public function index(){
        $categories =Category::all();
        $products=Product::all();
        return view('admin.products.ProductList',compact('products','categories'));
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function edit($id){
        $product = Product::find($id);
        $brands = Brand::all();
        $categories=Category::all();
        return view('admin.products.EditProduct',compact('product','categories','brands'));
    }

    public function update($id , Request $request){
        Product::find($id)->update($request->all());
        return redirect('dashboard/product/index');
    }

    public function special($id){
        Product::find($id)->update(['special'=>1]);
        return redirect('list');
    }

    public function UnSpecial(Request $request, $id){
        Product::find($id)->update(['special'=>0]);

        return redirect('list');
    }

    public function sponser($id){
        Product::find($id)->update(['sponser'=>1]);
        return redirect('list');
    }

    public function UnSponser(Request $request, $id){
        Product::find($id)->update(['sponser'=>0]);

        return redirect('list');
    }

    public function PListAsC($id){

        $products = Product::where('category_id',$id)->get();
//        $category = Category::where('id',$product->category_id)->first();

        return view('client.shopList',compact('products'));

    }

}
