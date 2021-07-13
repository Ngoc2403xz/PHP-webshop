@extends('frontend.layouts.main')
@section('contact')
   <!-- contact wrapper area start -->
<div class="contact-top-area pt-100 pb-98 pt-sm-58 pb-sm-58">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <p>Liên hệ</p>
                    <h2>Liên hệ với chúng tôi</h2>
                </div>
            </div>
        </div> <!-- section title end -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact-single-info mb-30 text-center">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Địa chỉ</h3>
                    <p>{{ $setting->address }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact-single-info mb-30 text-center">
                    <div class="contact-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Số điện thoại</h3>
                    <p>{{ $setting->phone }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact-single-info mb-30 text-center">
                    <div class="contact-icon">
                        <i class="fa fa-fax"></i>
                    </div>
                    <h3>number fax</h3>
                    <p>Fax 1: 0(1234) 567 89012<br>Fax 2: 0(987) 567 890</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="contact-single-info mb-30 text-center">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Địa chỉ mail</h3>
                    <p>Gửi tới:{{ $setting->email }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 col-lg-12 m-auto">
                <h3>gửi liên hệ cho chúng tôi</h3>
                @if (session('msg'))
                    <div class="form-group has-feedback"><a href="#" style="color: orange;">{{ session('msg') }}</a></div>
                @endif
                <div class="contact-message pt-60 pt-sm-20">
                    <form id="contact-form" action="{{route('shop.postContact')}}" method="post" class="contact-form" enctype="multipart/form-data">
                       @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="name" placeholder="Name *" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="phone" placeholder="Phone *" type="text">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input name="email" placeholder="Email *" type="text">
                            </div>
                            <div class="col-12">
                                <div class="contact2-textarea text-center">
                                    <textarea placeholder="Message *" name="content"  class="form-control2" required=""></textarea>
                                </div>
                                <div class="contact-btn text-center">
                                    <button class="check-btn sqr-btn" id="btnSend" type="submit">Send Message</button>
                                </div>
                            </div>
                            <div class="col-12 d-flex justify-content-center">
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact wrapper area end -->
{{--@endsection--}}
{{--@section('script')--}}
{{--    <script>--}}
{{--        $('#btnSend').click(function () {--}}
{{--            $('.contact-form').html('<p>Bạn vừa gửi tin nhắn thành công</p>');--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}
