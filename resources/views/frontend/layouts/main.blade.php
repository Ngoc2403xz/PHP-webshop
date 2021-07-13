<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from demo.hasthemes.com/melani-v3/melani/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 05:16:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="{{ asset('') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Melani-Multipurpose eCommerce Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="frontend/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    <!-- IonIcon CSS -->
    <link href="frontend/css/ionicons.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="frontend/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="frontend/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="frontend/css/style.css" rel="stylesheet">
</head>

<body>


<!-- header area start -->
@include('frontend.layouts.header')
<!-- header area end -->
@yield('content')
@yield('contact')
@yield('articles')
@yield('article-details')
@yield('product')
@yield('product-details')
@yield('cart')
@yield('search')
@yield('404')
<!-- footer area start -->
@include('frontend.layouts.footer')
<!-- footer area end -->

<!-- Quick view modal start -->
<div class="modal" id="quick_view">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5 col-md-5">
                            <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                <div class="pro-large-img">
                                    <img src="frontend/img/product/product-details-img1.jpg" alt="" />
                                </div>
                                <div class="pro-large-img">
                                    <img src="frontend/img/product/product-details-img2.jpg" alt=""/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="frontend/img/product/product-details-img3.jpg" alt=""/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="frontend/img/product/product-details-img4.jpg" alt=""/>
                                </div>
                                <div class="pro-large-img">
                                    <img src="frontend/img/product/product-details-img4.jpg" alt=""/>
                                </div>
                            </div>
                            <div class="pro-nav slick-padding2 slider-arrow-style slider-arrow-style__style-2">
                                <div class="pro-nav-thumb"><img src="frontend/img/product/product-details-img1.jpg" alt="" /></div>
                                <div class="pro-nav-thumb"><img src="frontend/img/product/product-details-img2.jpg" alt="" /></div>
                                <div class="pro-nav-thumb"><img src="frontend/img/product/product-details-img3.jpg" alt="" /></div>
                                <div class="pro-nav-thumb"><img src="frontend/img/product/product-details-img4.jpg" alt="" /></div>
                                <div class="pro-nav-thumb"><img src="frontend/img/product/product-details-img5.jpg" alt="" /></div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="product-details-des pt-sm-30">
                                <h3>Chaz Kangeroo Hoodies</h3>
                                <div class="ratings">
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span class="good"><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <div class="pro-review">
                                        <span><a href="#">1 review(s)</a></span>
                                    </div>
                                </div>
                                <div class="pricebox">
                                    <span class="regular-price">$160.00</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst.</p>
                                <div class="quantity-cart-box d-flex align-items-center mb-24">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="product-btn product-btn__color">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                </div>
                                <div class="availability mb-16">
                                    <h5>Availability:</h5>
                                    <span>in stock</span>
                                </div>
                                <div class="share-icon">
                                    <h5>share:</h5>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details inner end -->
            </div>
        </div>
    </div>
</div>
<!-- Quick view modal end -->

<!-- Popup Subscribe Box Start -->
{{--<div class="popup-subscribe-box" id="subscribe-popup">--}}
{{--    <div class="popup-subscribe-box-content">--}}
{{--        <div class="popup-subscribe-box-body">--}}
{{--            <a href="#subscribe-popup" class="popup-close sqr-btn">close</a>--}}
{{--            <h3>NEWSLETTER</h3>--}}
{{--            <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>--}}
{{--            <form class="popup-subscribe-form validate" method="post" id="nl-form">--}}
{{--                <input type="email" id="nl-email" autocomplete="off" placeholder="Your Email address">--}}
{{--                <button class="sqr-btn" id="nl-submit">subscriber</button>--}}
{{--                <div class="form-group text-center custom-checkbox custom-control">--}}
{{--                    <input type="checkbox" name="hide-popup" class="custom-control-input" id="hide-popup">--}}
{{--                    <label for="hide-popup" class="custom-control-label"> Don't show this popup again </label>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <!-- mailchimp-alerts Start -->--}}
{{--            <div class="mailchimp-alerts">--}}
{{--                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->--}}
{{--                <div class="mailchimp-success"></div><!-- mailchimp-success end -->--}}
{{--                <div class="mailchimp-error"></div><!-- mailchimp-error end -->--}}
{{--            </div>--}}
{{--            <!-- mailchimp-alerts end -->--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Popup Subscribe Box End -->

<!-- Scroll to top start -->
<div class="scroll-top not-visible">
    <i class="fa fa-angle-up"></i>
</div>
<!-- Scroll to Top End -->



<!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
<script src="frontend/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- Jquery Min Js -->
<script src="frontend/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Popper Min Js -->
<script src="frontend/js/vendor/popper.min.js"></script>
<!-- Bootstrap Min Js -->
<script src="frontend/js/vendor/bootstrap.min.js"></script>
<!-- Plugins Js-->
<script src="frontend/js/plugins.js"></script>
<!-- Active Js -->
<script src="frontend/js/main.js"></script>
@yield('js')
</body>


<!-- Mirrored from demo.hasthemes.com/melani-v3/melani/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Dec 2020 05:17:38 GMT -->
</html>
