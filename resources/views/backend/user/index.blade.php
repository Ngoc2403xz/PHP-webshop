@extends('backend.layouts.main')

@section('content')
    <section class="content-header">
        <h1>
            Bảng thống kê User
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Thông tin chi tiết User</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>TT</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>avatar</th>
                                <th>Phân quyền</th>
                                <th>Trạng thái</th>
                                <th class="text-center">Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key =>$item)
                                <tr class="item-{{ $item->id }}">
                                    <td>{{ $key+1}}</td>
                                    <td>{{ $item->name}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>
                                        @if ($item->image)  <!-- Kiểm tra hình ảnh có tông tại hay ko-->
                                        <img src="{{$item->image}} " width="50" height="50">
                                        @endif
                                    </td>
                                    <td>{{ $item->role_id}}</td>
                                    <td>{{ ($item->is_active ==1) ? 'Hiển thị' :'Ẩn'}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.user.edit',['id'=>$item->id]) }}" class="btn bg-purple btn-flat margin">
                                            <i class="fa fa-pencil-square-o"></i>
                                        </a>
                                        <button  onclick="deleteItem('user',{{$item->id}} )" class="btn btn-danger"><i class="fa fa-trash-o"></i> </button>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@section('script')
    <script>
        $(function () {
            $('#example1').DataTable();
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
@endsection
