@extends("layout")
@section("content")


    <!-- mini cart start -->
    <div class="sidebar-cart-active">
        <div class="sidebar-cart-all">
            <a class="cart-close" href="#"><i class=" ti-close "></i></a>
            <div class="cart-content">
                <h3>سبد خرید</h3>
                <ul>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Awesome Mobile</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                    <li class="single-product-cart">
                        <div class="cart-img">
                            <a href="#"><img src="assets/images/cart/cart-2.jpg" alt=""></a>
                        </div>
                        <div class="cart-title">
                            <h4><a href="#">Nice Headphones</a></h4>
                            <span> 1 × $49.00	</span>
                        </div>
                        <div class="cart-delete">
                            <a href="#">×</a>
                        </div>
                    </li>
                </ul>
                <div class="cart-total">
                    <h4>Subtotal: <span>$170.00</span></h4>
                </div>
                <div class="cart-checkout-btn">
                    <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                    <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile menu start -->
    <div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
        <div class="clickalbe-sidebar-wrap">
            <a class="sidebar-close"><i class=" ti-close "></i></a>
            <div class="mobile-menu-content-area sidebar-content-100-percent">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder="Search entire store…">
                        <button class="button-search"><i class=" ti-search "></i></button>
                    </form>
                </div>
                <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                    <nav>
                        <ul>
                            <li class="has-sub-menu"><a href="#">Home</a>
                                <ul class="sub-menu-2">
                                    <li class="has-sub-menu"><a href="#">Demo Group 01</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="index.html">Home Electronic</a></li>
                                            <li><a href="index-book.html">Home Book</a></li>
                                            <li><a href="index-fashion.html">Home Fashion</a></li>
                                            <li><a href="index-flower.html">Home Flower</a></li>
                                            <li><a href="index-cake.html">Home Cake</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu"><a href="#">Demo Group 02</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="index-furniture.html">Home Furniture</a></li>
                                            <li><a href="index-handmade.html">Home Handmade</a></li>
                                            <li><a href="index-kids.html">Home Kids</a></li>
                                            <li><a href="index-organic.html">Home Organic</a></li>
                                            <li><a href="index-pet.html">Home Pet</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub-menu"><a href="#">Pages</a>
                                <ul class="sub-menu-2">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact.html">Contact Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="coming-soon.html">Comming Soon</a></li>
                                    <li><a href="empty-cart.html">Empty Cart</a></li>
                                </ul>
                            </li>
                            <li class="has-sub-menu"><a href="#">shop</a>
                                <ul class="sub-menu-2">
                                    <li class="has-sub-menu"><a href="#">Shop Layout</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                            <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                            <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                            <li><a href="shop-2-col.html">Shop 02 Columns</a></li>
                                            <li><a href="shop-list-style.html">Shop List Style</a></li>
                                            <li><a href="shop-collection.html">Shop Collection</a></li>
                                            <li><a href="shop-instagram.html">Shop Instagram</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu"><a href="#">Product Layout</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="product-details.html">Single 01</a></li>
                                            <li><a href="product-details-2.html">Single 02</a></li>
                                            <li><a href="product-details-group.html">Grouped</a></li>
                                            <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                            <li><a href="product-details-configurable.html">Configurable</a></li>
                                            <li><a href="product-details-thumbnail.html">Thumbnail</a></li>
                                            <li><a href="product-details-video.html">Video</a></li>
                                            <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-sub-menu"><a href="#">Shop Page</a>
                                        <ul class="sub-menu-2">
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="checkout.html">Check Out</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                            <li><a href="compare.html">Compare</a></li>
                                            <li><a href="store.html">Store</a></li>
                                            <li><a href="login-register.html">login / register</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="shop-fullwide.html">Collections</a></li>
                            <li class="has-sub-menu"><a href="#">Blog</a>
                                <ul class="sub-menu-2">
                                    <li><a href="blog.html">Blog Page</a></li>
                                    <li><a href="blog-no-sidebar.html">Blog No sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-language-active" href="#">Language <i class="fa fa-angle-down"></i></a>
                        <div class="lang-curr-dropdown lang-dropdown-active">
                            <ul>
                                <li><a href="#">English (US)</a></li>
                                <li><a href="#">English (UK)</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-mobile-curr-lang">
                        <a class="mobile-currency-active" href="#">Currency <i class="fa fa-angle-down"></i></a>
                        <div class="lang-curr-dropdown curr-dropdown-active">
                            <ul>
                                <li><a href="#">USD</a></li>
                                <li><a href="#">EUR</a></li>
                                <li><a href="#">Real</a></li>
                                <li><a href="#">BDT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header-aside-content">
                    <div class="header-aside-payment">
                        <img src="assets/images/icon-img/payment.png" alt="payment">
                    </div>
                    <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet fermentum.</p>
                    <div class="aside-contact-info">
                        <ul>
                            <li><i class=" ti-alarm-clock "></i>Monday - Friday: 9:00 - 19:00</li>
                            <li><i class=" ti-email "></i>Info@example.com</li>
                            <li><i class=" ti-mobile "></i>(+55) 254. 254. 254</li>
                            <li><i class=" ti-home "></i>Helios Tower 75 Tam Trinh Hoang - Ha Noi - Viet Nam</li>
                        </ul>
                    </div>
                    <div class="social-icon-style-2 mb-25">
                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="behance" href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-area mt-90">
        <div class="container-fluid p-0">
            <div class="main-slider-active-1 owl-carousel slider-nav-position-2 slider-nav-style-2">

                @foreach($sliders as $slider)
                    <div class="single-main-slider slider-animated-2 bg-img slider-height-2" style="background-image:url({{$slider->image}});">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="main-slider-content-2 text-center">
                                    <h1 style="color: #1631bd" class="animated">{{$slider->name}}</h1>
                                    <div class="btn-style-3 btn-hover-2">
                                        <a class="animated bs3-white-text bs3-yellow-bg bs3-ptb bs3-ptb bs3-border-radius ptb-2-white-hover" href="{{route('product',$slider->id)}}">برسی محصول</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


    <div class="product-area pb-115">
        <div class="container">
            <div class="section-title-2 text-center mb-30">
                <h2>محصولات جدید</h2>
            </div>
        </div>
        <div class="section-padding-1">
            <div class="container-fluid">
                <div class="product-tab-list nav mb-60">
                    <a class="active" href="#product-1" data-toggle="tab">
                        همه
                    </a>

                        @foreach($categories as $category)

                        <a href="#" data-toggle="tab">
                            {{$category->name}}
                        </a>

                        @endforeach
{{--                    <a href="#product-3" data-toggle="tab">--}}
{{--                        لبتاپ--}}
{{--                    </a>--}}
{{--                    <a href="#product-4" data-toggle="tab">--}}
{{--                        دوربین و هکس--}}
{{--                    </a>--}}
{{--                    <a href="#product-5" data-toggle="tab">--}}
{{--                        کامپیوتر--}}
{{--                    </a>--}}
{{--                    <a href="#product-6" data-toggle="tab">--}}
{{--                         لوازم جانبی--}}
{{--                    </a>--}}
                </div>
                <div class="tab-content jump padding-55-row-col">
                    <div id="product-1" class="tab-pane active">
                        <div class="row">


                                  @foreach($products as $product)

                                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-wrap mb-55">
                                        <div class="product-img pro-theme-color-border product-border mb-25">
                                            <a href="{{route('product',$product->id)}}">
                                                <img src="{{$product->image}}" alt="{{$product->name}}">
                                            </a>
                                            @if($product->offer!=0)
                                                <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">{{$product->offer}}%</span>
                                            @endif

                                            <div class="product-action product-action-position-1 pro-action-theme-color">
                                                <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                                <a title="Add to Wishlist" href="{{route('storeWishlist')}}"><i class="fa fa-heart-o"></i></a>
                                                <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                            </div>

                                        </div>
                                        <div class="product-content">
                                            <p style="font-size: 1rem"><a href="{{route('product',$product->id)}}">{{$product->name}}</a></p>
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
                        <div class="load-btn-style-1 text-center">
                            <a href="#">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                محصولات بیشتر
                            </a>
                        </div>
                    </div>
                    <div id="product-2" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-12.jpg" alt="">
                                        </a>
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="افزودن به علاقه مندی ها" href="{{route('storeWishlist')}}"><i class="fa fa-heart-o"></i></a>
                                              <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-11.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$20.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-10.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$59.99</span>
                                            <span class="new-price">$35.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-9.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-8.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-7.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-30%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Andoer Gimbal 3-Axis Handheld Stabilizer</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$66.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-6.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire TC-885-UA92 Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$90.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Polaroid ZIP Wireless Mobile Photo Mini Printer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-4.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">CyberpowerPC Gamer Xtreme VR Gaming PC</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-3.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">External DVD CD Drive, Aluminum</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">SkyTech Supremacy Gaming Computer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-1.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Protective Cover with Tempered Film</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-btn-style-1 text-center">
                            <a href="shop-fullwide.html">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                View more products
                            </a>
                        </div>
                    </div>
                    <div id="product-3" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-8.jpg" alt="">
                                        </a>
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-7.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$20.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-6.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$59.99</span>
                                            <span class="new-price">$35.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-4.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-3.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-30%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Andoer Gimbal 3-Axis Handheld Stabilizer</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$66.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire TC-885-UA92 Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$90.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-1.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Polaroid ZIP Wireless Mobile Photo Mini Printer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-12.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">CyberpowerPC Gamer Xtreme VR Gaming PC</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-11.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">External DVD CD Drive, Aluminum</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-10.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">SkyTech Supremacy Gaming Computer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-9.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Protective Cover with Tempered Film</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-btn-style-1 text-center">
                            <a href="shop-fullwide.html">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                View more products
                            </a>
                        </div>
                    </div>
                    <div id="product-4" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-4.jpg" alt="">
                                        </a>
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-3.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$20.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$59.99</span>
                                            <span class="new-price">$35.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-1.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-8.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-7.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-30%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Andoer Gimbal 3-Axis Handheld Stabilizer</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$66.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-6.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire TC-885-UA92 Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$90.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Polaroid ZIP Wireless Mobile Photo Mini Printer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-12.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">CyberpowerPC Gamer Xtreme VR Gaming PC</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-11.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">External DVD CD Drive, Aluminum</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-10.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">SkyTech Supremacy Gaming Computer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-9.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Protective Cover with Tempered Film</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-btn-style-1 text-center">
                            <a href="shop-fullwide.html">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                View more products
                            </a>
                        </div>
                    </div>
                    <div id="product-5" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-4.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$20.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$59.99</span>
                                            <span class="new-price">$35.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-3.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-1.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-9.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-30%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Andoer Gimbal 3-Axis Handheld Stabilizer</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$66.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-8.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire TC-885-UA92 Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$90.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-7.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Polaroid ZIP Wireless Mobile Photo Mini Printer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-6.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">CyberpowerPC Gamer Xtreme VR Gaming PC</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-12.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">External DVD CD Drive, Aluminum</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">SkyTech Supremacy Gaming Computer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Protective Cover with Tempered Film</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-btn-style-1 text-center">
                            <a href="shop-fullwide.html">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                View more products
                            </a>
                        </div>
                    </div>
                    <div id="product-6" class="tab-pane">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-1.jpg" alt="">
                                        </a>
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Adapt Active Noise Cancelling Headphones</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$59.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-2.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Case, Heavy Duty [Military Grade] </a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$20.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-3.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Libratone Track Air+ True Wireless Active Noise</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$59.99</span>
                                            <span class="new-price">$35.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-4.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire C24-865-UA91 AIO Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$50.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-5.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iBUYPOWER Gaming PC Computer Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-6.jpg" alt="">
                                        </a>
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-30%</span>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Andoer Gimbal 3-Axis Handheld Stabilizer</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$66.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-7.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Acer Aspire TC-885-UA92 Desktop</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$90.99</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-8.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">Polaroid ZIP Wireless Mobile Photo Mini Printer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-9.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">CyberpowerPC Gamer Xtreme VR Gaming PC</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$70.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-10.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">External DVD CD Drive, Aluminum</a></h4>
                                        <div class="product-price">
                                            <span class="old-price">$70.99</span>
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-11.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">SkyTech Supremacy Gaming Computer</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$60.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap mb-55">
                                    <div class="product-img pro-theme-color-border product-border mb-25">
                                        <a href="product-details.html">
                                            <img src="assets/images/product/e-product-img-12.jpg" alt="">
                                        </a>
                                        <div class="product-action product-action-position-1 pro-action-theme-color">
                                            <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                            <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                            <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h4><a href="product-details.html">iPhone 11 Protective Cover with Tempered Film</a></h4>
                                        <div class="product-price">
                                            <span class="new-price">$80.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="load-btn-style-1 text-center">
                            <a href="shop-fullwide.html">
                                <span><i class="fa fa-spinner fa-spin"></i></span>
                                View more products
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service-area bg-gray-2 section-padding-1 pt-70 pb-35">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service text-center service-mrg-left mb-30">
                        <div class="service-icon">
                            <i class=" ti-truck "></i>
                        </div>
                        <div class="service-content">
                            <h4>ضمانت اصالت کالا</h4>
                            <p style="font-size: 16px">تمامی محصولات ما ضمانت اصالت کالا دارند</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service text-center mb-30">
                        <div class="service-icon">
                            <i class=" ti-gift "></i>
                        </div>
                        <div class="service-content">
                            <h4>پیشنهادهای ویژه</h4>
                            <p style="font-size: 16px">پرفروش ترین ها و پرطرفدار ترین محصولات با جذاب ترین تخفیفات</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service text-center mb-30">
                        <div class="service-icon">
                            <i class=" ti-lock "></i>
                        </div>
                        <div class="service-content">
                            <h4>گارانتی محصولات</h4>
                            <p style="font-size: 16px">تمامی محصولات خریداری شده از نیل شاپ سه سال گارانتی میباشد</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-service text-center service-mrg-right mb-30">
                        <div class="service-icon">
                            <i class=" ti-headphone-alt "></i>
                        </div>
                        <div class="service-content">
                            <h4>پشتیبانی حرفه ای</h4>
                            <p style="font-size: 16px">پشتیبانی ۲۴ ساعته در سایت</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="featured-categories section-padding-1 pt-110 pb-120">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-2 text-center mb-60">--}}
{{--                <h2>Featured Categories</h2>--}}
{{--            </div>--}}
{{--            <div class="featured-categories-active owl-carousel slick-dot-style-1">--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Camera & Photo</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-1.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Laptop & Computers</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-4.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Headphone & Accessories</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-2.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Cellphones & Accessories</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-5.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Business & Office</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-3.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Video Games Consoles</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-6.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Camera & Photo</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-2.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="featured-categories-wrap">--}}
{{--                    <div class="single-featured-categories mb-25">--}}
{{--                        <div class="featured-categories-content">--}}
{{--                            <h3><a href="#">Camera & Photo</a></h3>--}}
{{--                            <p>35 products from $35.00</p>--}}
{{--                            <div class="btn-style-3 btn-hover-2">--}}
{{--                                <a class="animated bs3-gray-text bs3-gray-bg bs3-ptb-3 bs3-border-radius ptb-2-theme-hover font-dec" href="product-details.html">Shop now</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="featured-categories-img">--}}
{{--                            <a href="#"><img src="assets/images/product/e-featured-categories-5.png" alt="categories"></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="product-area pt-115 pb-60 section-padding-1">
        <div class="container-fluid">
            <div class="product-tab-list-2 nav mb-60">
                <a href="#product-8" data-toggle="tab">
                    پیشنهاد ویژه
                </a>
            </div>
            <div class="tab-content jump padding-55-row-col">
                <div id="product-7" class="tab-pane active">
                    <div class="row">
                        @foreach($sps as $sp)

                             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border product-border mb-25">
                                    <a href="{{route('product',$sp->id)}}">
                                        <img src="{{$sp->image}}" alt="{{$sp->name}}">
                                    </a>
                                    <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">ویژه</span>

                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <a title="Add to Cart" href="#"><i class="fa fa-cart-arrow-down"></i></a>
                                        <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-search-plus"></i></a>
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <a title="Add to Compare" href="#"><i class="fa fa-compress"></i></a>
                                    </div>

                                </div>
                                <div class="product-content">
                                    <h4><a href="{{route('product',$sp->id)}}">{{$sp->name}}</a></h4>
                                    <div class="product-price">
                                        @php
                                            $newPrice=0;
                                            $newPrice= $sp->price-($sp->price*($sp->offer/100) );
                                        @endphp

                                        @if($sp->offer!=0)
                                            <del class="old-price">{{number_format($sp->price)}} تومان</del>
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


            </div>
        </div>
    </div>


    <div class="banner-gradient-area pt-40 pb-40">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="banner-zoom-wrap">
                        <a class="zoom-img" href="{{route('product',$sponsor->id)}}">
                            <img alt="image" src="{{$sponsor->image}}">
                            <img alt="image" src="{{$sponsor->image}}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="banner-zoom-content ml-100">
                        <h2>{{$sponsor->name}}</h2>
                        <div class="btn-style-3 btn-hover-2">
                            <a class="animated bs3-white-text bs3-yellow-bg bs3-ptb bs3-border-radius ptb-2-white-hover" href="{{route('product',$sponsor->id)}}">مشاهده محصول</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pt-100 pb-100 section-padding-3">
        <div class="container-fluid">
            <div class="section-title-3 st-bg-white st-mrg-botton text-center">
                <h2>برند های موجود</h2>
            </div>
            <div class="round-border-1 brand-logo-ptb">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-logo-active owl-carousel">
                            @foreach($brands as $brand)
                            <div class="single-brand-logo">
                                    <img src="{{$brand->logo}}" alt="{{$brand->name}}">
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="testimonial-area bg-blue pt-100 pb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="testimonial-active owl-carousel">--}}
{{--                <div class="single-testimonial text-center">--}}
{{--                    <div class="testimonial-quote">--}}
{{--                        <i class="fa fa-quote-left"></i>--}}
{{--                    </div>--}}
{{--                    <p>This template is fantastic, EXACTLY what I wanted and the support has been AMAZING !! fast and super helpful. Thanks so much guys and good luck with the template</p>--}}
{{--                    <div class="client-info">--}}
{{--                        <div class="client-img">--}}
{{--                            <img src="assets/images/testimonial/client-1.png" alt="testimonial">--}}
{{--                        </div>--}}
{{--                        <span>Lela Rodgers - California</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="single-testimonial text-center">--}}
{{--                    <div class="testimonial-quote">--}}
{{--                        <i class="fa fa-quote-left"></i>--}}
{{--                    </div>--}}
{{--                    <p>Aliquam quis erat blandit, convallis velit vehicula, molestie risus. Nulla volutpat pulvinar sagittis. Nunc rutrum congue dignissim. Etiam lobortis, velit at molestie dignissim.</p>--}}
{{--                    <div class="client-info">--}}
{{--                        <div class="client-img">--}}
{{--                            <img src="assets/images/testimonial/client-1.png" alt="testimonial">--}}
{{--                        </div>--}}
{{--                        <span>Lela Rodgers - California</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="blog-area section-padding-1 pt-115 pb-90">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="section-title-2 text-center mb-60">--}}
{{--                <h2>Tech News</h2>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-6 col-lg-12">--}}
{{--                    <div class="blog-wrap-2 mb-30">--}}
{{--                        <div class="blog-img-2">--}}
{{--                            <a href="blog-details.html"><img src="assets/images/blog/e-blog-1.jpg" alt="blog"></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content-2 bc-padding-left">--}}
{{--                            <div class="blog-category-2">--}}
{{--                                <a href="#">TECH, </a>--}}
{{--                                <a href="#">SMART</a>--}}
{{--                            </div>--}}
{{--                            <h3><a href="blog-details.html">Advertisers Embrace Rich <br>Media Format</a></h3>--}}
{{--                            <div class="blog-meta-2">--}}
{{--                                <ul>--}}
{{--                                    <li>By <a href="#"> John Snow</a></li>--}}
{{--                                    <li>-</li>--}}
{{--                                    <li><a href="#">19 Dec 2019</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <p>Proin vitae nisl mauris. Nulla dignissim maximus molestie. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>--}}
{{--                            <div class="btn-style-4 btn-style-4-ptb1 btn-hover">--}}
{{--                                <a class="bg-black-hover" href="product-details.html">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xl-6 col-lg-12">--}}
{{--                    <div class="blog-wrap-2 mb-30">--}}
{{--                        <div class="blog-img-2">--}}
{{--                            <a href="blog-details.html"><img src="assets/images/blog/e-blog-2.jpg" alt="blog"></a>--}}
{{--                        </div>--}}
{{--                        <div class="blog-content-2 bc-padding-left">--}}
{{--                            <div class="blog-category-2">--}}
{{--                                <a href="#">TECH, </a>--}}
{{--                                <a href="#">SMART</a>--}}
{{--                            </div>--}}
{{--                            <h3><a href="blog-details.html">Influencing The Influencer</a></h3>--}}
{{--                            <div class="blog-meta-2">--}}
{{--                                <ul>--}}
{{--                                    <li>By <a href="#"> John Snow</a></li>--}}
{{--                                    <li>-</li>--}}
{{--                                    <li><a href="#">19 Dec 2019</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <p>Proin vitae nisl mauris. Nulla dignissim maximus molestie. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>--}}
{{--                            <div class="btn-style-4 btn-style-4-ptb1 btn-hover">--}}
{{--                                <a class="bg-black-hover" href="product-details.html">Read More</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


@endsection