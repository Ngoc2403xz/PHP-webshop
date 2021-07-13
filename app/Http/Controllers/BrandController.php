<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Brand::all();
        return view('backend.brand.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $max_position = Brand::max('position');
        return view('backend.brand.create',
        ['max_position'=>$max_position]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->slug = Str::slug($request->input('name'));
        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // Xóa file cũ đi
            @unlink(public_path($brand->image));
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/brand/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $brand->image = $path_upload.$filename;
        }
        $request->url = $request->input('url');
        $is_active = 0;
        if($request->has('is_active')) {
            $is_active = $request->input('is_active');
        }
        $brand->is_active = $is_active;

        $position = 0;
        if($request->has('position')) {
            $position = $request->input('position');
        }
        $brand->position = $position;
        $brand->save();

        return redirect()->route('admin.brand.index');
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
        // Cách 1: lấy chi tiết brand theo id
        // $banner = Banner::find($id);
        // Cách 2 : Trả về dữa liệu brand (object), nếu ko trả về lỗi
        $data = Brand::findorFail($id);
        return view('backend.brand.edit',['data'=>$data]);
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
        $brand = Brand::findorFail($id);
        $brand->name = $request->input('name');
        $brand->slug = Str::slug($request->input('name'));
        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/brand/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $brand->image = $path_upload.$filename;
        }
        $request->url = $request->input('url');
        $is_active = 0;
        if($request->has('is_active')) {
            $is_active = $request->input('is_active');
        }
        $brand->is_active = $is_active;

        $position = 0;
        if($request->has('position')) {
            $position = $request->input('position');
        }
        $brand->position = $position;
        $brand->save();

        return redirect()->route('admin.brand.index');
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
        $isDelete = Brand::destroy($id);

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
