<?php

use Illuminate\Support\Facades\Route;

Route::get('h',function (){
    return 'this form Package';
});

Route::group(['namespace' => 'hesham\hpackage\Http\Controllers'],function (){
    Route::get('h/index','heshamController@viewFromPackage')->name('fooooo');
});

