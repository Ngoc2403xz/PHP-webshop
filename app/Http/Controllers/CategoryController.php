<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // cách 3: lấy toàn bộ dữ liệu dùng hàm  $data=Banner::all();
        $data = Category::all();
        return view('backend.category.index',['data'=>$data]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // lấy toàn bộ dữ liệu
        $category = Category::all();
            // max_position
        $max_position = Category::max('position');
        return view('backend.category.create', [
            'data' => $category,
            'max_position'=>$max_position
        ]);
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
//
        $category = new Category();
        $category->name = $request->input('name');
        $category->parent_id = $request->input('parent_id');
        $category->slug = Str::slug($request->input('name'));

        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/category/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $category->image = $path_upload.$filename;
        }
        // loại
        $category->type = $request->input('type');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        // trạng thái
        $category->is_active = $is_active;
        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');

        }
        $category ->position= $position;
        // lưu
        $category->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('admin.category.index');
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
        $data = Category::all();
        $category = Category::findorFail($id);
        return view('backend.category.edit',[
            'data'=>$category,
            'category'=>$data
        ]);
//        return view('backend.category.edit', [
//            'data' => $data,
//            'category' => $category
//        ]);
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
        $category = Category::findorFail($id);
        $category->name = $request->input('name');

        $category->slug = Str::slug($request->input('name'));

        if ($request->hasFile('new_image')) { // kiểm tra xem có image có đc chọn ko
            // xóa file cũ
            @unlink(public_path($category->image));
            // get file
            $file = $request->file('new_image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/category/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $category->image = $path_upload.$filename;
        }
        $category->parent_id = $request->input('parent_id');
        // loại
        $category->type = $request->input('type');
        // Trạng thái
        $is_active = 0;
        if ($request->has('is_active')) { //Kiểm tra is_active có tồn tại hay ko
            $is_active = $request->input('is_active');
        }
        $category->is_active = $is_active;
        // vị trí
        $position= 0;
        if ($request->has('position')) {
            $position = $request->input('position');
        }
        $category ->position= $position;
        // lưu
        $category->save();
        // chuyển hướng trang về danh sách
        return redirect()->route('admin.category.index');
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
        $isDelete = Category::destroy($id);

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
