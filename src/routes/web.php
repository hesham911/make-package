<?php

use Illuminate\Support\Facades\Route;


Route::view('/','hpackage::hhome');

Route::get('h',function (){
    echo '<h2 style="text-align: center;color: blue">This form Package Route</h2>';
    return 'Done';
});

Route::group(['namespace' => 'hesham\hpackage\Http\Controllers'],function (){
    Route::get('h/index','heshamController@viewFromPackage')->name('fooooo');
});

