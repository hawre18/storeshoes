<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'api','namespace'=>'App\Http\Controllers\Admin'],function () {
    Route::get('/categories', 'CategoryController@apiIndex');
    Route::post('/categories/attribute', 'CategoryController@apiIndexAttribute');
    //Route::get('/province','Frontend\AddressController@getAllProvince');
    //Route::get('/cities/{provinceId}','Frontend\AddressController@getAllCities');
    //Route::get('/products/{id}','ProductController@apiGetProduct');
   //Route::get('/sort-products/{id}/{sort}/{paginate}','ProductController@apiGetSortedProduct');
    //Route::get('/category-attribute/{id}','ProductController@apiGetCategoryAttributes');
    //Route::get('/filter-products/{id}/{sort}/{paginate}/{attributes}','ProductController@apiGetFilterProducts');

});
Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
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
});
Route::get('/', function () {
    return view('index.user.v1.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
