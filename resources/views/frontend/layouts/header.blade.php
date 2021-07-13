<header>
    <!-- main menu area start -->
    <div class="header-main transparent-menu sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="index.html">
                            <img src="frontend/img/logo/logo.png" alt="Brand logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <div class="main-header-inner">
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="/">Trang chủ <i class="fa fa-angle-down"></i></a></li>
                                    @foreach($menu as $item)
                                        @if($item->parent_id == 0)
                                            <li><a href="{{ route('shop.product',['slug'=>$item->slug]) }}">{{ $item->name }} <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    @foreach($menu as $child)
                                                        @if($child->parent_id == $item->id)
                                                    <li><a href="{{route('shop.product',['slug'=>$child->slug])}}">{{ $child->name }} <i class="fa fa-angle-right"></i></a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                    <li><a href="{{ route('shop.articles') }}">Blog <i class="fa fa-angle-down"></i></a></li>
                                    <li><a href="{{route('shop.contact')}}">Contact us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                    <div class="header-setting-option">
                        <div class="search-wrap">
                            <button type="submit" class="search-trigger" ><i class="ion-ios-search-strong"></i></button>
                        </div>
                        <div class="header-mini-cart">
                            <div class="mini-cart-btn">
                                <a href="{{route('shop.cart')}}"><i class="ion-bag"></i></a>
                                <span class="cart-notification">{{ !empty(session('totalItem')) ? session('totalItem') :0 }}</span>
                            </div>
{{--                            <ul class="cart-list">--}}
{{--                                <li>--}}
{{--                                    <div class="cart-img">--}}
{{--                                        <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"--}}
{{--                                                                            alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-info">--}}
{{--                                        <h4><a href="product-details.html">simple product 09</a></h4>--}}
{{--                                        <span>$60.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="del-icon">--}}
{{--                                        <i class="fa fa-times"></i>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="cart-img">--}}
{{--                                        <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"--}}
{{--                                                                            alt=""></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="cart-info">--}}
{{--                                        <h4><a href="product-details.html">virtual product 10</a></h4>--}}
{{--                                        <span>$50.00</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="del-icon">--}}
{{--                                        <i class="fa fa-times"></i>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li class="mini-cart-price">--}}
{{--                                    <span class="subtotal">subtotal : </span>--}}
{{--                                    <span class="subtotal-price ml-auto">$110.00</span>--}}
{{--                                </li>--}}
{{--                                <li class="checkout-btn">--}}
{{--                                    <a href="#">checkout</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                        <div class="settings-top">
                            <div class="settings-btn">
                                <i class="ion-android-settings"></i>
                            </div>
                            <ul class="settings-list">
                                <li>
                                    English <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li class="active"><a href="#">english</a></li>
                                        <li><a href="#">Français</a></li>
                                        <li><a href="#">Germany</a></li>
                                    </ul>
                                </li>
                                <li>
                                    USD $ <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#"> € Euro</a></li>
                                        <li class="active"><a href="#"> $ US Dollar</a></li>
                                    </ul>
                                </li>
                                <li>
                                    my account <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="#">my account</a></li>
                                        <li><a href="#">login</a></li>
                                        <li><a href="#">register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-block d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- main menu area end -->

    <!-- Start Search Popup -->
    <div class="box-search-content search_active block-bg close__top">
        <form class="minisearch" method="get" action="{{route('shop.search')}}">
            <div class="field__search">
                <input type="text"  name="key" placeholder="Search Our Catalog" value="{{isset($keyword) ? $keyword : ''}}">
                <div class="action">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
        <div class="close__wrap">
            <span>close</span>
        </div>
    </div>
    <!-- End Search Popup -->

</header>
