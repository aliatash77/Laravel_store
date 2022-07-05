@extends("layout")
@section("content")


    <!-- Page-Banner-AREA START -->
    <br><br><br><br>
    <!-- Page-Banner-AREA END
    <section class="content">
         CART-AREA START -->
        <div class="cart-area margin-70">
            <div class="container">
                @if($cart && $cart->getCartProduct->count() > 0)

                    <form action="#">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="cart-table-head">
                                        <tr>
                                            <td class="text-center"> نام</td>
                                            <td class="text-center"> قیمت</td>
                                            <td class="text-center"> تعداد</td>
                                            <td class="text-center"> تخفیف</td>
                                            <td class="text-center"> قیمت نهایی</td>
                                            <td class="text-center"> حذف</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $offerPrice = 0; @endphp
                                        @foreach($cart->getCartProduct as $cart_product)

                                            <tr>
                                                <td class="text-left shopping-cart-breif">
                                                    <a href="#"><img width="100px" src="{{$cart_product->getProduct->image}}" alt="#" /></a>
                                                    <h5><a href="#" class="text-uppercase">{{$cart_product->getProduct->name}}</a></h5>
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-cart">{{number_format($cart_product->getProduct->price)}} تومان</div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="cart-plus-minus" data-id="{{$cart_product->id}}">
                                                        <input type="text"  value="{{ $cart_product->count }}" name="qtybutton" class="cart-plus-minus-box text-center">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-cart">{{$cart_product->getProduct->offer}} %</div>
                                                </td>
                                                <td class="custom-cart">{{number_format((($cart_product->getProduct->price-($cart_product->getProduct->price/100*$cart_product->getProduct->offer))*$cart_product->count))}} تومان</td>
                                                <td class="text-center remove">
                                                    <a class="btn btn-danger" href="{{route("cart.delete",$cart_product->id)}}"><i class="fa fa-trash"></i></a>
                                                </td>
                                                @php $offerPrice += ($cart_product->getProduct->price/100*$cart_product->getProduct->offer)*$cart_product->count; @endphp
                                            </tr>

                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="shipping-discount-details">
                            <div class="row">

                                <div class="col-sm-12 col-sm-12">
                                    <label class="custom-form custom-submit active-submit">جزییات پرداخت</label>
                                    <div class="order">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="text-left">قیمت قابل پرداخت</td>
                                                <td class="text-right" id="checkoutprice">{{number_format($cart->totalPrice-$offerPrice)}} تومان</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                    </div>
                                    <a href="{{route('goPay')}}" class="btn btn-success btn-block">پرداخت</a>
                                </div>
                            </div>
                        </div>
                    </form>
                @else

                    <div class="alert alert-danger">
                        <p>سبد خرید خالی است</p>
                    </div>

                @endif
            </div>
        </div>
        <!-- CART-AREA END -->
        <!-- BRANDS-LOGO-AREA START -->
        <div class="brands-logo-area">
            <div class="container">
                <div class="row">
                    <div class="active-brands-logo">
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/2.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/3.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/4.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/5.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/6.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                        <!-- Single-Brand-Logo Start -->
                        <div class="col-md-12">
                            <div class="single-brand-logo">
                                <img src="img/brand/1.png" alt="" />
                            </div>
                        </div>
                        <!-- Single-Brand-Logo End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- BRANDS-LOGO-AREA END -->
    </section>
    <!-- FOOTER-AREA START -->

    <script>

        var csrf = '{{csrf_token()}}';

    </script>

    <style>

        #load {
            width:100%;
            height:100vh; ;
            background-color: gray;
            text-align: center;
            line-height: 50vh;
            font-size: 2em;
            position: fixed;
            display: none;
            top:0px;
            left: 0px;
            z-index: 999999;
        }


    </style>
    <div id="load">Loading ... </div>


@endsection