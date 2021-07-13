
@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm mới người dùng<a href="{{route('admin.user.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Thêm người dùng</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin người dùng</h3>
                    </div>
                    @if ($errors->any())
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
                    <form role="form" action="{{ route('admin.user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Chọn quyền</label>
                                <select class="form-control" name="role_id">
                                    <option value="0">--chọn--</option>
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Họ tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập thông tin">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Mời nhập email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Mời nhập pass">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh</label>
                                <input type="file" id="avatar" name="avatar">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active">Kích hoạt tài khoản
                                        </label>
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
