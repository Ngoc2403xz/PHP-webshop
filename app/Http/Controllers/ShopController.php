<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\Category;
use App\Contact;
use App\Product;
use App\Setting;
use Cart;
use Illuminate\Http\Request;

class ShopController extends GeneralController
{
    public function index()
    {
        // lấy blog
        $data = Article::where(['is_active' => 1,
        ])->orderBy('position','ASC')->orderBy('id','DESC')
            ->limit(3)
            ->get();
        // lấy ra Banner
        $banners = Banner::where('is_active', 1)->orderBy('position', 'ASC')
            ->orderBy('id', 'DESC')->get();


        // steps 1
        // Box sản phẩm hot
        $hotProducts = Product::where(['is_active' => 1, 'is_hot' => 1])
            ->limit(8)
            ->orderBy('id', 'desc')
            ->get();

        // step 1 - lấy toàn bộ danh mục cha
        $categories = Category::where([
            'is_active' => 1,
            'parent_id' => 0 // danh mục cha
        ])->orderBy('position', 'ASC')->get();

        $arr = [];

        // step 2 lấy tất cả danh mục con theo danh mục cha
        foreach ($categories as $key => $category) {

            $arr[$key]['category'] = $category;

            $ids = [$category->id]; // [1]

            $childCategories = Category::where([
                'is_active' => 1,
                'parent_id' => $category->id // danh mục cha
            ])->get();

            foreach ($childCategories as $child) {
                $ids[] = $child->id; // thêm các phần tử vào mảng
            } // $ids = 7,8,9,11..

            // ids = 1,7,8,9,11,... : toàn bộ id của dạnh mục cha + con


            $products = Product::where(['is_active' => 1])
                ->whereIn('category_id', $ids)
                ->limit(8)
                ->orderBy('id', 'desc')
                ->get();
            $arr[$key]['products'] = $products;

        }
        return view('frontend.index', [
            'banners' => $banners,
            'list' => $arr,
            'hotProducts' => $hotProducts,
            'data'=>$data
        ]);
    }

    public function contact()
    {
        return view('frontend.contact');

    }

    public function postContact(Request $request)
    {
        // validate
//            $request->validate([
//                'name'=>'required|name',
//                'phone'=>'required|phone',
//                'email'=>'required|email',
//                'content'=>'required'
//
//            ]);

        //
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->content = $request->input('content');
        $contact->save();
        return redirect()->route('shop.contact')->with('msg', 'Bạn đã gửi thành công');
    }

    public function getArticles()
    {
        $data = Article::where(['is_active' => 1,
            ])->orderBy('position','ASC')->orderBy('id','DESC')->get();
        return view('frontend.articles.list',[
            'data'=> $data
        ]);
    }

    public function getDetailArticle($slug)
    {
        $blogDetails = Article::where(['is_active'=> 1,'slug'=>$slug])->first();

        $related_posts = Article::where([['slug','<>',$slug],['is_active','=',1]])->orderBy('id','DESC')->get();

        return view('frontend.articles.details',[
            'blogDetail'=> $blogDetails,
            'related_posts'=> $related_posts
        ]);
    }

    public function product($slug)
    {
        $category = Category::where(['is_active'=>1,
                                    'parent_id'=> 1])->get();
        // lấy slug hiển thị theo từng danh mục trên url
        $product = Category::where(['slug'=>$slug])->first();
        // lấy toàn bộ sản phẩm
        $products = Product::where(['is_active'=> 1,'category_id'=>$product->id])
            ->orderBy('position','ASC')
            ->orderBy('id','DESC')->paginate(6);
        return view('frontend.products.shop',[
            'products'=>$products,
            'category'=> $category
        ]);
    }

    public function productDetails($slug,$id)
    {
        $product = Product::where([
            'is_active'=>1,
            'slug'=>$slug
        ])->first();
        $productIn = Product::find($id);
        if (!$product) {
            return $this->notfound();
        }

        $category = Category::find($productIn->category_id);

        // step 2 : lấy list 10 SP liên quan
        $relatedProducts = Product::where([
            ['is_active' , '=', 1],
            ['category_id', '=' , $productIn->category_id ],
            ['id', '<>' , $productIn->$id]
        ])->orderBy('id', 'desc')
            ->take(10)
            ->get();


        return view('frontend.products.details',[
            'product'=>$product,
            'relatedProducts'=>$relatedProducts,
            'category'=> $category

        ]);

    }
    public function searchOld(Request $request)
    {
        // b1. Lấy từ khóa tìm kiếm
        $keyword = $request->input('key');

        $slug = str_slug($keyword);

        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";

        $products = Product::where([
            ['slug', 'like', '%' . $slug . '%'],
            ['is_active', '=', 1]
        ])->paginate(10);

//        $totalResult = $products->total(); // số lượng kết quả tìm kiếm

        return view('frontend.search', [
            'products' => $products,
//            'totalResult' => $totalResult,
            'keyword' => $keyword ? $keyword : ''

        ]);
    }
//    public function search(Request $request)
//    {
//        // b1. Lấy từ khóa tìm kiếm
//        $keyword = $request->input('tu-khoa');
//
//        $slug = str_slug($keyword);
//
//        //$sql = "SELECT * FROM products WHERE is_active = 1 AND slug like '%$keyword%'";
//
//        $products = Product::where([
//            ['slug', 'like', '%' . $slug . '%'],
//            ['is_active', '=', 1]
//        ])->paginate(12);
//
//        $data = Product::searchByQuery(array('match' => array('name' => $keyword)));
//        $products = $data->all();
//        $totalResult = $data->count(); // số lượng kết quả tìm kiếm
//
//        return view('frontend.search_product', [
//            'products' => $products,
//            'totalResult' => $totalResult,
//            'keyword' => $keyword ? $keyword : ''
//        ]);
//    }
    public function notfound()
    {
        return view('errors.404');
    }


}
