<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cách 1:  lấy dữ liệu phân trang-- mỗi trang 10 bản ghi //
        // $data = Banner::paginate(10);
        // cách 2:  lấy dữ liệu mới nhất và phân trang-- mỗi trang 10 bản ghi //
        // $data = Banner::latest()->paginate(10);
        // cách 3: lấy toàn bộ dữ liệu dùng hàm  $data=Banner::all();

        $data = Banner::all();

        return view('backend.banner.index',['data' =>$data]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate ([
            'title'=> 'required|string|max:255',
            'image'=> 'required|image',
            'position'=> 'required|integer'

        ]);
        $banner = new Banner();
        $banner->title = $request->input('title');

        $banner->slug = Str::slug($request->input('title'));

        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/banner/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $banner->image = $path_upload.$filename;
        }
        // Url
        $banner->url = $request->input('url');
        // Target
        $banner->target = $request->input('target');
        // loại
        $banner->type = $request->input('type');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        // trạng thái
        $banner->is_active = $is_active;
        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');

        }
        $banner ->position= $position;
        // Mô tả
        $banner->description = $request->input('description');
        // lưu
        $banner->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Cách 1: lấy chi tiết banner theo id
        // $banner = Banner::find($id);
        // Cách 2 : Trả về dữa liệu banner (object), nếu ko trả về lỗi
        $banner = Banner::findorFail($id);

        return view('backend.banner.edit',['data'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
       $banner = Banner::findorFail($id);// tìm đến thuộc tính cần sửa thông qua biến id

        $banner->title = $request->input('title');

        $banner->slug = Str::slug($request->input('title'));

        if ($request->hasFile('new_image')) { // kiểm tra xem có image có đc chọn ko
            // Xóa file cũ đi
            @unlink(public_path($banner->image));
            // get new image
            $file = $request->file('new_image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/banner/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // Gán giá trị ảnh mới cho thuộc tính iamge của đối tượng
            $banner->image = $path_upload.$filename;
        }
        // Url
        $banner->url = $request->input('url');
        // Target
        $banner->target = $request->input('target');
        // loại
        $banner->type = $request->input('type');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        // trạng thái
        $banner->is_active = $is_active;
        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');

        }
        $banner ->position= $position;
        // Mô tả
        $banner->description = $request->input('description');
        // lưu
        $banner->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('admin.banner.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // gọi tới hàm destroy của laravel để xóa 1 object
        // DELETE FROM ten_bang WHERE id = 33 -> execute command
        $isDelete = Banner::destroy($id);

        if ($isDelete) { // xóa thành công
            $statusCode = 200;
            $isSuccess = true;
        } else {
            $statusCode = 400;
            $isSuccess = false;
        }

        // Trả về dữ liệu json và trạng thái kèm theo thành công là 200
        return response()->json([
            'isSuccess' => $isSuccess
        ], $statusCode);
    }
}
