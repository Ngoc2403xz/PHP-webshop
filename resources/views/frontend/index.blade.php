@extends('frontend.layouts.main')
@section('content')
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
        @foreach($banners as $banner)
        <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url({{ asset($banner->image) }});">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-content">
                            <h1>products that glow <br>as much <span>as you do</span></h1>
                            <h3>Super creamy under eye concealers</h3>
                            <a href="#" class="slider-btn">Xem thêm sản phẩm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- slider area end -->

<!-- banner statistics 01 start -->
{{--<div class="banner-statistic-one bg-gray pt-100 pb-100 pt-sm-58 pb-sm-58">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col1 col-sm-6">--}}
{{--                <div class="img-container img-full fix">--}}
{{--                    <a href="#">--}}
{{--                        <img src="frontend/img/banner/banner-1.jpg" alt="banner image">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col2 col-sm-6">--}}
{{--                <div class="img-container img-full fix">--}}
{{--                    <a href="#">--}}
{{--                        <img src="frontend/img/banner/banner-2.jpg" alt="banner image">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col3 col">--}}
{{--                <div class="img-container img-full fix mb-30">--}}
{{--                    <a href="#">--}}
{{--                        <img src="frontend/img/banner/banner-3.jpg" alt="banner image">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="img-container img-full fix">--}}
{{--                    <a href="#">--}}
{{--                        <img src="frontend/img/banner/banner-4.jpg" alt="banner image">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- banner statistics 01 end -->

<!-- featured product area start -->
<div class="page-section pt-100 pb-14 pt-sm-60 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <h2>Sản phẩm bán chạy nhất</h2>
                </div>
            </div>
        </div>

        <div class="row product-carousel-one spt slick-arrow-style" data-row="2">
            @foreach($hotProducts as $product)
            <div class="col">
                <div class="product-item mb-20">
                    <div class="product-thumb">
                        <a href="{{ route('shop.productDetails',['slug'=>$product->slug,'id'=>$product->id]) }}">
                            @if($product->image)
                            <img src="{{ asset($product->image) }}" alt="product image">
                            @else
                                <img src="{{ asset('found not') }}" alt="product image">

                                @endif
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
                        <div class="product-name">
                            <h3><a href="{{ route('shop.productDetails',['slug'=>$product->slug,'id'=>$product->id]) }}">{{$product->name}}</a></h3>
                        </div>
                        <div class="price-box">
                            <span class="regular-price">{{ number_format($product->sale,0,",",".") }} đ</span>
                            <span class="old-price"><del>{{ number_format($product->price,0,",",".") }} đ</del></span>
                        </div>
                        <div class="product-btn">
                            <a href="#"><i class="ion-bag"></i>Add to cart</a>
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
            </div>
            @endforeach
        </div>

    </div>
</div>
<!-- featured product area end -->

<!-- block container start -->
<div class="page-section  bg-gray-light">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="block-container-banner img-full fix">
                    <a href="#">
                        <img src="frontend/img/banner/block-container.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="bloc-container-inner text-center pt-sm-54 pb-sm-60">
                    <h2>New Fragrances</h2>
                    <p>Diverse variety of perfumes from top brands at the discount prices</p>
                    <a href="shop-grid-left-sidebar.html">SHOP PERFUMES</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- block container end -->

<!-- banner feature start -->
<div class="banner-feature-area bg-navy-blue pt-62 pb-60 pt-sm-56 pb-sm-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-paper-airplane"></i>
                    <h4>FREE SHIPPING & DELIVERY</h4>
                    <p>We’re one of the furniture online retailers, who offer free of charge delivery</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-ios-time-outline"></i>
                    <h4>365-DAY HOME TRIAL</h4>
                    <p>Our unique return policy will allow you to return furniture for almost a year</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-trophy"></i>
                    <h4>LIFETIME WARRANTY</h4>
                    <p>Purchasing furniture with us comes with warranty, than anyone else offers!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner feature end -->

<!-- feature category area start -->
<div class="feature-category-area pt-96 pb-14 pt-md-114 pt-sm-54 pb-sm-0">
    <div class="container">
        @foreach($list as $item)
        <div class="row">
            <div class="col-12">
                <div class="tab-menu-one mb-58">
                    <ul class="nav justify-content-center">
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_one">{{ $item['category']->name}}</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="tab_one">
                        <div class="row feature-category-carousel slick-arrow-style spt">
                            @foreach($item['products'] as $product)
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="{{ route('shop.productDetails',['slug'=>$product->slug,'id'=>$product->id]) }}">
                                            @if($product->image)
                                            <img src="{{asset($product->image)}}" alt="product image">
                                            @endif
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
                                        <div class="product-name">
                                            <h3><a href="{{ route('shop.productDetails',['slug'=>$product->slug,'id'=>$product->id]) }}">{{$product->name}}</a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">{{ number_format($product->price,0,",",".") }} đ</span>
                                            <span class="old-price"><del>{{ number_format($product->sale,0,",",".") }} đ</del></span>
                                        </div>
                                        <div class="product-btn">
                                            <a href="#"><i class="ion-bag"></i>Add to cart</a>
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
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- feature category area end -->

<!-- hot deals section start -->
{{--<div class="hot-deals-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <div class="col-xl-6 col-lg-7 col-md-6 ml-auto">--}}
{{--                <div class="countdown-area">--}}
{{--                    <div class="deals-title pb-30">--}}
{{--                        <h3>Daily Deals</h3>--}}
{{--                        <h5>Deals <span>30%</span> for all Jackets Products</h5>--}}
{{--                    </div>--}}
{{--                    <div class="row deals-slider-active slider-arrow-style spt">--}}
{{--                        <div class="col">--}}
{{--                            <div class="product-item mb-20">--}}
{{--                                <div class="product-countdown" data-countdown="2019/04/20"></div>--}}
{{--                                <div class="product-thumb">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img src="frontend/img/product/product-1.jpg" alt="product image">--}}
{{--                                    </a>--}}
{{--                                    <div class="box-label">--}}
{{--                                        <div class="product-label new">--}}
{{--                                            <span>new</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-label discount">--}}
{{--                                            <span>-5%</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-link">--}}
{{--                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span--}}
{{--                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i--}}
{{--                                                class="ion-ios-loop"></i></a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i--}}
{{--                                                class="ion-ios-shuffle"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-description white-bg text-center">--}}
{{--                                    <div class="manufacturer">--}}
{{--                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-name">--}}
{{--                                        <h3><a href="product-details.html">Endeavor Daytrip</a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="price-box">--}}
{{--                                        <span class="regular-price">$100.00</span>--}}
{{--                                        <span class="old-price"><del>$120.00</del></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-box text-center">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <div class="product-item mb-20">--}}
{{--                                <div class="product-countdown" data-countdown="2019/04/20"></div>--}}
{{--                                <div class="product-thumb">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img src="frontend/img/product/product-2.jpg" alt="product image">--}}
{{--                                    </a>--}}
{{--                                    <div class="box-label">--}}
{{--                                        <div class="product-label new">--}}
{{--                                            <span>new</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-label discount">--}}
{{--                                            <span>-5%</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-link">--}}
{{--                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span--}}
{{--                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i--}}
{{--                                                class="ion-ios-loop"></i></a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i--}}
{{--                                                class="ion-ios-shuffle"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-description white-bg text-center">--}}
{{--                                    <div class="manufacturer">--}}
{{--                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-name">--}}
{{--                                        <h3><a href="product-details.html">Endeavor Daytrip</a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="price-box">--}}
{{--                                        <span class="regular-price">$100.00</span>--}}
{{--                                        <span class="old-price"><del>$120.00</del></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-box text-center">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col">--}}
{{--                            <div class="product-item mb-20">--}}
{{--                                <div class="product-countdown" data-countdown="2019/04/20"></div>--}}
{{--                                <div class="product-thumb">--}}
{{--                                    <a href="product-details.html">--}}
{{--                                        <img src="frontend/img/product/product-3.jpg" alt="product image">--}}
{{--                                    </a>--}}
{{--                                    <div class="box-label">--}}
{{--                                        <div class="product-label new">--}}
{{--                                            <span>new</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="product-label discount">--}}
{{--                                            <span>-5%</span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-action-link">--}}
{{--                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span--}}
{{--                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i--}}
{{--                                                class="ion-ios-loop"></i></a>--}}
{{--                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i--}}
{{--                                                class="ion-ios-shuffle"></i></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="product-description white-bg text-center">--}}
{{--                                    <div class="manufacturer">--}}
{{--                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-name">--}}
{{--                                        <h3><a href="product-details.html">Endeavor Daytrip</a></h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="price-box">--}}
{{--                                        <span class="regular-price">$100.00</span>--}}
{{--                                        <span class="old-price"><del>$120.00</del></span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-btn">--}}
{{--                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="hover-box text-center">--}}
{{--                                        <div class="ratings">--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                            <span><i class="fa fa-star"></i></span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- hot deals section end -->

<!-- banner statistics 02 start -->
<div class="banner-statistic-two pt-100 pt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content-inner overlay text-center banner-1">
                    <div class="banner-content">
                        <h2>perfect rougue</h2>
                        <p>wrap your lips in luxurious moisture</p>
                        <a href="#" class="sqr-btn">view details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner statistics 02 end -->

<!-- latest blog area start -->
<div class="latest-blog-area pt-100 pb-90 pt-sm-58 pb-sm-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <p>New our blogs</p>
                    <h2>From the blog</h2>
                </div>
            </div>
        </div>
        <div class="blog-carousel-active row slick-arrow-style">
            @foreach($data as $item)
            <div class="col">
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>{{ date('d/m/y',strtotime($item->updated_at)) }} </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="{{ route('shop.getDetailArticle',['slug',$item->slug]) }}">
                                    <img src="{{asset($item->image)}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="{{ route('shop.getDetailArticle',['slug',$item->slug]) }}">{{ $item->title }}</a></h4>
                            <p>
                                {!! $item->summary !!}
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- latest blog area end -->
@endsection()
