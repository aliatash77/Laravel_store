@extends('admin.layout')
@section('content')




    <div class="container mt-4">
        <a href="{{ route('CreateProduct') }}"  class="text-center btn btn-success mb-1">ساخت محصول جدید</a>
        <table class="table table-bordered table-hover table-responsive" id="laravel-datatable-crud">
            <thead>
            <tr>
                <th>Id</th>
                <th>تصویر محصول</th>
                <th>نام‌ محصول</th>
                <th>قیمت</th>
                <th>تخفیف</th>
                <th>تعداد محصول</th>
                <th>عملیات</th>
                <th>ویژه ها</th>
                <th>اسپانسر</th>
                <th>تاریخ ساخت</th>
                <th>تاریخ ویرایش</th>
            </tr>
            </thead>
        </table>
    </div>

    <script>
        $(document).ready( function () {
            $('#laravel-datatable-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('list') }}",
                    type: 'GET',
                },
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'image', name: 'image' },
                    { data: 'name', name: 'name' },
                    { data: 'price', name: 'price' },
                    { data: 'offer', name: 'offer' },
                    { data: 'instock', name: 'instock' },
                    { data: 'action', name: 'action' },
                    { data: 'specialize', name: 'specialize' },
                    { data: 'sponser', name: 'sponser' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },


                ]
            });
        });

        $('body').on('click', '.deleteTodo', function () {

            var todo_id = $(this).data("id");
            if(confirm("Are You sure want to delete !"))
            {
                $.ajax({
                    type: "get",
                    url: "{{ url('delete-todo') }}"+'/'+todo_id,
                    success: function (data) {
                        var oTable = $('#laravel-datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error:',data);
                    }
                });
            }
        });



        $('body').on('click', '.deleteTodo', function () {

            var todo_id = $(this).data("id");
            if(confirm("Are You sure want to delete !"))
            {
                $.ajax({
                    type: "get",
                    url: "{{ url('/dashboard/product/special') }}"+'/'+todo_id,
                    success: function (data) {
                        var oTable = $('#laravel-datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error:',data);
                    }
                });
            }
        });


        $('body').on('click', '.deleteTodo', function () {

            var todo_id = $(this).data("id");
            if(confirm("Are You sure want to delete !"))
            {
                $.ajax({
                    type: "get",
                    url: "{{ url('/dashboard/product/sponser') }}"+'/'+todo_id,
                    success: function (data) {
                        var oTable = $('#laravel-datatable-crud').dataTable();
                        oTable.fnDraw(false);
                    },
                    error: function (data) {
                        console.log('Error:',data);
                    }
                });
            }
        });

    </script>


@endsection





{{--

 <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">لیست محصولات</h1>
    </div>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="جست‌و‌جو برای ..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body ">
                        <table id="example2" class="table table-bordered text-dark table-responsive text-center table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>تصویر محصول</th>
                                <th>نام محصول</th>
                                <th>قیمت محصول</th>
                                <th>تخفیف محصول</th>
                                <th>تعداد محصول</th>
                                <th>توضیح محصول</th>
                                <th>تاریخ ساخت</th>
                                <th>تاریخ ویرایش</th>
                                <th>ویرایش دسته</th>
                                <th>حذف دسته</th>
                                <th>ویژه ها</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($products as $product)
                                <tr>
                                    <th>{{$product->id}}</th>
                                    <th><img src="{{$product->image}}" width="100px" height="auto" alt="{{$product->name}}"></th>
                                    <th>{{$product->name}}</th>
                                    <th>{{number_format($product->price)}}</th>
                                    <th>{{$product->offer}}%</th>
                                    <th>{{$product->instock}} عدد </th>
                                    <th>{{$product->description}}</th>
                                    <th>{{$product->created_at}}</th>
                                    <td>{{$product->updated_at}}</td>

                                    <th>
                                        <form action="{{route('EditProduct',$product->id)}}" method="get">
                                            <button class="btn btn-primary"><i class="fa fa-pencil-alt"></i></button>
                                        </form>
                                    </th>

                                    <th>
                                        <form action="{{route('ProductDelete',$product->id)}}" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-danger"><i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    </th>

                                    @if($product->special==0)
                                        <th>
                                            <form action="{{route('SpecialProduct',$product->id)}}" method="post">
                                                {{csrf_field()}}

                                                <button class="btn btn-success"><i class="fa fa-spider"></i>  افزودن</button>
                                            </form>
                                        </th>
                                     @else
                                        <th>
                                            <form action="{{route('UnSpecialProduct',$product->id)}}" method="post">
                                                {{csrf_field()}}

                                                <button class="btn btn-dark"><i class="fa fa-spider"></i>حذف</button>
                                            </form>
                                        </th>
                                      @endif


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


--}}