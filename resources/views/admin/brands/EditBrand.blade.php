@extends('admin.layout')
@section('content')

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">افزودن برند جدید</h1>
    </div>
    <!-- end Page Heading -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('UpdateBrand',$brand->id)}}" method="post">
                    {{csrf_field()}}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="thumb_image" class="col-sm-2 control-label">
                                لگوی برند :
                                <span class="star">*</span>
                            </label>
                            <div class="col-sm-10">
                                <input type="text" placeholder="برای ارسال لگوی کلیک نمایید" value="{{$brand->logo}}"  class="form-control imageUploader" id="thumb_image" name="logo">
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$brand->name}}" placeholder="نام برند">
                        </div>
                    </div>


                    <button class="btn btn-success btn-block">افزودن برند</button>
                </form>
            </div>
        </div>
    </div>


@endsection

@section('links')
    <script src="{{asset('/admin/tinymce/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('/admin/js/lib2.js')}}"></script>

@endsection