<?php

use Illuminate\Support\Facades\Route;
// use monjur\contact\Http\Controllers\ContactController;

Route::group(['namespace' => 'monjur\contact\Http\Controllers'], function () {
    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@store')->name('contact');
});
