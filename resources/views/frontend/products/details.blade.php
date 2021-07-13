@extends('frontend.layouts.main')
@section('product-details')
<div class="product-details-wrapper pt-100 pb-14 pt-sm-58">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- product details inner end -->
                <div class="product-details-inner">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                <div class="pro-large-img img-zoom" id="img1">
                                    <img src="{{asset($product->image)}}" alt="" />
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
                        <div class="col-lg-7">
                            <div class="product-details-des pt-md-98 pt-sm-58">
                                <h3><a href="{{route('shop.productDetails',['slug'=>$product->slug,'id'=>$product->id])}}" {{$product->name}}</h3>
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
                                    <span class="regular-price">{{number_format($product->sale,0,",",".")}} đ</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                    Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris consequat nisi ut mauris efficitur lacinia.</p>
                                <div class="quantity-cart-box d-flex align-items-center mb-24">
                                    <div class="quantity">
                                        <div class="pro-qty"><input type="text" value="1"></div>
                                    </div>
                                    <div class="product-btn product-btn__color">
                                        <a href="{{ route('shop.cart.add-to-cart',['id'=>$product->id]) }}"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                </div>
                                <div class="availability mb-20">
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
                <!-- product details reviews start -->
                <div class="product-details-reviews pt-98 pt-sm-58">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-review-info">
                                <ul class="nav review-tab">
                                    <li>
                                        <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_two">information</a>
                                    </li>
                                    <li>
                                        <a data-toggle="tab" href="#tab_three">reviews</a>
                                    </li>
                                </ul>
                                <div class="tab-content reviews-tab">
                                    <div class="tab-pane fade show active" id="tab_one">
                                        <div class="tab-one">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque.</p>
                                            <div class="review-description">
                                                <div class="tab-thumb">
                                                    <img src="frontend/img/about/services.jpg" alt="">
                                                </div>
                                                <div class="tab-des mt-sm-20">
                                                    <h3>Product Information :</h3>
                                                    <ul>
                                                        <li>Donec non est at libero vulputate rutrum.</li>
                                                        <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                        <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                        <li>Donec a neque libero.</li>
                                                        <li>Pellentesque aliquet, sem eget laoreet ultrices</li>
                                                        <li>Morbi ornare lectus quis justo gravida semper.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <p>Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue. Nunc facilisis sagittis ullamcorper.</p>
                                            <p>Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab_two">
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>color</td>
                                                <td>black, blue, red</td>
                                            </tr>
                                            <tr>
                                                <td>size</td>
                                                <td>L, M, S</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="tab_three">
                                        <form action="#" class="review-form">
                                            <h5>1 review for <span>Chaz Kangeroo Hoodies</span></h5>
                                            <div class="total-reviews">
                                                <div class="rev-avatar">
                                                    <img src="frontend/img/about/avatar.jpg" alt="">
                                                </div>
                                                <div class="review-box">
                                                    <div class="ratings">
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span class="good"><i class="fa fa-star"></i></span>
                                                        <span><i class="fa fa-star"></i></span>
                                                    </div>
                                                    <div class="post-author">
                                                        <p><span>admin -</span> 30 Nov, 2018</p>
                                                    </div>
                                                    <p>Aliquam fringilla euismod risus ac bibendum. Sed sit amet sem varius ante feugiat lacinia. Nunc ipsum nulla, vulputate ut venenatis vitae, malesuada ut mi. Quisque iaculis, dui congue placerat pretium, augue erat accumsan lacus</p>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Email</label>
                                                    <input type="email" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                    <textarea class="form-control" required></textarea>
                                                    <div class="help-block pt-10"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                                    &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                    <input type="radio" value="1" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="2" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="3" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="4" name="rating">
                                                    &nbsp;
                                                    <input type="radio" value="5" name="rating" checked>
                                                    &nbsp;Good
                                                </div>
                                            </div>
                                            <div class="buttons">
                                                <button class="sqr-btn" type="submit">Continue</button>
                                            </div>
                                        </form> <!-- end of review-form -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product details reviews end -->
                <!-- featured product area start -->
                <div class="page-section pt-100 pt-sm-58">
                    <div class="section-title text-center pb-44">
                        <h2>Sản phẩm liên quan</h2>
                    </div>
                    <div class="releted-product spt slick-padding slick-arrow-style">
                        @foreach($relatedProducts as $product)
                        <div class="product-item mb-20">
                            <div class="product-thumb">
                                <a href="product-details.html">
                                    <img src="{{ asset($product->image) }}" alt="product image">
                                </a>
                                <div class="box-label">
                                    <div class="product-label new">
                                        <span>new</span>
                                    </div>
                                    <div class="product-label discount">
                                        <span>-5%</span>
                                    </div>
                                </div>
                                <div class="product-action-link">
                                    <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="ion-ios-loop"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="ion-ios-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-description text-center">
                                <div class="manufacturer">
                                    <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                </div>
                                <div class="product-name">
                                    <h3><a href="product-details.html">{{ $product->name }}</a></h3>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">{{number_format($product->sale,0,",",".")}} đ</span>
                                    <span class="old-price"><del>{{number_format($product->price,0,",",".")}} đ</del></span>
                                </div>
                                <div class="product-btn">
                                    <a href=""><i class="ion-bag"></i>Add to cart</a>
                                </div>
                                <div class="hover-box text-center">
                                    <div class="ratings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- featured product area end -->
            </div>
            <div class="col-lg-3">
                <div class="sidebar-wrapper pt-md-16 pb-md-86 pb-sm-44">
                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>shop</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="sidebar-category">
                                <li><a href="#">health & beauty</a>
                                    <ul class="children">
                                        <li><a href="#">skateboard</a></li>
                                        <li><a href="#">surfboard</a></li>
                                        <li><a href="#">accessories</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">makeup</a>
                                    <ul class="children">
                                        <li><a href="#">Samsome</a></li>
                                        <li><a href="#">GL Stylus</a></li>
                                        <li><a href="#">Uawei</a></li>
                                        <li><a href="#">Cherry Berry</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">skincare</a>
                                    <ul class="children">
                                        <li><a href="#">Power Bank</a></li>
                                        <li><a href="#">Data Cable</a></li>
                                        <li><a href="#">Power Cable</a></li>
                                        <li><a href="#">Battery</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">jewelry</a>
                                    <ul class="children">
                                        <li><a href="#">Desktop Headphone</a></li>
                                        <li><a href="#">Mobile Headphone</a></li>
                                        <li><a href="#">Wireless Headphone</a></li>
                                        <li><a href="#">LED Headphone</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>category</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="price-container">
                                <li class="active">
                                    <label class="checkbox-container">
                                        Health (10)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-container">
                                        beauty (16)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-container">
                                        makeup (10)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="checkbox-container">
                                        skincare (9)
                                        <input type="checkbox" name="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>price</h3>
                        </div>
                        <div class="sidebar-body">
                            <ul class="price-container">
                                <li class="active">
                                    <label class="radio-container">
                                        $20.00 - $21.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-container">
                                        $26.00 - $30.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-container">
                                        $48.00 - $50.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-container">
                                        $100.00 - $200.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio-container">
                                        $200.00 - $500.00
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <h3>featured</h3>
                        </div>
                        <div class="sidebar-body">
                            <div class="popular-item-inner popular-item-inner__style-2">
                                <div class="popular-item">
                                    <div class="pop-item-thumb">
                                        <a href="product-details.hrtml">
                                            <img src="frontend/img/product/product-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pop-item-des">
                                        <h4><a href="product-details.html">Arbor Swoon Camber</a></h4>
                                        <span class="pop-price">$50.00</span>
                                    </div>
                                </div> <!-- end single popular item -->
                                <div class="popular-item">
                                    <div class="pop-item-thumb">
                                        <a href="product-details.hrtml">
                                            <img src="frontend/img/product/product-7.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pop-item-des">
                                        <h4><a href="product-details.html">Arbor Swoon Camber</a></h4>
                                        <span class="pop-price">$50.00</span>
                                    </div>
                                </div> <!-- end single popular item -->
                                <div class="popular-item">
                                    <div class="pop-item-thumb">
                                        <a href="product-details.hrtml">
                                            <img src="frontend/img/product/product-8.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="pop-item-des">
                                        <h4><a href="product-details.html">Arbor Swoon Camber</a></h4>
                                        <span class="pop-price">$50.00</span>
                                    </div>
                                </div> <!-- end single popular item -->
                            </div>
                        </div>
                    </div>
                    <!-- single sidebar end -->

                    <!-- single sidebar start -->
                    <div class="sidebar-single">
                        <div class="advertising-thumb img-full fix">
                            <a href="#">
                                <img src="frontend/img/banner/advertising.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- single sidebar end -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
