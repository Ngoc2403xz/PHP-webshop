<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cách 3: lấy toàn bộ dữ liệu dùng hàm  $data=Banner::all();
        $data = Vendor::all();
        return view('backend.vendor.index',['data'=>$data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.vendor.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate ([
           'name'=>'required|string',
           'email'=>'required|email',
           'phone'=>'required|integer',
           'image'=>'required|image',
           'address'=>'required|string'
        ]);
        $vendor = new Vendor();
        $vendor->name = $request->input('name');
        $vendor->slug= Str::slug($request->input('name'));
        $vendor->email = $request->input('email');
        $vendor->phone = $request->input('phone');

        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/vendor/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $vendor->image = $path_upload.$filename;
        }
        // Url
        $vendor->url = $request->input('url');
        // Target
        $vendor->address = $request->input('address');

        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');

        }
        $vendor ->position = $position;
        // Trạng thái

        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        // trạng thái
        $vendor->is_active = $is_active;


        // lưu
        $vendor->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('vendor.index');
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
        $vendor = Vendor::findorFail($id);
        return view('backend.vendor.edit',['data'=>$vendor]);
        //
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
        $vendor = Vendor::findorFail($id);
        $vendor->name = $request->input('name');
        $vendor->slug= Str::slug($request->input('name'));
        $vendor->email = $request->input('email');
        $vendor->phone = $request->input('phone');

        if ($request->hasFile('new_image')) { // kiểm tra xem có image có đc chọn ko
            // xóa file cũa
            @unlink(public_path($vendor->image));
            // tạo file
            $file = $request->file('new_image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/vendor/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // gán giá trị mới cho thuộc tính image của đối tượng
            $vendor->image = $path_upload.$filename;
        }
        // Url
        $vendor->url = $request->input('url');
        // address
        $vendor->address = $request->input('address');

        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');
        }
        $vendor->position= $position;
        // Trạng thái

        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        // trạng thái
        $vendor->is_active = $is_active;
        // lưu
        $vendor->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('vendor.index');
        //
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
        $isDelete = Vendor::destroy($id);

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
