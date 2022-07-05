<?php

namespace App\Http\Controllers;

use App\Product;
use App\User;

use http\Client\Response;
use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;



class DatatablesController extends Controller
{

    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(Product::select([
                'id','name' , 'price', 'offer','image','instock','updated_at','created_at','special','sponser'
            ]))
                ->addIndexColumn()
                ->addColumn('action', function($data){

                    $editUrl = route('EditProduct',$data->id);
                    $deleteUrl = url('delete-todo/'.$data->id);
                    $btn = '<a href="'.$editUrl.'" data-toggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm">Edit</a>';
                    $btn = $btn.' <a href="'.$deleteUrl.'" data-toggle="tooltip"  data-id="'.$data->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteUser">Delete</a>';

                    return $btn;
                })


                ->addColumn('image', function($data){


                    $image ='<img style="width: 100px;height: 100px " src="'.$data->image.'" alt="'.$data->name.'">' ;

                    return $image;


                })


                    ->addColumn('specialize', function($data){


                        $Unspecial =route('UnSpecialProduct',$data->id);

                        if($data->special==0){
                            $special = '<a href="'.route('SpecialProduct',$data->id).'" class="edit btn btn-primary btn-sm" >add special</a>';
                            return $special;
                        }else{
                            $Unspecial = '<a href="' . $Unspecial . '" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="remove" class="btn btn-danger btn-sm deleteUser">remove special</a>';
                            return $Unspecial;
                        }

                    })

                ->addColumn('sponser', function($data){


                    $Unsponser =route('UnSponserProduct',$data->id);

                    if($data->sponser==0){
                        $sponser = '<a href="'.route('SponserProduct',$data->id).'" class="edit btn btn-success btn-sm" >add sponser</a>';
                        return $sponser;
                    }else{
                        $Unsponser = '<a href="' . $Unsponser . '" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="remove" class="btn btn-warning btn-sm deleteUser">remove sponser</a>';
                        return $Unsponser;
                    }

                })

                ->rawColumns(['action','specialize','sponser','image'])
                ->make(true);
        }
        return view('admin.products.productList');
    }

    /* Display User add form */

    public function create()
    {
        return view('add-User');
    }

    /* insert User list into mysql database*/

    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'psnId','mobile','city',

        ]);
        $check = User::create($data);
        return Redirect::to("list")->withSuccess('Great! User has been inserted');
    }



    public function edit(Request $request, $id)
    {

        $data['User'] = User::where('id', $id)->first();

        if(!$data['User']){
            return redirect('/list');
        }
        return view('edit-User', $data);
    }



    public function update(Request $request)
    {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        if(!$request->id){
            return redirect('/list');
        }

        $check = User::where('id', $request->id)->update($data);
        return Redirect::to("list")->withSuccess('Great! User has been updated');
    }



    public function delete(Request $request, $id)
    {
        $check = Product::where('id', $id)->delete();

        return redirect('list');
    }


}
