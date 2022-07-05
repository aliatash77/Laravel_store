<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {


        $categories =Category::all();
        $products=Product::all();
        $brands = Brand::all();
        $sliders = DB::table('products')->inRandomOrder()->limit(5)->get();
        $sps =DB::table('products')->where('special','1')->get();
        $sponsor = DB::table('products')->where('sponser','1')->inRandomOrder()->limit(1)->first();
        return view('client.index',compact('products','categories','brands','sps','sliders','sponsor'));

    }


    public function search(){

        $string = request('string');

        $products =DB::table('products')->where('name', 'LIKE', '%'.$string.'%')
            ->orWhere('price', 'LIKE', '%'.$string.'%')
            ->get();
        return view('client.shopList',compact('products'));

    }




}
