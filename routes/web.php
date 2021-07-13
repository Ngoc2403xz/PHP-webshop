<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','ShopController@index')->name('shop.index');
Route::get('/lien-he','ShopController@contact')->name('shop.contact');
Route::post('/lien-he','ShopController@postContact')->name('shop.postContact');
Route::get('/tin-tuc','ShopController@getArticles')->name('shop.articles');
Route::get('/chi-tiet-tin-tuc/{slug}','ShopController@getDetailArticle')->name('shop.getDetailArticle');
Route::get('/san-pham/{slug}','ShopController@product')->name('shop.product');
Route::get('/chi-tiet-san-pham/{slug}_{id}','ShopController@productDetails')->name('shop.productDetails');
Route::get('/gio-hang','ShopController@cart')->name('shop.cart');
Route::get('/tim-kiem','ShopController@searchOld')->name('shop.search');
Route::get('/404','ShopController@notfound')->name('shop.notfound');

Route::get('/gio-hang', 'CartController@cart')->name('shop.cart');

// Thêm sản phẩm vào giỏ hàng
Route::get('/gio-hang/them-sp-vao-gio-hang/{product_id}', 'CartController@addToCart')->name('shop.cart.add-to-cart');

// Xóa SP khỏi giỏ hàng
Route::get('/gio-hang/xoa-sp-gio-hang/{id}', 'CartController@removeToCart')->name('shop.cart.remove-to-cart');
// Cập nhật giỏ hàng
Route::get('/gio-hang/cap-nhat-so-luong-sp', 'CartController@updateToCart')->name('shop.cart.update-to-cart');
// Hủy đơn đặt hàng
Route::get('/gio-hang/huy-don-hang', 'CartController@destroy')->name('shop.cart.destroy');

Route::get('/dat-hang', 'CartController@order')->name('shop.cart.order');
Route::post('/dat-hang', 'CartController@postOrder')->name('shop.cart.postOrder');
Route::get('/dat-hang/hoan-tat-dat-hang', 'CartController@completedOrder')->name('shop.cart.completedOrder');


Route::get('/admin/login','AdminController@login')->name('admin.login');
Route::post('/admin/login','AdminController@postLogin')->name('admin.postLogin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin.logout');
// php artisan route:list
Route::group(['prefix'=> 'admin','as'=>'admin.','middleware'=>'checkLogin'] ,function () {
         Route::resource('banner', 'BannerController');
         Route::resource('category', 'CategoryController');
         Route::resource('product', 'ProductController');
         Route::resource('vendor','VendorController');
         Route::resource('article','ArticleController');
         Route::resource('setting','SettingController');
         Route::resource('user','UserController');
         Route::resource('brand','BrandController');
         Route::resource('order','OrderController');


});

