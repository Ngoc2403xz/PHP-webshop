@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Sửa nhà cung cấp <a href="{{route('admin.vendor.index')}}" class="btn btn-success pull-right"><i
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
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.vendor.update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                <input  type="text" class="form-control" id="name" name="name" value="{{$data->name}}"
                                       placeholder="Nhập tên tiêu đề">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input  value="{{$data->email}}" type="email" class="form-control" id="email" name="email"
                                               placeholder="Nhập email nhà cung cấp">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số điện thoại</label>
                                        <input  value="{{$data->phone}}" type="text" class="form-control" id="phone" name="phone"
                                               placeholder="Nhập số điện thoại">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Thay đổi ảnh</label>
                                <input type="file" id="new_image" name="new_image">
                                <br>
                                <img src="{{asset($data->new_iamge)}}" width="250">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website</label>
                                <input  value="{{$data->url}}" type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Địa chỉ </label>
                                <input  value="{{$data->address}}"  type="text" class="form-control" id="address" name="address"
                                       placeholder="nhập address">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Vị trí</label>
                                            <input type="number" class="form-control" id="position" name="position"
                                                   value="{{$data->position}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="is_active"{{($data->is_active == 1) ? 'checked':''}}> Trạng thái hiển thị
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">sửa</button>
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

<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
{{--create.blade.php--}}
{{--Đang hiển thị create.blade.php.--}}
