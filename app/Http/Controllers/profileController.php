<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function show($id){
        $user = User::find($id)->first();

        return view('client.profile',compact('user'));
    }

    public function editProfile($id ,Request $request){

        $EditUser = User::find($id)->update($request->all());
        return redirect()->back();

    }
}
