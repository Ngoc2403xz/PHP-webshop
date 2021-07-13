
@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Thêm mới Brand <a href="{{route('admin.brand.index')}}" class="btn btn-success pull-right"><i class="fa fa-list"></i> Danh Sách</a>
        </h1>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-9">
                <!-- general form elements -->

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin Brand</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('admin.brand.update',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tiêu đề</label>
                                <input  value="{{$data->name}}" type="text" class="form-control" id="name" name="name" placeholder="Nhập tên thương hiệu">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Ảnh mới</label>
                                <input type="file" id="image" name="image">
                                <br>
                                <img src="{{asset($data->image}}" width="250px">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tùy chỉnh liên kết Url</label>
                                <input  value="{{$data->url}}" type="text" class="form-control" id="url" name="url" placeholder="Url">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="is_active" aria-valuemax="{{ ($data->is_active == 1) ? 'checked': ''}}"> Trạng thái hiển thị
                                        </label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vị trí</label>
                                        <input type="number" class="form-control" id="position" name="position" value="{{ $data->position }}">
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
