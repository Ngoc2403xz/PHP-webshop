@extends('frontend.layouts.main')
@section('cart')
    <!-- breadcrumb area start -->
{{--    <div class="breadcrumb-area">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="breadcrumb-wrap">--}}
{{--                        <nav aria-label="breadcrumb">--}}
{{--                            <ul class="breadcrumb">--}}
{{--                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                                <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>--}}
{{--                                <li class="breadcrumb-item active" aria-current="page">checkout</li>--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- breadcrumb area end -->

    <!-- page main wrapper start -->
    <main>
        <!-- checkout main wrapper start -->
        <div class="checkout-page-wrapper pt-100 pb-90 pt-sm-58 pb-sm-54">
            <div class="container">
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <!-- Checkout Login Coupon Accordion Start -->--}}
{{--                        <div class="checkoutaccordion" id="checkOutAccordion">--}}
{{--                            <div class="card">--}}
{{--                                <h3>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click Here To Login</span></h3>--}}
{{--                                <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>--}}
{{--                                        <div class="login-reg-form-wrap mt-20">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-7 m-auto">--}}
{{--                                                    <form action="#" method="post">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-md-12">--}}
{{--                                                                <div class="single-input-item">--}}
{{--                                                                    <input type="email" placeholder="Enter your Email" required />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}

{{--                                                            <div class="col-md-12">--}}
{{--                                                                <div class="single-input-item">--}}
{{--                                                                    <input type="password" placeholder="Enter your Password" required />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="single-input-item">--}}
{{--                                                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">--}}
{{--                                                                <div class="remember-meta">--}}
{{--                                                                    <div class="custom-control custom-checkbox">--}}
{{--                                                                        <input type="checkbox" class="custom-control-input" id="rememberMe" required />--}}
{{--                                                                        <label class="custom-control-label" for="rememberMe">Remember Me</label>--}}
{{--                                                                    </div>--}}
{{--                                                                </div>--}}

{{--                                                                <a href="#" class="forget-pwd">Forget Password?</a>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}

{{--                                                        <div class="single-input-item">--}}
{{--                                                            <button class="check-btn sqr-btn">Login</button>--}}
{{--                                                        </div>--}}
{{--                                                    </form>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="card">--}}
{{--                                <h3>Have A Coupon? <span data-toggle="collapse" data-target="#couponaccordion">Click Here To Enter Your Code</span></h3>--}}
{{--                                <div id="couponaccordion" class="collapse" data-parent="#checkOutAccordion">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <div class="cart-update-option">--}}
{{--                                            <div class="apply-coupon-wrapper">--}}
{{--                                                <form action="#" method="post" class=" d-block d-md-flex">--}}
{{--                                                    <input type="text" placeholder="Enter Your Coupon Code" required />--}}
{{--                                                    <button class="check-btn sqr-btn">Apply Coupon</button>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <!-- Checkout Login Coupon Accordion End -->--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="row">
                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h2>Thông tin đặt hàng</h2>
                            @if(!session('msg'))
                            <div class="billing-form-wrap">
                                <form action="{{ route('shop.cart.postOrder') }}" method="post">
                                    @csrf
                                        <div class="single-input-item">
                                            <div class="single-input-item">
                                                <label for="f_name" class="required">Họ tên</label>
                                                <input type="text" id="f_name"  name="name" placeholder="First Name" required />
                                            </div>
                                    </div>

                                    <div class="single-input-item">
                                        <label for="email" class="required">Email </label>
                                        <input type="email" id="email" name="email" placeholder="Email Address" required />
                                    </div>

                                    <div class="single-input-item">
                                        <label for="street-address" class="required mt-20">Địa chỉ nhận hàng</label>
                                        <input type="text" id="street-address" name="address" placeholder="Street address Line 1" required />
                                    </div>


                                    <div class="single-input-item">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" id="phone" name="phone" placeholder="Phone" />
                                    </div>
                                    <div class="single-input-item">
                                        <label for="note">Chú thích</label>
                                        <textarea name="note" id="note" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                    </div>
                                    <button type="submit" class="check-btn sqr-btn">Đặt hàng</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details mt-md-26 mt-sm-26">
                            <h2>Your Order Summary</h2>
                            <div class="order-summary-content mb-sm-4">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Số lượng</th>
                                            <th>Tổng tiền</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <td>{{ $totalCount }}</td>
                                            <td><strong>{{ $totalPrice }} đ</strong></td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <a href="/gio-hang" class="btn btn-success py-2 px-2 m-l-2">
                                            <span class="icon-shopping_cart"></span> Xem giỏ hàng
                                        </a>
                                        <a href="/" class="btn btn-warning py-2 px-2" style="float: right">
                                            <i class="icon-long-arrow-right"></i> Tiếp tục mua hàng
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div> <!-- .col-md-8 -->
            @else
                {{ session('msg') ? session('msg') : '' }}
            @endif
            </div>
        </div>
        <!-- checkout main wrapper end -->
    </main>
    <!-- page main wrapper end -->
@endsection
