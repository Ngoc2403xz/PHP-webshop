@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm nhà cung cấp <a href="{{route('admin.vendor.index')}}" class="btn btn-success pull-right"><i
                    class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin nhà cung cấp</h3>
                    </div> @if ($errors->any())
                        <div class="alert alert-danger">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h4><i class="icon fa fa-ban"></i> Lỗi!</h4>
                            </div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                @endforeach
                            </ul>
                        </div>
                @endif

                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.vendor.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                <input type="text" class="form-control" id="name" name="name"
                                       placeholder="Nhập tên tiêu đề">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                               placeholder="Nhập email nhà cung cấp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số điện thoại</label>
                                        <input type="text" class="form-control" id="phone" name="phone"
                                               placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="image" name="image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website</label>
                                <input type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ </label>
                                <input type="text" class="form-control" id="address" name="address"
                                       placeholder="nhập address">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Vị trí</label>
                                            <input type="number" class="form-control" id="position" name="position"
                                                   value="0">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="is_active"> Trạng thái hiển thị
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tạo</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->


            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </section>
@endsection


{{--create.blade.php--}}
{{--Đang hiển thị create.blade.php.--}}
