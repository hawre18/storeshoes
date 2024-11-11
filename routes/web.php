<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::resource('categories','CategoryController');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
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
});
Route::get('/', function () {
    return view('index.user.v1.index');
});
