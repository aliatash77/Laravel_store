@extends("layout")
@section("content")

         <div class="breadcrumb-area section-padding-1 mt-90 bg-gray breadcrumb-ptb-1">
            <div class="container-fluid">
                <div class="breadcrumb-content text-center">
                    <div class="breadcrumb-title">
                        <h2>لیست محصولات</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="shop-area section-padding-1 pt-120 pb-120">
            <div class="container-fluid">
                <div class="shop-top-bar">


                    <div class="shop-top-bar-right">
                        <div class="shop-tab nav">
                            <a href="#shop-1" class="active ml-4" data-toggle="tab"><i class=" ti-view-list-alt "></i></a>

                            <a href="#shop-3" data-toggle="tab"><i class="ti-layout-grid3"></i></a>
                        </div>

                    </div>
                </div>



                <div class="tab-content jump-3 pt-30">
                    <div id="shop-1" class="tab-pane active padding-55-row-col">

                        @foreach($products as $product)

                            <div class="shop-list-wrap mb-50">
                            <div class="row">


                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap">


                                        <div class="product-img pro-theme-color-border product-border">
                                            <a href="{{route('product',$product->id)}}">
                                                <img src="{{$product->image}}" alt="{{$product->name}}">
                                            </a>
{{--                                            <div class="shop-list-quickview">--}}
{{--                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                    <div class="shop-list-content">
                                        <h3><a href="{{route('product',$product->id)}}">{{$product->name}}</a></h3>
                                        <div class="pro-list-price">
                                            @php
                                                $newPrice=0;
                                                $newPrice= $product->price-($product->price*($product->offer/100) );
                                            @endphp

                                            @if($product->offer!=0)
                                                <del class="old-price">{{number_format($product->price)}} تومان</del>
                                                <span class="new-price">{{number_format($newPrice)}} تومان </span>
                                            @else
                                                <span class="new-price">{{number_format($newPrice)}} تومان </span>
                                            @endif
                                        </div>
                                        <p>{{strip_tags($product->description)}}</p>
                                        <div class="product-list-action">
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <div class="pro-list-actioncart">
                                                <a title="Add to cart" href="{{route("cart.store")}}">افزودن به سبد</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        @endforeach


                    </div>



                    <div id="shop-3" class="tab-pane padding-55-row-col">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="{{route('product',$product->id)}}">
                                            <img src="{{$product->image}}" alt="{{$product->name}}">
                                        </a>


                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="{{route('product',$product->id)}}">{{$product->name}}</a></h4>
                                        <div class="product-price">
                                            @php
                                                $newPrice=0;
                                                $newPrice= $product->price-($product->price*($product->offer/100) );
                                            @endphp

                                            @if($product->offer!=0)
                                                <del class="old-price">{{number_format($product->price)}} تومان</del>
                                                <span class="new-price">{{number_format($newPrice)}} تومان </span>
                                            @else
                                                <span class="new-price">{{number_format($newPrice)}} تومان </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
{{--                    <div class="pro-pagination-style mt-30 text-center">--}}
{{--                        <ul>--}}
{{--                            <li><a class="active" href="#">01</a></li>--}}
{{--                            <li><a href="#">02</a></li>--}}
{{--                            <li><a href="#">03</a></li>--}}
{{--                            <li><a href="#">04</a></li>--}}
{{--                            <li><a href="#">05</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>

@endsection