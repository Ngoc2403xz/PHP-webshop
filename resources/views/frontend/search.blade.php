@extends('frontend.layouts.main')
@section('search')
    <!-- featured product area start -->
    <div class="page-section pt-100 pb-14 pt-sm-60 pb-sm-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center pb-44">
                        <p>Từ khóa tìm kiếm "{{$keyword}}" Tìm Thấy ({{ count($products) }})</p>
                    </div>
                </div>
            </div>

            <div class="row product-carousel-one spt slick-arrow-style" data-row="2">
                @foreach($products as $item)
                    <div class="col">
                        <div class="product-item mb-20">
                            <div class="product-thumb">
                                <a href="{{ route('shop.productDetails',['slug'=>$item->slug,'id'=>$item->id]) }}">
                                        <img src="{{ asset($item->image) }}" alt="product image">
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
                                    <h3><a href="{{ route('shop.productDetails',['slug'=>$item->slug,'id'=>$item->id]) }}">{{$item->name}}</a></h3>
                                </div>
                                <div class="price-box">
                                    <span class="regular-price">{{ number_format($item->sale,0,",",".") }}đ</span>
                                    <span class="old-price"><del>{{ number_format($item->price,0,",",".") }}đ</del></span>
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
{{--            {{$products->links()}}--}}
        </div>
    </div>
    <!-- featured product area end -->



@endsection
