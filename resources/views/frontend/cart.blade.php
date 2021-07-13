@extends('frontend.layouts.main')
@section('cart')
{{--    <div class="hero-wrap  ">--}}
{{--        <div class="container">--}}
{{--            <div class="row no-gutters slider-text align-items-center justify-content-center">--}}
{{--                <div class="col-md-9 ftco-animate text-center">--}}
{{--                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span>--}}
{{--                        <span>Giỏ hàng</span></p>--}}
{{--                    <h1 class="mb-0 bread">My Cart</h1>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div >
        @include('frontend.components.cart');
    </div>
@endsection
