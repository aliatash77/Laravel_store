@extends("layout")
@section("content")


    <!-- Page-Banner-AREA START -->
    <section class="page-banner-area">
        <div class="col-xs-12">
            <div class="page-banner-brief">
                <h2>Shopping Cart</h2>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Shopping Cart</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page-Banner-AREA END -->
    <section class="content">
        <!-- CART-AREA START -->
        <div class="cart-area margin-70">
            <div class="container">

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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $offerPrice = 0; @endphp
                                        @foreach($factor->getCartProduct as $factor_product)

                                            <tr>
                                                <td class="text-left shopping-cart-breif">
                                                    <h5><a href="#" class="text-uppercase">{{$cart_pro$factor_productduct->name}}</a></h5>
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-cart">{{number_format($factor_product->price)}} تومان</div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="cart-plus-minus" data-id="{{$factor_product->id}}">
                                                        <input type="text" value="{{ $factor_product->count }}" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-cart">{{$factor_product->offer}} %</div>
                                                </td>
                                                <td class="custom-cart">{{number_format((($factor_product->price-($factor_product->price/100*$factor_product->offer))*$factor_product->count))}} تومان</td>

                                                @php $offerPrice += ($factor_product->price/100*$factor_product->offer)*$factor_product->count; @endphp

                                            </tr>

                                        @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>



            </div>
        </div>
        <!-- CART-AREA END -->

        <!-- BRANDS-LOGO-AREA END -->
    </section>
    <!-- FOOTER-AREA START -->



@endsection