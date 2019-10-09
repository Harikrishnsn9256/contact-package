<?php

Route::group(['namespace'=>'hari\contact\Http\Controllers'],function(){

Route::get('contact','ContactController@index');

Route::post('contact','ContactController@send')->name('contact');

});

