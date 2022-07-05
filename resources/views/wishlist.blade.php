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
                                            <td class="text-center"> حذف</td>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($wishlists as $wishlist)

                                            <tr>
                                                <td class="text-left shopping-cart-breif">
                                                    <a href="#"><img width="50px" src="/uploads/{{$wishlist->product->image}}" alt="#" /></a>
                                                    <h5><a href="#" class="text-uppercase">{{$wishlist->product->name}}</a></h5>
                                                </td>
                                                <td class="text-center">
                                                    <div class="custom-cart">{{number_format($wishlist->product->price)}} تومان</div>
                                                </td>

                                                <td class="text-center remove">
{{--                                                    <a href="/wishlist/{{$wishlist->id}}"><i class="pe-7s-close"></i></a>--}}
                                                </td>

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

    </section>
    <!-- FOOTER-AREA START -->



@endsection