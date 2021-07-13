<?php

namespace App\Http\Controllers;

use App\Category;
use App\Setting;
use Illuminate\Http\Request;
class GeneralController extends Controller
{
    protected $categories;
    public function __construct()
    {
        // danh mục
        $menu = Category::where(['is_active' => 1,])->orderBy('position','ASC')
            ->orderBy('id','DESC')->get();
        // setting thông tin cấu hình
        $setting = Setting::first();

        // chia sẻ qua các layout
        view()->share([
            'setting'=> $setting,
            'menu'=> $menu
        ]);
    }
}
