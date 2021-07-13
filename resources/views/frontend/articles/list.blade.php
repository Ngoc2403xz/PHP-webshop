@extends('frontend.layouts.main')
@section('articles')
    <!-- page main wrapper start -->
    <main>
        <!-- blog main wrapper start -->
        <div class="blog-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="blog-sidebar-wrapper mt-md-100 mt-sm-58">
                            <div class="blog-sidebar">
                                <div class="sidebar-serch-form">
                                    <form action="#">
                                        <input type="text" class="search-field" placeholder="search here">
                                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h4 class="title">categories</h4>
                                <ul class="blog-archive">
                                    <li><a href="#">Health & beauty (10)</a></li>
                                    <li><a href="#">Makeup (08)</a></li>
                                    <li><a href="#">Skincare (07)</a></li>
                                    <li><a href="#">Jewelry (14)</a></li>
                                    <li><a href="#">fashion (10)</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h4 class="title">Blog Archives</h4>
                                <ul class="blog-archive">
                                    <li><a href="#">January (10)</a></li>
                                    <li><a href="#">February (08)</a></li>
                                    <li><a href="#">March (07)</a></li>
                                    <li><a href="#">April (14)</a></li>
                                    <li><a href="#">May (10)</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h4 class="title">recent post</h4>
                                <div class="popular-item-inner popular-item-inner__style-2">
                                    <div class="popular-item">
                                        <div class="pop-item-thumb">
                                            <a href="blog-details.html">
                                                <img src="frontend/img/product/product-6.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pop-item-des">
                                            <h4><a href="blog-details.html">Arbor Swoon Camber</a></h4>
                                            <span class="pop-price">$50.00</span>
                                        </div>
                                    </div> <!-- end single popular item -->
                                    <div class="popular-item">
                                        <div class="pop-item-thumb">
                                            <a href="blog-details.html">
                                                <img src="frontend/img/product/product-7.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pop-item-des">
                                            <h4><a href="blog-details.html">Arbor Swoon Camber</a></h4>
                                            <span class="pop-price">$50.00</span>
                                        </div>
                                    </div> <!-- end single popular item -->
                                    <div class="popular-item">
                                        <div class="pop-item-thumb">
                                            <a href="blog-details.html">
                                                <img src="frontend/img/product/product-8.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="pop-item-des">
                                            <h4><a href="blog-details.html">Arbor Swoon Camber</a></h4>
                                            <span class="pop-price">$50.00</span>
                                        </div>
                                    </div> <!-- end single popular item -->
                                </div>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h4 class="title">Tags</h4>
                                <ul class="blog-tags">
                                    <li><a href="#">camera</a></li>
                                    <li><a href="#">computer</a></li>
                                    <li><a href="#">watch</a></li>
                                    <li><a href="#">smartphone</a></li>
                                    <li><a href="#">bag</a></li>
                                    <li><a href="#">shoes</a></li>
                                </ul>
                            </div> <!-- single sidebar end -->
                            <div class="blog-sidebar">
                                <h4 class="title">image</h4>
                                <div class="advertising-thumb img-full fix">
                                    <a href="#">
                                        <img src="frontend/img/banner/advertising.jpg" alt="">
                                    </a>
                                </div>
                            </div> <!-- single sidebar end -->
                        </div>
                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="blog-wrapper">
                            <div class="row">
                                @foreach($data as $item)
                                <div class="col-lg-6 col-md-6 col-sm-6">

                                    <div class="blog-item-single">
                                        <article class="blog-post">
                                            <div class="blog-post-content">
                                                <div class="blog-top">
                                                    <div class="post-date-time">
                                                        <span>{{ date('d/m/y',strtotime($item->updated_at)) }} </span>
                                                    </div>
                                                    <div class="post-blog-meta">
                                                        <p>post by <a href="#">HasTech</a></p>
                                                    </div>
                                                </div>
                                                <div class="blog-thumb img-full">
                                                    <a href="blog-details.html">
                                                        <img src="{{asset($item->image)}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="blog-content">
                                                <h4><a href="{{route('shop.getDetailArticle',['slug'=>$item->slug])}}">{{ $item->title }}</a></h4>
                                                <p>{!! $item->summary !!}</p>
                                                <a href="" class="read-more">Read More...</a>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- start pagination area -->
                        <div class="paginatoin-area text-center mt-18">
                            <ul class="pagination-box">
                                <li><a class="Previous" href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"> Next </a></li>
                            </ul>
                        </div>
                        <!-- end pagination area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- blog main wrapper end -->
    </main>
    <!-- page main wrapper end -->
@endsection()
