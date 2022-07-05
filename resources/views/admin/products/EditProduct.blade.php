@extends('admin.layout')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">ویرایش محصول </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('ProductUpdate',$product->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @include("errors")
                    <div class="form-group">
                        <label for="thumb_image" class="col-sm-2 control-label">
                            تصویر اصلی محصول :
                            <span class="star">*</span>
                        </label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$product->image}}"  class="form-control imageUploader" id="thumb_image" name="image">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$product->name}}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="category_id" class="form-control" required>

                                @foreach($categories as $category)

                                    <option value="{{$category->id}}" @if($product->category_id==$category->id) selected  @endif>{{$category->name}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <select name="brand_id" class="form-control" required>

                                @foreach($brands as $brand)

                                    <option value="{{$brand->id}}" @if($product->brand_id==$brand->id) selected  @endif>{{$brand->name}}</option>

                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="price" class="form-control" value="{{$product->price}}" required>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="offer" value="{{$product->offer}}" class="form-control" >
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <input type="number" name="instock" value="{{$product->instock}}" class="form-control" >
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="productDescription">توضیجات محصول</label>
                            <textarea id="my_id" name="description">{{$product->description}}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-block">ویرایش محصول </button>
                </form>
            </div>
        </div>
    </div>

    <!-- /.content-wrapper -->
@endsection
@section('links')
    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/lib2.js')}}"></script>

@endsection