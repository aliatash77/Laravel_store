@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست برند ها</h1>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-9">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example2" class="table table-bordered text-dark table-responsive text-center table-hover">
                            <thead>
                            <tr>
                                <th>شماره برند</th>
                                <th>نام برند</th>
                                <th>لگو برند</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($brands as $brand)
                                <tr>
                                    <th>{{$brand->id}}</th>
                                    <th>{{$brand->name}}</th>
                                    <th><img src="{{$brand->logo}}" width="100px" height="auto" alt="{{$brand->name}}"></th>
                                    <td>{{$brand->created_at}}</td>
                                    <td>{{$brand->updated_at}}</td>
                                    <th>
                                        <form action="{{route('EditBrand',$brand->id)}}" method="get">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button></th>
                                    </form>
                                    <th>
                                        <form action="{{route('DeleteBrand',$brand->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button></th>
                                    </form>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection