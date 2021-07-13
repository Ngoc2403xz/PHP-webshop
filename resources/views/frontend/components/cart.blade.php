@extends('frontend.layouts.main')
@section('cart')
    <style>
        .update h6{
            margin-top: 10px;
        }
    </style>
<!-- breadcrumb area start -->
{{--<div class="breadcrumb-area">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <div class="breadcrumb-wrap">--}}
{{--                    <nav aria-label="breadcrumb">--}}
{{--                        <ul class="breadcrumb">--}}
{{--                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>--}}
{{--                            <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">cart</li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<div id="my-cart">
    <main>
        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail">Hình ảnh</th>
                                    <th class="pro-title">Tên sản phẩm</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Thành tiền</th>
                                    <th class="pro-remove">Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $item)
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="{{ asset($item->options->image) }}"
                                                                                   alt="Product"/></a></td>
                                        <td class="pro-title"><a href="#">{{ $item->name }}</a></td>
                                        <td class="pro-price" name="price"><span>{{ number_format($item->price ,0,",",".") }} đ</span></td>
                                        <td class="pro-quantity quantity">
                                            <div class="pro-qty" name="qty">
                                                <input class="quantity item-qty" type="text" value="{{ $item->qty }}">
                                            </div>
                                            <div class="pro-quantity update">
                                                    <a data-id="{{ $item->rowId }}" href="javascript:void(0)" class="update-qty "><h6>Cập nhật</h6></a>


                                            </div>
                                        </td>

                                        <td class="pro-subtotal"><span>{{ number_format($item->qty * $item->price ,0,",",".") }} đ</span></td>
                                        <td class="pro-remove"><a  class="remove-to-cart" data-id="{{ $item->rowId }}" href="javascript:void(0)"><i class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                @endforeach
                                <!-- Dòng tổng -->
                                <tr class="text-center">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Thành tiền :</td>
                                    <td class="pro-subtotal font-weight-bold">{{ $totalPrice }} đ</td>
                                </tr><!-- END TR-->
                                </tbody>
                            </table>
                        </div>
                        <!-- Cart Update Option -->
{{--                        <div class="cart-update-option d-block d-md-flex justify-content-between">--}}
{{--                            <div class="apply-coupon-wrapper">--}}
{{--                                <form action="#" method="post" class=" d-block d-md-flex">--}}
{{--                                    <input type="text" placeholder="Enter Your Coupon Code" required />--}}
{{--                                    <button class="sqr-btn">Mã giảm giá</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                            <div class="cart-update mt-sm-16">--}}
{{--                                <a href="#" class="sqr-btn">Update Cart</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="row" style="margin-top: 15px">
                            <div class="col-md-12">
                                <p>
                                    <a href="{{ route('shop.cart.destroy') }}" class="btn btn-danger py-2 px-2 m-l-2">
                                        <i class="icon-remove"></i> Hủy Đơn Hàng
                                    </a>
                                    <a href="/" class="btn btn-success py-2 px-2 m-l-2">
                                        <i class="icon-remove"></i> Tiếp tục mua hàng
                                    </a>
                                    <a href="{{ route('shop.cart.order') }}" class="btn btn-warning py-2 px-2 "style="float: right">
                                        <i class="icon-long-arrow-right"></i>Tiến Hành Đặt hàng
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Thanh toán</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Tạm tính</td>
                                            <td>{{ $totalPrice }}</td>
                                        </tr>

                                        <tr class="total">
                                            <td>Tổng đơn hàng</td>
                                            <td class="total-amount">{{ $totalPrice }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('shop.cart.order') }}" class="sqr-btn d-block">Đặt hàng</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->
    </main>
</div>


<!-- page main wrapper end -->
@endsection()
@section('js')
    <script type="text/javascript">
        $(function () {
            // xóa sản phẩm khỏi giỏ hàng
            $(document).on("click", '.remove-to-cart', function () {
                var result = confirm("Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng ?");
                if (result) {
                    var product_id = $(this).attr('data-id');
                    $.ajax({
                        url: '/gio-hang/xoa-sp-gio-hang/' + product_id,
                        type: 'get',
                        data: {
                            id: product_id
                        }, // dữ liệu truyền sang nếu có
                        dataType: "HTML", // kiểu dữ liệu trả về
                        success: function (response) {
                            $('#my-cart').html(response);
                        },
                        error: function (e) { // lỗi nếu có
                            console.log(e.message);
                        }
                    });
                }
            });

            // cập nhật số lượng của từng sản phẩm trong giỏ hàng
            $(document).on("click", '.update-qty', function (e) {
                var rowId = $(this).attr('data-id');
                var qty = $(this).closest('.quantity').find('.item-qty').val(); // lấy số lượng của ô input

                // Kiểm tra Nếu không phải là số nguyên Hoặc số lượng < 1
                if (isNaN(qty) || qty < 1) {
                    alert("Số lượng là số nguyên lớn hơn >= 1");
                    $(this).closest('.quantity').find('.item-qty').val(1);
                    return false;
                }

                $.ajax({
                    url: '/gio-hang/cap-nhat-so-luong-sp',
                    type: 'get',
                    data: {
                        rowId: rowId,
                        qty: qty
                    }, // dữ liệu truyền sang nếu có
                    dataType: "HTML", // kiểu dữ liệu trả về
                    success: function (response) {
                        if (response != false) {
                            $('#my-cart').html(response);
                        }
                    },
                    error: function (e) { // lỗi nếu có
                        console.log(e.message);
                    }
                });
            });
        })
    </script>
@endsection

{{--@else--}}
{{--    <style>--}}
{{--        .buyother {--}}
{{--            display: block;--}}
{{--            overflow: hidden;--}}
{{--            background: #fff;--}}
{{--            line-height: 40px;--}}
{{--            text-align: center;--}}
{{--            margin: 15px auto;--}}
{{--            width: 300px;--}}
{{--            font-size: 14px;--}}
{{--            color: #82ae46;--}}
{{--            font-weight: 700;--}}
{{--            text-transform: uppercase;--}}
{{--            border: 2px solid #82ae46;--}}
{{--            border-radius: 5px;--}}
{{--        }--}}
{{--    </style><br>--}}
{{--    <h3 class="text-center"><i class="fa fa-opencart"></i>Bạn chưa có sản phẩm nào trong giỏ hàng</h3>--}}
{{--    <a href="/" class="buyother"><i class="fa fa-chevron-left"></i> Về trang chủ</a>--}}
{{--@endif--}}
