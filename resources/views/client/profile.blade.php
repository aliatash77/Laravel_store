@extends('layout')
@section('content')

    <div class="breadcrumb-area section-padding-1 mt-80 bg-gray breadcrumb-ptb-1">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>حساب کاربری</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper start -->
    <div class="my-account-wrapper pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>داشبورد</a>
{{--                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> سفارشات</a>--}}

                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> آدرس </a>
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> ویرایش اطلاعات</a>
                                    <a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> خروج</a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            @if(!empty($user->name))

                                                <div class="welcome">

                                                  <p>سلام , <strong>{{$user->name}}</strong> (اگر<strong>{{$user->name}} نیستید لطفا </strong><a href="{{route('logout')}}" class="logout"> خارج شوید!</a>)</p>
                                            </div>

                                                <p class="mb-0">از داشبورد حساب خود شما می توانید به راحتی ، آدرس حمل و نقل و رمز ورود و جزئیات حساب خود را ویرایش کنید.
                                                </p>

                                             @endif
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
{{--                                    <div class="tab-pane fade" id="orders" role="tabpanel">--}}
{{--                                        <div class="myaccount-content">--}}
{{--                                            <h3>Orders</h3>--}}
{{--                                            <div class="myaccount-table table-responsive text-center">--}}
{{--                                                <table class="table table-bordered">--}}
{{--                                                    <thead class="thead-light">--}}
{{--                                                    <tr>--}}
{{--                                                        <th>Order</th>--}}
{{--                                                        <th>Date</th>--}}
{{--                                                        <th>Status</th>--}}
{{--                                                        <th>Total</th>--}}
{{--                                                        <th>Action</th>--}}
{{--                                                    </tr>--}}
{{--                                                    </thead>--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>1</td>--}}
{{--                                                        <td>Aug 22, 2018</td>--}}
{{--                                                        <td>Pending</td>--}}
{{--                                                        <td>$3000</td>--}}
{{--                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>2</td>--}}
{{--                                                        <td>July 22, 2018</td>--}}
{{--                                                        <td>Approved</td>--}}
{{--                                                        <td>$200</td>--}}
{{--                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>3</td>--}}
{{--                                                        <td>June 12, 2017</td>--}}
{{--                                                        <td>On Hold</td>--}}
{{--                                                        <td>$990</td>--}}
{{--                                                        <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Downloads</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Date</th>
                                                        <th>Expire</th>
                                                        <th>Download</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Haven - Free Real Estate PSD Template</td>
                                                        <td>Aug 22, 2018</td>
                                                        <td>Yes</td>
                                                        <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HasTech - Profolio Business Template</td>
                                                        <td>Sep 12, 2018</td>
                                                        <td>Never</td>
                                                        <td><a href="#" class="check-btn sqr-btn "><i class="fa fa-cloud-download"></i> Download File</a></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Payment Method</h3>
                                            <p class="saved-message">You Can't Saved Your Payment Method yet.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Billing Address</h3>
                                            <address>
                                                {{$user->address}}
                                            </address>
                                             </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->

                                         <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>ویرایش اطلاعات</h3>
                                            <div class="account-details-form">
                                                <form action="{{route('editProfile',$user->id)}}"method="post">
                                                   {{csrf_field()}}
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="single-input-item">
                                                                <label for="first-name"  class="required">نام و نام‌خانوادگی</label>
                                                                <input type="text" name="name" @if(!empty($user->name))
                                                                     value="{{$user->name}}"
                                                                                    @else
                                                                                            placeholder="نام و نام‌خانوادگی خود را وارد کنید"
                                                                                   @endif id="name" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="display-name" class="required">کدپستی</label>
                                                        <input type="text" value="{{$user->postal_code}}" name="postal_code" id="display-name" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">آدرس ایمیل</label>
                                                        <input type="email" value="{{$user->email}}" id="email" />
                                                    </div>

                                                    <div class="single-input-item">
                                                        <label for="email" class="required">آدرس محل سکونت</label>
                                                        <textarea class="form-control" name="address" type="text" >{{$user->address}}</textarea>
                                                    </div>
{{--                                                    <fieldset>--}}

{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="single-input-item">--}}
{{--                                                                    <label for="new-pwd" class="required">پسورد جدید</label>--}}
{{--                                                                    <input name="password" value="{{$user->password}}" type="password" id="new-pwd" />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-lg-6">--}}
{{--                                                                <div class="single-input-item">--}}
{{--                                                                    <label for="confirm-pwd" class="required">تکرار پسورد</label>--}}
{{--                                                                    <input type="password" value="{{$user->password}}" id="confirm-pwd" />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </fieldset>--}}
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn ">‌‌ذخیره تغییرات</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->

                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->



@endsection