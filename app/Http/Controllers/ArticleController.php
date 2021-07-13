<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Article::all();
        return view('backend.article.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.article.create');
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
        $article = new Article();
        $article ->title = $request->input('title');
        $article ->slug = Str::slug($request->input('title'));
        $article->input = $request->input('url');
        $article->summary = $request->input('summary');
        if ($request->hasFile('image')) { // kiểm tra xem có image có đc chọn ko
            // get file
            $file = $request->file('image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/article/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $article->image = $path_upload.$filename;
        }
        $article->url = $request->input('url');
        $position = 0;
        if($request->has('position')) {
            $position =$request->input('position');

        }
        $article->position =$position;

        $is_active = 0;
        if ($request->has('is_active')) {
            $is_active = $request->input('is_active');
        }
        $article->is_active = $is_active;
        $article->description = $request->input('description');

        $article->save();

        return redirect()->route('admin.article.index');
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
        //
        $data = Article::findorFail($id);
        return view('backend.article.edit',['data'=>$data]);
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
        $article = Article::findorFail($id);
        $article ->title = $request->input('title');
        $article ->slug = Str::slug($request->input('title'));
        $article->input = $request->input('url');
        $article->summary = $request->input('summary');
        if ($request->hasFile('new_image')) { // kiểm tra xem có image có đc chọn ko
            // xóa file
            @unlink(public_path($article->image));
            // get file
            $file = $request->file('new_image');
            // dặt tên cho file image
            $filename = time().'_'.$file->getClientOriginalName(); //tên ban đầu của file
            // Định nghĩa đường dẫn file upload lên
            $path_upload = 'upload/article/'; // uploads/brands
            // thực hiện upload file
            $file->move($path_upload,$filename);
            // lưu lại cái tên
            $article->image = $path_upload.$filename;
        }
        $article->url = $request->input('url');
        $position = 0;
        if($request->has('position')) {
            $position =$request->input('position');

        }
        $article->position =$position;

        $is_active = 0;
        if ($request->has('is_active')) {
            $is_active = $request->input('is_active');
        }
        $article->is_active = $is_active;
        $article->description = $request->input('description');

        $article->save();

        return redirect()->route('admin.article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
