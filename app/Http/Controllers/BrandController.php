<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function show(){

        return view('client.Brand');
    }

    public function create(){
        $brands= Brand::all();
        return view('admin.brands.brand',compact('brands'));
    }

    public function store(Request $request){
        Brand::create($request->all());
        return redirect()->back();
    }

    public function index(){
        $brands=Brand::all();
        return view('admin.brands.BrandList',compact('brands'));
    }

    public function delete($id){
        $Brand = Brand::find($id);
        $Brand->delete();
        return redirect()->back();
    }

    public function edit($id){
        $brand = Brand::find($id);
        return view('admin.brands.EditBrand',compact('brand'));
    }

    public function update($id , Request $request){
        Brand::find($id)->update($request->all());
        return redirect('dashboard/brand/index');
    }
    
}
