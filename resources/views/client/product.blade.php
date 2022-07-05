@extends('layout')
@section('content')


    <!-- Mobile menu start -->
    <div class="breadcrumb-area section-padding-2 mt-90 breadcrumb-ptb-2">
        <div class="container-fluid">
            <div class="breadcrumb-content">
                <ul>

                        <li>
                            <a href="{{route('productC',$category->id)}}">{{$category->name}} </a>
                        </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area section-padding-2 pb-110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-tab product-details-tab2">
                        <div class="pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{$product->image}}">
                                        <img src="{{$product->image}}" alt="{{$product->name}}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{$product->image}}"><i class="fa fa-search-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6">
                    <div class="product-details-wrap pro-dec-res-mrg-top2">
                        <div class="product-details-content">
                            <div class="pro-dec-next-prev">
                                <a class="prev" href="#"><i class=" ti-arrow-left "></i></a>
                                <a href="#"><i class=" ti-view-grid "></i></a>
                                <a class="next" href="#"><i class=" ti-arrow-right "></i></a>
                            </div>
                            <span>{{$category->name}}</span>
                            <h2 class="uppercase">{{$product->name}}</h2>
                            <div class="pro-dec-info-wrap pro-dec-info-wrap2">

                                <div class="pro-dec-stock">
                                    <ul>
                                        <li>برند: <span>{{$brand->name}}</span></li>

                                        <li><i class="fa fa-check-circle-o ml-2"></i>  {{$product->instock}} عدد در انبار موجود است </li>
                                    </ul>
                                </div>
                            </div>
                              @php
                                    $newPrice=0;
                                    $newPrice= $product->price-($product->price*($product->offer/100) );
                                @endphp

                                @if($product->offer!=0)
                                    <h4><del class="old-price">{{number_format($product->price)}} تومان</del></h4>
                                    <h3><span class="new-price">{{number_format($newPrice)}} تومان </span></h3>
                                @else
                                   <h4> <span class="new-price">{{number_format($newPrice)}} تومان </span></h4>
                                @endif

                            <div class="product-details-peragraph">
                                <p>{{strip_tags($product->description)}}</p>
                            </div>
                            <div class="product-details-action-wrap">

                                <div class="product-details-cart">

                                    <form action="{{route("cart.store")}}" method="post">
                                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                                        {{ csrf_field()}}
                                        <button class="btn btn-primary" href="#" data-toggle="tooltip" data-original-title="Add to Cart" data-placement="left">افزودن به سبد<i class="pe-7s-cart"></i></button>
                                    </form>

                                </div>

                                <div class="product-details-wishlist">
                                    <a title="Add to wishlist" href=""><i class="fa fa-heart-o"></i></a>
                                </div>

                            </div>
                            <div class="product-details-meta">

                                <span>شماره محصول <a href="#">{{$product->id}}</a></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection