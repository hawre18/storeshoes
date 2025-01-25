<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api','namespace'=>'App\Http\Controllers\Admin'],function () {
    Route::get('/categories', 'CategoryController@apiIndex');
    Route::post('/categories/attribute', 'CategoryController@apiIndexAttribute');
    Route::get('/province','AddressController@getAllProvince');
    Route::get('/cities/{provinceId}','AddressController@getAllCities');
    //Route::get('/products/{id}','ProductController@apiGetProduct');
   //Route::get('/sort-products/{id}/{sort}/{paginate}','ProductController@apiGetSortedProduct');
    //Route::get('/category-attribute/{id}','ProductController@apiGetCategoryAttributes');
    //Route::get('/filter-products/{id}/{sort}/{paginate}/{attributes}','ProductController@apiGetFilterProducts');

});
Route::group(['prefix'=>'apiUser','namespace'=>'App\Http\Controllers\User'],function () {
    //Route::get('/products/{id}','ProductController@apiGetProduct');
   //Route::get('/sort-products/{id}/{sort}/{paginate}','ProductController@apiGetSortedProduct');
    //Route::get('/category-attribute/{id}','ProductController@apiGetCategoryAttributes');
    //Route::get('/filter-products/{id}/{sort}/{paginate}/{attributes}','ProductController@apiGetFilterProducts');

});
Route::get('admin/register','App\Http\Controllers\Admin\Auth\RegisterController@showRegisterForm')->name('admin.Register');
Route::post('admin/register','App\Http\Controllers\Admin\Auth\RegisterController@RegisterSubmit')->name('admin.register.submit');
Route::get('admin/login','App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','App\Http\Controllers\Admin\Auth\LoginController@login')->name('admin.login.submit');
Route::get('admin/password/reset','App\Http\Controllers\Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');

Route::group(['middleware'=>'auth:admin','prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('categories','CategoryController');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::post('categories/save-setting/{id}','CategoryController@Setting')->name('save.setting');
    Route::get('categories/index-setting/{id}','CategoryController@indexSetting')->name('index.setting');
    Route::get('slides.delete/{id}','SlideController@delete')->name('slides.delete');
    Route::get('slides/publish/{id}/{status}','SlideController@publish')->name('slides.publish');
    Route::resource('slides','SlideController');
    Route::post('images/upload','ImageController@upload')->name('images.upload');
    Route::resource('brands','BrandController');
    Route::get('brands.delete/{id}','BrandController@delete')->name('brands.delete');
    Route::resource('blogs','BlogController');
    Route::get('blogs.delete/{id}','BlogController@delete')->name('blogs.delete');
    Route::resource('attribute-groups','AttributeGroupController');
    Route::get('attribute-groups.delete/{id}','AttributeGroupController@delete')->name('attribute-groups.delete');
    Route::resource('attribute-values','AttributeValueController');
    Route::get('attribute-values.delete/{id}','AttributeValueController@delete')->name('attribute-values.delete');
    Route::resource('products','ProductController');
    Route::get('products.delete/{id}','ProductController@delete')->name('products.delete');
    Route::get('logout','App\Http\Controllers\Admin\Auth\LoginController@logout')->name('admin.logout');

    });
Route::get('/', function () {
    return view('index.user.v1.index');
});
Route::group(['prefix'=>'/','namespace'=>'App\Http\Controllers\User'],function (){
   Route::get('regUser','RegisterController@register')->name('user.register');
   Route::post('/doRegUser', 'RegisterController@doRegister')->name('doRegister');
   Route::get('/login-phone', 'LoginController@loginPhone')->name('loginPhone');
   Route::post('/login-phone','LoginController@doLoginPhone')->name('doLoginPhone');
    Route::get('/verify', 'LoginController@verify')->name('verify');
    Route::post('/doVerify', 'LoginController@doVerify')->name('doVerify');
    Route::get('/','HomeController@index')->name('index');
    Route::get('category/{id}','ProductController@getProductByCategory')->name('category.index');
    Route::post('/remove-to-cart/{id}','CartController@removeItem')->name('cart.remove');
    Route::get('/add-to-cart/{id}','CartController@addToCart')->name('cart.add');
    Route::get('product-details/{id}','ProductController@getProductDetails')->name('product.details');
    Route::get('products-details/{id}', 'ProductController@showDetails')->name('products.quickView');
});
Route::group(['middleware'=>'auth:web','namespace'=>'App\Http\Controllers\User'],function (){
    Route::get('/profile','HomeController@profile')->name('user.profile');
    //Route::post('/coupon','Frontend\CouponController@addCoupon')->name('coupon.add');
    //Route::get('/order-verify','Frontend\OrderController@verify')->name('order.verify');
    //Route::get('/payment-verify/{id}','Frontend\PaymentController@verify')->name('payment.verify');
    Route::get('orders','OrderController@index')->name('profile.orders');
    Route::get('orders/lists/{id}','OrderController@getOrderLists')->name('profile.orders.lists');
    //Route::get('comment/store/{productId}/{userId}','Frontend\CommentController@store')->name('comment.store');
    //Route::get('orders','Frontend\OrderController@index')->name('orders.userindex');
    //Route::get('orders/products/{id}','Frontend\OrderController@getOrderLists')->name('orders.products');
    //Route::get('favorites','Frontend\FavoriteController@index')->name('favorites.index');
    //Route::get('payments/lists','Frontend\PaymentController@index')->name('payments.index');
    Route::resource('addresses','AddressController');
    Route::get('addresses.delete/{id}','AddressController@delete')->name('address.delete');
    Route::get('/logout','LoginController@userLogout')->name('user.logout');
});
