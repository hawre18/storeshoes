<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','namespace'=>'App\Http\Controllers\Admin'],function (){
    Route::resource('categories','CategoryController');
    Route::get('categories/delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::get('slides.delete/{id}','SlideController@delete')->name('slides.delete');
    Route::get('slides/publish/{id}/{status}','SlideController@publish')->name('slides.publish');
    Route::resource('slides','SlideController');
    Route::post('images/upload','ImageController@upload')->name('images.upload');
});
Route::get('/', function () {
    return view('index.user.v1.index');
});
