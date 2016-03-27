<?php

Route::group(['prefix'=>'categories', 'namespace'=>'CodePress\CodeCategory\Controllers'], function(){

    Route::get('AdminCategoriesController@index');

});